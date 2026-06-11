const fs = require('fs');
const path = require('path');

const srcDir = path.join(__dirname, '../home_lang_wp');
const outputDir = path.join(__dirname, '../lib/i18n/extracted');

if (!fs.existsSync(outputDir)) {
    fs.mkdirSync(outputDir, { recursive: true });
}

// Map Next.js locales to PHP locales
// The PHP files use codes like 'zh_CN', 'es_ES', 'es_MX', 'es_PE', 'bn_BD', etc.
// Next.js uses: 'en', 'es', 'es-mx', 'es-pe', 'id', 'sg', 'km', 'ph', 'bn', 'au', 'in', 'th', 'ja', 'vi', etc.
const localeMapping = {
    'th': 'th',
    'ja': 'ja',
    'id': 'id',
    'km': 'km',
    'ph': 'ph',
    'vi': 'vi',
    'zh_CN': 'zh', // or default mapping
    'hk': 'hk',
    'tw': 'zh-tw',
    'ko_KR': 'ko',
    'tr_TR': 'tr',
    'fr_FR': 'fr',
    'ru_RU': 'ru',
    'pt_BR': 'pt',
    'es_ES': 'es',
    'es_PE': 'es-pe',
    'es_MX': 'es-mx',
    'bn_BD': 'bn',
    'ur': 'ur',
    'uz_UZ': 'uz',
    'ir': 'fa',
    'en_AU': 'au',
    'en_IN': 'in',
    'en_SG': 'sg',
};

function cleanString(str) {
    if (!str) return '';
    // Remove leading/trailing quotes
    let cleaned = str.trim();
    if ((cleaned.startsWith("'") && cleaned.endsWith("'")) || (cleaned.startsWith('"') && cleaned.endsWith('"'))) {
        cleaned = cleaned.substring(1, cleaned.length - 1);
    }
    // Unescape quotes
    cleaned = cleaned.replace(/\\'/g, "'").replace(/\\"/g, '"');
    return cleaned.trim();
}

function parsePhpBlock(phpBlock) {
    // 1. Find the $texts array definition
    // It looks like: $texts = [ ... ];
    const arrayMatch = phpBlock.match(/\$texts\s*=\s*\[([\s\S]*?)\];/);
    if (!arrayMatch) return null;

    const arrayContent = arrayMatch[1];
    
    // Parse key-value pairs
    // Pattern: 'key' => 'value' or "key" => "value"
    const pairs = {};
    // Let's use a regex that matches either single or double quoted strings
    const pairRegex = /(?:'([^']+)'|"([^"]+)")\s*=>\s*(?:'([\s\S]*?)'(?=\s*,|\s*\]|\s*$)|"([\s\S]*?)"(?=\s*,|\s*\]|\s*$))/g;
    
    let match;
    while ((match = pairRegex.exec(arrayContent)) !== null) {
        const langKey = match[1] || match[2];
        const langVal = match[3] || match[4];
        if (langKey) {
            pairs[langKey] = cleanString(langVal);
        }
    }

    // 2. Find the default fallback text
    // It looks like: echo $texts[$locale] ?? 'Default Text';
    const fallbackMatch = phpBlock.match(/\?\?\s*(?:'([\s\S]*?)'|"([\s\S]*?)')/);
    let defaultText = '';
    if (fallbackMatch) {
        defaultText = cleanString(fallbackMatch[1] || fallbackMatch[2]);
    } else {
        // Fallback: look for echo '...'
        const echoMatch = phpBlock.match(/echo\s+(?:'([\s\S]*?)'|"([\s\S]*?)')/);
        if (echoMatch) {
            defaultText = cleanString(echoMatch[1] || echoMatch[2]);
        }
    }

    return {
        translations: pairs,
        default: defaultText
    };
}

function processFile(filePath) {
    const content = fs.readFileSync(filePath, 'utf-8');
    const fileName = path.basename(filePath, '.php');
    
    console.log(`Processing ${fileName}...`);

    // Find all PHP blocks: <?php ... ?>
    const phpBlocks = [];
    const blockRegex = /<\?php([\s\S]*?)\?>/g;
    let match;
    while ((match = blockRegex.exec(content)) !== null) {
        phpBlocks.push(match[1]);
    }

    const blocksData = [];
    phpBlocks.forEach((block, index) => {
        const parsed = parsePhpBlock(block);
        if (parsed) {
            blocksData.push({
                index,
                default: parsed.default,
                translations: parsed.translations
            });
        }
    });

    console.log(`Found ${blocksData.length} translation blocks in ${fileName}`);
    return blocksData;
}

function run() {
    const files = fs.readdirSync(srcDir).filter(f => f.endsWith('.php'));
    const allTranslations = {};

    files.forEach(file => {
        const filePath = path.join(srcDir, file);
        const fileKey = path.basename(file, '.php').replace(/^uk-/, ''); // e.g. whyus, features
        const blocks = processFile(filePath);
        
        blocks.forEach((block, bIdx) => {
            const key = `${fileKey}_block_${bIdx}`;
            
            // Register default English translation
            if (!allTranslations['en']) allTranslations['en'] = {};
            allTranslations['en'][key] = block.default;

            // Register other language translations
            Object.entries(block.translations).forEach(([phpLocale, text]) => {
                const nextLocale = localeMapping[phpLocale] || phpLocale.toLowerCase();
                if (!allTranslations[nextLocale]) allTranslations[nextLocale] = {};
                allTranslations[nextLocale][key] = text;
            });
        });
    });

    // Write translated JSON files for each locale
    Object.entries(allTranslations).forEach(([locale, dict]) => {
        const outputFile = path.join(outputDir, `${locale}.json`);
        fs.writeFileSync(outputFile, JSON.stringify(dict, null, 4), 'utf-8');
        console.log(`Saved ${Object.keys(dict).length} translations for locale "${locale}" to ${outputFile}`);
    });

    console.log('Extraction completed successfully!');
}

run();
