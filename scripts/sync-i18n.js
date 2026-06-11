const fs = require('fs');
const path = require('path');
const https = require('https');

const outputDir = path.join(__dirname, '../lib/i18n/extracted');

if (!fs.existsSync(outputDir)) {
    fs.mkdirSync(outputDir, { recursive: true });
}

// RFC-4180 compliant CSV parser in pure Javascript (no dependencies)
function parseCsv(text) {
    const lines = [];
    let row = [""];
    let inQuotes = false;

    for (let i = 0; i < text.length; i++) {
        const char = text[i];
        const nextChar = text[i + 1];

        if (char === '"') {
            if (inQuotes && nextChar === '"') {
                row[row.length - 1] += '"';
                i++; // skip next quote
            } else {
                inQuotes = !inQuotes;
            }
        } else if (char === ',' && !inQuotes) {
            row.push("");
        } else if ((char === '\r' || char === '\n') && !inQuotes) {
            if (char === '\r' && nextChar === '\n') {
                i++; // skip \n
            }
            lines.push(row);
            row = [""];
        } else {
            row[row.length - 1] += char;
        }
    }
    if (row.length > 1 || row[0] !== "") {
        lines.push(row);
    }
    return lines;
}

function fetchCsv(url) {
    return new Promise((resolve, reject) => {
        https.get(url, (res) => {
            if (res.statusCode < 200 || res.statusCode >= 300) {
                // Handle redirect (e.g. 301, 302, 307, 308 from Google)
                if (res.statusCode >= 300 && res.statusCode < 400 && res.headers.location) {
                    return resolve(fetchCsv(res.headers.location));
                }
                return reject(new Error(`Failed to fetch CSV: status code ${res.statusCode}`));
            }

            let data = '';
            res.on('data', (chunk) => {
                data += chunk;
            });
            res.on('end', () => {
                resolve(data);
            });
        }).on('error', (err) => {
            reject(err);
        });
    });
}

async function run() {
    // Check for URL in command line arguments or environment variables
    let sheetUrl = process.argv[2] || process.env.I18N_SHEETS_URL;
    
    if (!sheetUrl) {
        console.error('Error: Please specify the Google Sheets URL.');
        console.log('\nUsage:');
        console.log('  node scripts/sync-i18n.js <Google_Sheets_URL>');
        console.log('\nTo use single-sheet sync:');
        console.log('  Pass the published CSV URL: https://docs.google.com/spreadsheets/d/.../pub?output=csv');
        console.log('\nTo use multi-sheet (tabbed by language) sync:');
        console.log('  1. Share the Google Sheet as "Anyone with the link can view".');
        console.log('  2. Pass the browser edit link: https://docs.google.com/spreadsheets/d/<SPREADSHEET_ID>/edit');
        console.log('  3. Ensure you have tabs named after language codes: en, vi, th, zh, ja, es, id, km, ph, bn, hk, tr, fr, ru, ko, fa, pt, es-pe, es-mx, sg, in, au, ur, uz');
        process.exit(1);
    }

    console.log('Analyzing Google Sheets URL...');
    const idMatch = sheetUrl.match(/\/spreadsheets\/d\/([a-zA-Z0-9-_]+)/);
    const isPublished = sheetUrl.includes('/pub') || (idMatch && idMatch[1] === 'e');
    
    let csvUrls = [];
    // We fetch all supported languages that we want to sync
    const SHEET_NAMES = [
        'en', 'vi', 'th', 'ja', 'es', 'id', 'km', 'ph', 'bn', 'zh', 'hk', 'tr', 'fr', 'ru', 'ko', 'fa', 'pt', 'es-pe', 'es-mx', 'sg', 'in', 'au', 'ur', 'uz'
    ];

    if (idMatch && !isPublished) {
        const spreadsheetId = idMatch[1];
        console.log(`Detected Spreadsheet ID: ${spreadsheetId}`);
        console.log('Fetching multiple sheets/tabs (by language) from workbook...');
        csvUrls = SHEET_NAMES.map(name => ({
            name,
            url: `https://docs.google.com/spreadsheets/d/${spreadsheetId}/gviz/tq?tqx=out:csv&sheet=${encodeURIComponent(name)}`
        }));
    } else {
        console.log('Single published CSV URL detected.');
        csvUrls = [{ name: 'Master', url: sheetUrl }];
    }

    const dicts = {};
    
    try {
        for (const { name, url } of csvUrls) {
            console.log(`Fetching sheet [${name}]...`);
            let csvText;
            try {
                csvText = await fetchCsv(url);
            } catch (err) {
                if (idMatch && !isPublished) {
                    // It's normal to get errors if a language tab doesn't exist in their sheet yet, so just warn
                    console.warn(`Warning: Could not fetch sheet [${name}]. Check if tab exists and sheet is shared.`);
                    continue;
                } else {
                    throw err;
                }
            }

            const rows = parseCsv(csvText);
            if (rows.length === 0) continue;

            const header = rows[0];
            const keyIndex = header.indexOf('Key');

            if (keyIndex === -1) {
                console.warn(`Warning: Sheet [${name}] is missing "Key" column. Skipping.`);
                continue;
            }

            if (name === 'Master') {
                // Original single CSV parsing logic
                const languages = [];
                header.forEach((colName, idx) => {
                    if (idx !== keyIndex && colName.trim() !== '') {
                        languages.push({ code: colName.trim(), index: idx });
                    }
                });

                languages.forEach(lang => {
                    if (!dicts[lang.code]) {
                        dicts[lang.code] = {};
                    }
                });

                for (let i = 1; i < rows.length; i++) {
                    const row = rows[i];
                    const key = row[keyIndex] ? row[keyIndex].trim() : '';
                    if (!key) continue;

                    languages.forEach(lang => {
                        const translationVal = row[lang.index] !== undefined ? row[lang.index] : '';
                        dicts[lang.code][key] = translationVal;
                    });
                }
            } else {
                // Multi-sheet logic where name is the language code
                const langCode = name;
                let valIdx = 1; // Default for 'en'
                if (langCode !== 'en') {
                    valIdx = header.indexOf(langCode);
                    if (valIdx === -1) {
                        valIdx = 2; // Fallback to the third column (C)
                    }
                }

                if (!dicts[langCode]) {
                    dicts[langCode] = {};
                }

                for (let i = 1; i < rows.length; i++) {
                    const row = rows[i];
                    const key = row[keyIndex] ? row[keyIndex].trim() : '';
                    if (!key) continue;

                    const translationVal = row[valIdx] !== undefined ? row[valIdx] : '';
                    dicts[langCode][key] = translationVal;
                }
            }
        }

        const locales = Object.keys(dicts);
        if (locales.length === 0) {
            console.error('Error: No translation data found in any sheet.');
            process.exit(1);
        }

        console.log(`Found languages: ${locales.join(', ')}`);

        // Save translation files
        locales.forEach(locale => {
            const outputFile = path.join(outputDir, `${locale}.json`);
            let finalDict = dicts[locale];
            
            // Merge with existing file if it exists
            if (fs.existsSync(outputFile)) {
                try {
                    const existingContent = fs.readFileSync(outputFile, 'utf-8');
                    const existingDict = JSON.parse(existingContent);
                    finalDict = { ...existingDict, ...dicts[locale] };
                } catch (e) {
                    // Ignore parsing error and overwrite
                }
            }

            fs.writeFileSync(outputFile, JSON.stringify(finalDict, null, 4), 'utf-8');
            console.log(`Updated locale file: ${outputFile} (${Object.keys(finalDict).length} keys)`);
        });

        console.log('Successfully synchronized translations!');
    } catch (err) {
        console.error('Error syncing translations:', err.message);
        process.exit(1);
    }
}

run();
