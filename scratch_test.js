const languages = [
    "afr", "es-ar", "au", "bn", "km", "en-ca", "co", "en", "es", "fr", "hk", "in", "id", "ja", "en-my", "es-mx", "es-pe", "ur", "ph", "pt", "sg", "th", "tr", "vi", "zh", "ar", "ir", "ru", "ko"
];

async function testParallel() {
    console.log("Starting parallel fetches...");
    const promises = languages.map(async (locale) => {
        const url = `https://wemastertrade.com/${locale}/promotions/`;
        try {
            const res = await fetch(url);
            return `${locale}: ${res.status} -> ${res.url}`;
        } catch (e) {
            return `${locale}: Error: ${e.message}`;
        }
    });

    const results = await Promise.all(promises);
    results.forEach(r => console.log(r));
}
testParallel();
