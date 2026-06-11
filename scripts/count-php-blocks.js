const fs = require('fs');
const path = require('path');

const content = fs.readFileSync(path.join(__dirname, '../instant/uk-instant.php'), 'utf-8');

const blocks = [];
const lines = content.split('\n');

let inTextsArray = false;
let currentArrayContent = '';
let braceDepth = 0;
let startIndex = 0;

for (let i = 0; i < lines.length; i++) {
    const line = lines[i];
    
    if (line.match(/\$texts\s*=\s*\[/)) {
        inTextsArray = true;
        currentArrayContent = '';
        braceDepth = 0;
        startIndex = i;
        for (const ch of line) {
            if (ch === '[') braceDepth++;
            if (ch === ']') braceDepth--;
        }
        currentArrayContent += line + '\n';
        
        if (braceDepth <= 0) {
            const defaultVal = findDefaultValue(lines, i);
            blocks.push({ line: startIndex, defaultVal });
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
            const defaultVal = findDefaultValue(lines, i);
            blocks.push({ line: startIndex, defaultVal });
            inTextsArray = false;
        }
    }
}

function findDefaultValue(lines, startIdx) {
    const slice = lines.slice(startIdx, startIdx + 20).join('\n');
    const match = slice.match(/\?\?\s*'((?:[^'\\]|\\.)*)'/);
    if (match) {
        return match[1].replace(/\\'/g, "'").trim();
    }
    // Try double quotes
    const matchDouble = slice.match(/\?\?\s*"((?:[^"\\]|\\.)*)"/);
    if (matchDouble) {
        return matchDouble[1].replace(/\\"/g, '"').trim();
    }
    return '';
}

console.log(`Found ${blocks.length} blocks in uk-instant.php:`);
blocks.forEach((b, idx) => {
    console.log(`Block ${idx} (line ${b.line}): "${b.defaultVal.substring(0, 80)}"`);
});
