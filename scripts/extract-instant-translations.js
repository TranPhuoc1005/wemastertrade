/**
 * Extract translations from instant/ PHP files and save directly to Next.js locale JSON files
 * 
 * Covers:
 * - instant/uk-benefit.php  → keys: instant_benefit_block_0 .. N
 * - instant/uk-unique.php   → keys: instant_unique_block_0 .. N
 * - instant/uk-instant.php  → keys: instant_page_block_0 .. N
 */

const fs = require('fs');
const path = require('path');

// Mapping from PHP locale keys to our JSON file names
const PHP_TO_JSON = {
    'th': 'th',
    'zh_CN': 'zh',
    'tr_TR': 'tr',
    'fr_FR': 'fr',
    'es_ES': 'es',
    'es_PE': 'es-pe',
    'es_MX': 'es-mx',
    'ru_RU': 'ru',
    'ja': 'ja',
    'ko_KR': 'ko',
    'km': 'km',
    'bn_BD': 'bn',
    'hk': 'hk',
    'ir': 'fa',
    'ur': 'ur',
    'id': 'id',
    'pt_BR': 'pt',
    'uz_UZ': 'uz',
    'en_AU': 'au',
    'en_IN': 'in',
    'en_SG': 'sg',
};

/**
 * Alternative extraction using a robust line-by-line approach
 */
function extractTextBlocksRobust(phpContent) {
    const blocks = [];
    const lines = phpContent.split('\n');
    
    let inTextsArray = false;
    let currentArrayContent = '';
    let braceDepth = 0;
    
    for (let i = 0; i < lines.length; i++) {
        const line = lines[i];
        
        if (line.match(/\$texts\s*=\s*\[/)) {
            inTextsArray = true;
            currentArrayContent = '';
            braceDepth = 0;
            // Count opening brackets in this line
            for (const ch of line) {
                if (ch === '[') braceDepth++;
                if (ch === ']') braceDepth--;
            }
            currentArrayContent += line + '\n';
            
            if (braceDepth <= 0) {
                // Array closed on same line, now find the default value
                const defaultVal = findDefaultValue(lines, i);
                blocks.push(parseTextBlock(currentArrayContent, defaultVal));
                inTextsArray = false;
            }
            continue;
        }
        
        if (inTextsArray) {
            currentArrayContent += line + '\n';
            for (const ch of line) {
                if (ch === '[') braceDepth++;
                if (ch === ']') braceDepth--;
            }
            
            if (braceDepth <= 0) {
                // Array closed, find the default value
                const defaultVal = findDefaultValue(lines, i);
                blocks.push(parseTextBlock(currentArrayContent, defaultVal));
                inTextsArray = false;
            }
        }
    }
    
    return blocks;
}

function findDefaultValue(lines, startIdx) {
    const slice = lines.slice(startIdx, startIdx + 20).join('\n');
    const match = slice.match(/\?\?\s*'((?:[^'\\]|\\.)*)'/);
    if (match) {
        return match[1].replace(/\\'/g, "'").trim();
    }
    return '';
}

function parseTextBlock(arrayContent, defaultValue) {
    const localeMap = {};
    
    // Parse 'locale' => 'value' pairs - handle multiline values
    const keyPattern = /'([a-zA-Z_]+)'\s*=>/g;
    let keyMatch;
    const keys = [];
    
    while ((keyMatch = keyPattern.exec(arrayContent)) !== null) {
        keys.push({ locale: keyMatch[1], startIdx: keyMatch.index + keyMatch[0].length });
    }
    
    for (let k = 0; k < keys.length; k++) {
        const start = keys[k].startIdx;
        const end = k + 1 < keys.length ? keys[k + 1].startIdx - keys[k + 1].locale.length - 6 : arrayContent.length;
        const valueSection = arrayContent.substring(start, end);
        
        let value = '';
        let inStr = false;
        let escaped = false;
        
        for (let c = 0; c < valueSection.length; c++) {
            const ch = valueSection[c];
            
            if (!inStr) {
                if (ch === "'") {
                    inStr = true;
                    continue;
                }
            } else {
                if (ch === '\\') {
                    escaped = true;
                    continue;
                }
                if (ch === "'" && !escaped) {
                    if (valueSection[c + 1] === "'") {
                        value += "'";
                        c++;
                        continue;
                    }
                    break;
                }
                if (escaped) {
                    if (ch === "'") value += "'";
                    else if (ch === "n") value += "\n";
                    else value += ch;
                    escaped = false;
                    continue;
                }
                value += ch;
            }
        }
        
        localeMap[keys[k].locale] = value.trim();
    }
    
    return { phpLocaleMap: localeMap, defaultValue: defaultValue.trim() };
}

// ============== MAIN ==============

const instantDir = path.join(__dirname, '../instant');
const jsonDir = path.join(__dirname, '../lib/i18n/extracted');

console.log('\n--- Extracting Instant Page Translations ---');

// 1. Extract from files
const benefitPhp = fs.readFileSync(path.join(instantDir, 'uk-benefit.php'), 'utf-8');
const benefitBlocks = extractTextBlocksRobust(benefitPhp);
console.log(`Found ${benefitBlocks.length} blocks in uk-benefit.php`);

const uniquePhp = fs.readFileSync(path.join(instantDir, 'uk-unique.php'), 'utf-8');
const uniqueBlocks = extractTextBlocksRobust(uniquePhp);
console.log(`Found ${uniqueBlocks.length} blocks in uk-unique.php`);

const instantPhp = fs.readFileSync(path.join(instantDir, 'uk-instant.php'), 'utf-8');
const instantBlocks = extractTextBlocksRobust(instantPhp);
console.log(`Found ${instantBlocks.length} blocks in uk-instant.php`);

// Compile map of new keys to write
const newTranslations = {}; // { locale: { key: value } }

// Helper to register translation
function addTranslation(locale, key, value) {
    if (!newTranslations[locale]) {
        newTranslations[locale] = {};
    }
    newTranslations[locale][key] = value;
}

// Map benefit blocks
benefitBlocks.forEach((block, idx) => {
    const key = `instant_benefit_block_${idx}`;
    // English (default)
    addTranslation('en', key, block.defaultValue);
    // Other languages
    Object.entries(block.phpLocaleMap).forEach(([phpLocale, value]) => {
        const jsonLocale = PHP_TO_JSON[phpLocale];
        if (jsonLocale) {
            addTranslation(jsonLocale, key, value);
        }
    });
});

// Map unique blocks
uniqueBlocks.forEach((block, idx) => {
    const key = `instant_unique_block_${idx}`;
    addTranslation('en', key, block.defaultValue);
    Object.entries(block.phpLocaleMap).forEach(([phpLocale, value]) => {
        const jsonLocale = PHP_TO_JSON[phpLocale];
        if (jsonLocale) {
            addTranslation(jsonLocale, key, value);
        }
    });
});

// Map instant blocks
instantBlocks.forEach((block, idx) => {
    const key = `instant_page_block_${idx}`;
    addTranslation('en', key, block.defaultValue);
    Object.entries(block.phpLocaleMap).forEach(([phpLocale, value]) => {
        const jsonLocale = PHP_TO_JSON[phpLocale];
        if (jsonLocale) {
            addTranslation(jsonLocale, key, value);
        }
    });
});

// Update JSON files
const jsonFiles = fs.readdirSync(jsonDir).filter(f => f.endsWith('.json'));

jsonFiles.forEach(file => {
    const locale = path.basename(file, '.json');
    const filePath = path.join(jsonDir, file);
    
    let dict = {};
    try {
        dict = JSON.parse(fs.readFileSync(filePath, 'utf-8'));
    } catch (e) {
        console.error(`Error reading ${file}:`, e.message);
    }
    
    const localeTranslations = newTranslations[locale] || {};
    const updatedDict = { ...dict, ...localeTranslations };
    
    fs.writeFileSync(filePath, JSON.stringify(updatedDict, null, 4), 'utf-8');
    console.log(`Updated ${file} with Instant Page translations (${Object.keys(localeTranslations).length} keys added/updated)`);
});

console.log('\n✅ Extraction and integration completed successfully!');
