const fs = require('fs');
const path = require('path');

const extractedDir = path.join(__dirname, '../lib/i18n/extracted');
const outputFile = path.join(__dirname, '../translations.csv');

// List of locales in order we want to display in CSV
const locales = [
    'en', 'vi', 'th', 'ja', 'es', 'id', 'km', 'ph', 'bn', 'zh', 'hk', 
    'tr', 'fr', 'ru', 'ko', 'fa', 'pt', 'es-pe', 'es-mx', 'sg', 'in', 'au',
    'ur', 'uz', 'ar'
];

function escapeCsvValue(val) {
    if (val === null || val === undefined) return '';
    let str = String(val);
    // Escape double quotes by doubling them
    str = str.replace(/"/g, '""');
    // If it contains quotes, commas, or newlines, wrap in quotes
    if (str.includes(',') || str.includes('\n') || str.includes('\r') || str.includes('"')) {
        return `"${str}"`;
    }
    return str;
}

function run() {
    console.log('Generating CSV from extracted JSONs...');
    
    // Read all JSON files
    const dicts = {};
    const allKeys = new Set();
    
    locales.forEach(locale => {
        const filePath = path.join(extractedDir, `${locale}.json`);
        if (fs.existsSync(filePath)) {
            try {
                const dict = JSON.parse(fs.readFileSync(filePath, 'utf-8'));
                dicts[locale] = dict;
                Object.keys(dict).forEach(key => allKeys.add(key));
            } catch (err) {
                console.error(`Error parsing ${locale}.json:`, err);
            }
        } else {
            dicts[locale] = {};
        }
    });

    const sortedKeys = Array.from(allKeys).sort();
    console.log(`Found ${sortedKeys.length} unique translation keys across all locales.`);

    const csvRows = [];
    
    // Header row
    const header = ['Key', ...locales];
    csvRows.push(header.map(escapeCsvValue).join(','));

    // Data rows
    sortedKeys.forEach(key => {
        const row = [key];
        locales.forEach(locale => {
            row.push(dicts[locale][key] || '');
        });
        csvRows.push(row.map(escapeCsvValue).join(','));
    });

    fs.writeFileSync(outputFile, csvRows.join('\n'), 'utf-8');
    console.log(`Saved unified CSV to ${outputFile}`);
}

run();
