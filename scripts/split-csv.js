const fs = require('fs');
const path = require('path');

const csvPath = path.join(__dirname, '../translations.csv');
const extractedDir = path.join(__dirname, '../lib/i18n/extracted');

if (!fs.existsSync(extractedDir)) {
    fs.mkdirSync(extractedDir, { recursive: true });
}

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

if (!fs.existsSync(csvPath)) {
    console.error('Error: translations.csv does not exist!');
    process.exit(1);
}

console.log('Reading translations.csv...');
const csvText = fs.readFileSync(csvPath, 'utf-8');
const rows = parseCsv(csvText);

if (rows.length === 0) {
    console.error('Error: CSV is empty');
    process.exit(1);
}

const header = rows[0];
const keyIndex = 0;
const languages = [];

header.forEach((colName, idx) => {
    if (idx !== keyIndex && colName.trim() !== '') {
        languages.push({ code: colName.trim(), index: idx });
    }
});

const dicts = {};
languages.forEach(lang => {
    dicts[lang.code] = {};
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

languages.forEach(lang => {
    const outputFile = path.join(extractedDir, `${lang.code}.json`);
    
    // Read existing JSON if exists to preserve keys not in CSV
    let finalDict = dicts[lang.code];
    if (fs.existsSync(outputFile)) {
        try {
            const existingDict = JSON.parse(fs.readFileSync(outputFile, 'utf-8'));
            finalDict = { ...existingDict, ...finalDict };
        } catch (e) {
            // Overwrite
        }
    }

    fs.writeFileSync(outputFile, JSON.stringify(finalDict, null, 4), 'utf-8');
    console.log(`Updated locale file: ${outputFile} (${Object.keys(finalDict).length} keys)`);
});

console.log('Successfully split CSV to JSON files!');
