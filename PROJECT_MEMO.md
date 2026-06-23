# Project Memo: WeMasterTrade (WMT) Next.js Platform

This document serves as a complete memory snapshot and development guide for the **WeMasterTrade (WMT)** multilingual trading evaluation service platform. Read this file to instantly understand the codebase structure, translation pipelines, API integrations, and coding standards.

---

## 1. Project Context & Purpose
**WeMasterTrade (WMT)** is a premium, multilingual trading evaluation platform. 
- **Goal:** Allow users worldwide to evaluate their trading skills, participate in trading challenges, view payout statistics, read announcements/seminars/blogs, and register for accounts.
- **Environment:** Headless frontend powered by Next.js, syncing content and stats from a backend WordPress site (`https://wemastertrade.com`).

---

## 2. Tech Stack & Dependencies
- **Core Framework:** Next.js `16.2.6` (App Router)
- **Runtime:** React `19.2.4` & React DOM `19.2.4`
- **Styling:** Tailwind CSS `^4` (with custom Global CSS in `app/styles.css`, `base.css`, and `responsive.css`)
- **Key Client Libraries:**
  - `@fancyapps/ui` (Fancybox lightbox for images/videos/certificates)
  - `swiper` (Slider components)
  - `chart.js` (Payout graphs/analytics)
  - `zustand` (State management)
  - `@tanstack/react-query` (Data fetching & caching)
  - `xlsx` (Excel generating/reading utility)
- **Development Tooling:** TypeScript `^5`, ESLint `^9`

---

## 3. Directory & File Structure
```
wmt/
├── app/                             # Next.js App Router root
│   ├── [lang]/                      # Root route for locales
│   │   ├── layout.tsx               # Root layout (Header, Footer, Global Scripts)
│   │   ├── page.tsx                 # Landing / Home Page
│   │   ├── announcement/            # Announcements & Timeline Page
│   │   └── payout/                  # Payout statistics & Daily Payouts table
│   ├── api/                         # Backend Proxy Endpoints
│   │   ├── announcement/            # Proxy requests to timeline-proxy.php
│   │   └── blog-posts/              # Proxy requests to blog queries
│   └── styles.css                   # Main custom stylesheet (with base.css and responsive.css)
│
├── components/                      # Reusable React UI Components
│   ├── layout/                      # Header, Footer, LanguageSwitcher, GlobalScripts
│   ├── sections/                    # Section-specific components (Home, Payout, Announcement)
│   └── ui/                          # Shared UI elements
│
├── lib/                             # Configuration and core helper utilities
│   └── i18n/                        # Core internationalization settings
│       ├── config.ts                # Supported languages (29 locales), metadata, and flags
│       ├── getDictionary.ts         # Logic to resolve and merge static/dynamic translations
│       ├── dictionaries/            # Base dictionary definitions for standard locales
│       └── extracted/               # Dynamically extracted translations (JSON format)
│
├── services/                        # Service layer logic
│   ├── wordpress/                   # WordPress REST/CPT fetch calls (payout.ts, announcement.ts)
│   └── announcement.ts              # Local API endpoint client
│
├── hooks/                           # Custom React Hooks
│   ├── usePayoutTable.ts            # Daily payouts table fetch, cache, search & pagination logic
│   └── useFormatDate.ts             # Formatting date/time for announcements
│
├── home_lang_wp/                    # WordPress legacy PHP theme source pages (for translation extraction)
├── instant/                         # Instant Funding legacy PHP source pages (for translation extraction)
├── scripts/                         # Automation & Localization utilities
│   ├── extract-wp-translations.js   # Extract text arrays from home_lang_wp PHP files to JSON
│   ├── extract-instant-translations.js # Extract text arrays from instant PHP files to JSON
│   ├── generate-csv.js              # Aggregate all JSON translations into a single translations.csv
│   ├── generate-excel.js            # Compile CSV to a tab-separated Excel sheet for Google Drive
│   ├── split-csv.js                 # Split translations.csv back into individual locale JSONs
│   └── sync-i18n.js                 # Pull translations dynamically from a Google Sheet CSV URL
│
└── timeline-proxy.php / announcement.php # WordPress theme templates running on backend server
```

---

## 4. Key Logic & Data Flows

### A. The Localization & Translation Pipeline
WMT supports **29 locales** (configured in `lib/i18n/config.ts`), including regional overrides like `es-pe` (Peru) and `es-mx` (Mexico).
```
   [ PHP Legacy Code ]                     [ Google Sheets / CSV ]
  (home_lang_wp & instant)                            │
           │                                          ▼
           ▼ (extract scripts)                  (sync-i18n.js)
  [ Individual JSONs ] ◄──────────────────────────────┘
  (lib/i18n/extracted/*.json)
           │
           ▼ (generate-csv.js)
  [ Master translations.csv ]
           │
           ▼ (generate-excel.js)
  [ translations_by_language_v2.xlsx ]
```

1. **Extraction:**
   - Run `node scripts/extract-wp-translations.js` to parse all `$texts = [...]` PHP blocks in `home_lang_wp/` into localized JSON files under `lib/i18n/extracted/`.
   - Run `node scripts/extract-instant-translations.js` to extract benefits, unique Selling Points, and pages from `instant/` PHP files to the same JSON directory.
2. **Aggregation:**
   - Run `node scripts/generate-csv.js` to compile all JSON translations into `translations.csv`.
   - Run `node scripts/generate-excel.js` to build `translations_by_language_v2.xlsx` where each language is neatly separated into its own spreadsheet tab for translator review.
3. **Synchronization:**
   - `node scripts/sync-i18n.js <Google_Sheets_URL>` fetches translations from shared Google Sheets tabs and merges them directly back into the `extracted/*.json` files.
4. **Resolution (`getDictionary.ts`):**
   - Combines the base language structure, static dictionary objects, dynamic key overrides in `lib/i18n/extracted/{locale}.json`, and package translations into a unified dictionary object passed to Server and Client components.

### B. WordPress API Integrations & Proxy routing
1. **Announcements / Timeline (`timeline-proxy.php`):**
   - The WordPress backend uses `timeline-proxy.php` to query regular blog posts, promotions (Custom Post Type), and seminars (Custom Post Type), filtering out blocked languages.
   - Next.js fetches from `/api/announcement`, which calls `getAnnouncementItems` in `services/wordpress/announcement.ts`, fetching clean JSON payload (`get_data=1`, `output=json`) from the WordPress server:
     `https://wemastertrade.com/wp-content/themes/flatsome/uk-template/ajax/timeline-proxy.php`
2. **Payout Data (`services/wordpress/payout.ts`):**
   - Fetches stats and lists directly from WordPress JSON endpoints:
     - YouTube Playlists: `/wp-json/custom/v1/youtube-playlist`
     - Region stats: `/wp-json/custom/v1/continent-payout`
     - Daily Payout logs: `/wp-json/custom/v1/daily-payout`
   - Client components interact through custom hooks (`usePayoutTable.ts`) featuring:
     - **Debounced Searching:** (400ms delay) preventing excessive network requests.
     - **Page Caching:** Using a `pageCacheRef` to store fetched pages for instant load on page back/forth.
     - **Scroll Intersection:** Lazy loading initialization when the table scrolls into viewport.

---

## 5. Style Code & Design Language
- **Theme Palette:** High-contrast, premium dark design.
  - Primary Dark Background: `#000000` / `#0c0c0c` (`--b-cl`)
  - Primary Gold Accent: `#facc15` (`--main-cl`)
  - Typography Color: `#ffffff` (`--w-cl`)
- **Typography:** Custom font Poppins (`--font-family`), with default sizes set at `180%` (responsive overrides apply in mobile layouts).
- **Glassmorphism:** Elegant semi-transparent elements using `.border__glassed` which uses masking and gradients to paint subtle glass borders.
- **Interactive UI:** Smooth transitions (`transition: all 0.3s ease`), custom sliders (Swiper), and interactive video popups (Fancybox binds to `.lightbox-item` dynamically).

---

## 6. Current Project Health & Environment Status
- **Type Safety:** TypeScript is fully passing. Running `npx tsc --noEmit` exits with status `0`.
- **Runtime:** Dev server is operational (`npm run dev`).
- **Formatting:** Clean code format with standard ESLint configurations. No static errors present.
