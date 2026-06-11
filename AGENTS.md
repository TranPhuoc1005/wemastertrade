<!-- BEGIN:nextjs-agent-rules -->

# This is NOT the Next.js you know

This version has breaking changes — APIs, conventions, and file structure may all differ from your training data. Read the relevant guide in `node_modules/next/dist/docs/` before writing any code. Heed deprecation notices.

# Coding Principles & Workflow

## 1. Project Overview

This project is a multilingual trading evaluation service platform built with Next.js 14+ App Router, TypeScript, TailwindCSS, and Shadcn UI.

**Key Technologies:**

- **Framework:** Next.js 14+ (App Router)
- **Language:** TypeScript
- **Styling:** TailwindCSS + Shadcn UI components
- **Data Fetching:** React `cache` API for client-side data, Server Components
- **Routing:** App Router, Server Actions, Nested Layouts
- **State Management:** React `useState`, `useEffect`, `useTransition`
- **Forms:** `react-hook-form` with validation schemas
- **Internationalization:** Custom `useLang` hook, server-side language negotiation
- **Animation:** `framer-motion` for page transitions

## 2. Project Structure

```
app/                          # App Router routes
├─ [lang]/
│   ├─ page.tsx              # Home page
│   ├─ layout.tsx            # Root layout with language navigation
│   └─ i18n/                 # Language-specific UI components
│       ├─ messages/
│       │   ├─ home.json
│       │   └─ header.json
│       └─ index.tsx         # Language context and provider
│
├─ styles/
│   └─ styles.css            # Global styles, Tailwind, Shadcn components
│
components/
├─ layout/
│   ├─ Header.tsx            # Header component with dynamic language menu
│   ├─ Footer.tsx            # Footer component
│   └─ LanguageSwitcher.tsx  # Language navigation
│
├─ sections/
│   └─ home/
│       ├─ Hero.tsx          # Home page hero section
│       ├─ Package.tsx       # Trading packages
│       └─ WhyChoose.tsx       # Why choose WMT
│
├─ ui/                         # Shadcn UI components
│
lib/
├─ i18n/
│   ├─ index.ts              # Language context and hooks
│   ├─ types.ts              # Type definitions
│   ├─ getDictionary.ts      # Dictionary loading
│   ├─ dictionaries/         # JSON dictionaries
│   │   ├─ en.ts
│   │   ├─ th.ts
│   │   └─ cn.ts
│   └─ languages.ts          # Language codes and display names
│
├─ utils/
│   └─ serverUtils.ts        # Server-side utilities
│
public/
```

## 3. Language & Localization

### Language Context

The language context is managed in `app/[lang]/i18n/index.tsx` and `lib/i18n/index.ts`.

- **Language Codes:** `th` (Thai), `en` (English), `cn` (Chinese)
- **Provider:** `LangProvider` manages language state
- **Current Language:** `currentLang` state (string)
- **Dictionaries:** Loaded from `lib/i18n/dictionaries/` based on language
- **Switcher:** `LanguageSwitcher.tsx` component for changing languages

**Server-Side Language Negotiation:**

```typescript
// app/[lang]/i18n/index.tsx - Simplified
export async function LangProvider({ children, params }) {
  const { lang } = await params;
  const dict = await getDictionary(lang);

  // Pass dictionary and language down through context
  return (
    <LangContext.Provider value={{ currentLang: lang, dict }}>
      {children}
    </LangContext.Provider>
  );
}
```

**Loading Dictionaries:**

```typescript
// lib/i18n/getDictionary.ts - Simplified
const dictionaries = {
    en: () => import("./dictionaries/en").then((m) => m.default),
    th: () => import("./dictionaries/th").then((m) => m.default),
    cn: () => import("./dictionaries/cn").then((m) => m.default),
};

export const getDictionary = async (locale: string) =>
    dictionaries[locale as keyof typeof dictionaries]() ?? (await dictionaries["en"])();
```

## 4. State Management

### Page Transitions

- **Library:** `framer-motion`
- **Mechanism:** Each page uses `motion.main` with `initial`, `animate`, `exit` props
- **Custom Hook:** `usePageTransition` in `lib/i18n/index.ts` manages transition state
- **Types:** `PageTransitionState` enum (`initial`, `in`, `out`, `initial_out`)

**Example in `app/[lang]/page.tsx`:**

```tsx
const { transition, transitionDuration } = usePageTransition(currentLang, "home");

return (
    <motion.main
        initial="initial"
        animate={transition}
        exit="initial_out"
        variants={pageTransitionVariants}
        transition={{
            duration: transitionDuration,
            ease: [0.25, 1, 0.5, 1],
            delay: 0.1,
        }}
        className="min-h-screen pt-32 md:pt-44">
        <Hero dict={dict} />
        <Package dict={dict} />
        <WhyChoose dict={dict} />
    </motion.main>
);
```

### Page-Specific State

- Use `useState` and `useEffect` for local component state
- Keep state local to components unless it needs to be shared across pages
- Server Actions can return state updates for client components

## 5. Navigation

### Server Actions for Navigation

- Use Server Actions for navigation between pages
- Wrap actions in `useTransition` for smooth UX
- Set `shallow: true` to update URL without full page reload

**Example:**

```typescript
// lib/i18n/index.ts - Simplified
export function usePageTransition(currentLang: string, pageKey: string) {
    const router = useRouter();
    const [isPending, startTransition] = useTransition();
    const [direction, setDirection] = useState(0);

    const navigate = (newLang: string, newPageKey?: string) => {
        if (newLang === currentLang && !newPageKey) return;

        const newDirection = newLang !== currentLang ? 1 : direction || 1;
        setDirection(newDirection);

        startTransition(() => {
            router.push(`/${newLang}${newPageKey ? `/${newPageKey}` : ""}`, {
                shallow: true,
            });
        });
    };

    return {
        navigate,
        isPending,
        direction,
    };
}
```

### Navigation API

```typescript
// app/[lang]/page.tsx - Simplified
import { useRouter } from "next/navigation";
import { usePageTransition } from "@/lib/i18n";

const router = useRouter();
const { navigate } = usePageTransition(currentLang, "home");

// Navigate to home page
navigate(currentLang);

// Navigate to about page
navigate(currentLang, "about");

// Switch language to English
navigate("en");
```

## 6. Data Fetching

### Client-Side Data with `cache`

```typescript
// lib/i18n/index.ts - Example
export const [dataCache, setDataCache, clearCache] = useCache<Dictionary>({});

// Get data from cache
const cachedDict = dataCache();

// Update cache
setDataCache(newDict);
```

### Server Components

```typescript
// app/[lang]/page.tsx - Example
export default async function Home({ params }: { params: { lang: string } }) {
  const { lang } = await params;
  const dict = await getDictionary(lang);

  return (
    <LangProvider lang={lang
```
