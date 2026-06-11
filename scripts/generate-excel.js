const fs = require('fs');
const path = require('path');
const XLSX = require('xlsx');

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

const csvPath = path.join(__dirname, '../translations.csv');
const excelPath = path.join(__dirname, '../translations_by_language_v2.xlsx');

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
const keyIdx = 0;
const enIdx = header.indexOf('en');

if (enIdx === -1) {
    console.error('Error: Could not find English "en" column as base language.');
    process.exit(1);
}

// Find all language columns present in CSV header
const languages = [];
header.forEach((colName, idx) => {
    if (idx !== keyIdx && colName.trim() !== '') {
        languages.push({ code: colName.trim(), index: idx });
    }
});

const wb = XLSX.utils.book_new();

languages.forEach(lang => {
    const sheetRows = [];
    
    if (lang.code === 'en') {
        // English sheet: [Key, en]
        sheetRows.push(['Key', 'en']);
        for (let i = 1; i < rows.length; i++) {
            const row = rows[i];
            const key = row[keyIdx] ? row[keyIdx].trim() : '';
            if (!key) continue;
            const enVal = row[enIdx] || '';
            sheetRows.push([key, enVal]);
        }
    } else {
        // Other language sheet: [Key, en (Reference), language_code]
        sheetRows.push(['Key', 'en', lang.code]);
        for (let i = 1; i < rows.length; i++) {
            const row = rows[i];
            const key = row[keyIdx] ? row[keyIdx].trim() : '';
            if (!key) continue;
            const enVal = row[enIdx] || '';
            const langVal = row[lang.index] !== undefined ? row[lang.index] : '';
            sheetRows.push([key, enVal, langVal]);
        }
    }

    const ws = XLSX.utils.aoa_to_sheet(sheetRows);
    XLSX.utils.book_append_sheet(wb, ws, lang.code);
    console.log(`Created sheet [${lang.code}] with ${sheetRows.length - 1} keys.`);
});

XLSX.writeFile(wb, excelPath);
console.log(`\nSuccess! Generated language-separated Excel file at: ${excelPath}`);
console.log('You can now upload translations.xlsx directly to Google Drive.');
