const samochodyRaw = `[
    {
        "marka": "Peugeot",
        "model": "206",
        "seria": null,
        "rokProdukcji": "2005",
        "przebieg": 199342,
        "moc": "75 KM",
        "paliwo": "Benzyna",
        "skrzyniaBiegow": "Manualna",
        "rodzajNadwozia": "Hatchback",
        "kolor": "czarny",
        "liczbaMiejsc": 5,
        "liczbaDrzwi": 3,
        "opis": "Peugeot 206, produkowany od 1998 do 2010 roku, to kompaktowy samochód francuskiego producenta, który szybko zdobył popularność na rynku europejskim. Samochód znany z charakterystycznego designu i dynamicznej stylistyki..."
    },
    {
        "marka": "Honda",
        "model": "Civic",
        "seria": "8",
        "rokProdukcji": "2010",
        "przebieg": 143176,
        "moc": "105 KM",
        "paliwo": "Benzyna",
        "skrzyniaBiegow": "Manualna",
        "rodzajNadwozia": "Hatchback",
        "kolor": "czarny",
        "liczbaMiejsc": 5,
        "liczbaDrzwi": 5,
        "opis": "Ósma generacja modelu Honda Civic, wprowadzona na rynek w 2006 roku, stanowiła istotną zmianę w designie i technologii tego popularnego kompaktowego samochodu. Civic 8 utrzymała reputację... "
    },
    {
        "marka": "Audi",
        "model": "A4b7",
        "seria": "-",
        "rokProdukcji": "2005",
        "przebieg": 202176,
        "moc": "163 KM",
        "paliwo": "Benzyna + LPG",
        "skrzyniaBiegow": "Manualna",
        "rodzajNadwozia": "Hatchback",
        "kolor": "black",
        "liczbaMiejsc": 5,
        "liczbaDrzwi": 5,
        "opis": "Audi A4 B5, produkowana w latach 1994–2001, to ikona niemieckiego inżynieryjnego mistrzostwa i elegancji. Ten model został entuzjastycznie przyjęty dzięki swojemu charakterystycznemu designowi oraz doskonałemu wykonaniu..."
    }
]`;

const samochody = JSON.parse(samochodyRaw);

document.querySelector("#art-01 > h2").innerHTML = samochody[2].marka;

document.querySelector("#art-02 > h2").innerHTML = samochody[0].marka;

document.querySelector("#art-03 > h2").innerHTML = samochody[1].marka;

document.querySelector("#art-01 > p").innerHTML = samochody[2].opis;

document.querySelector("#art-02 > p").innerHTML = samochody[0].opis;

document.querySelector("#art-03 > p").innerHTML = samochody[1].opis;

