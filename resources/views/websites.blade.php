<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Workshop Webdevelopment — Stap 1</title>
    @if (app()->environment('local'))
        @vite('resources/scss/app.scss')
    @else
        <link rel="stylesheet" href="{{ public_path('build/assets/app.css') }}">
    @endif
</head>
<body>
    <x-banner />

<x-page :number="1">
    <x-title>Wat is een website?</x-title>

    <x-step number="1">
        <x-text>
            <p>
                Een website bestaat uit bestanden. In deze workshop ga je zelf zo'n website maken.
                Je werkt straks vooral met twee soorten bestanden:
            </p>
            <ul>
                <li><b>HTML</b> voor de inhoud van de pagina</li>
                <li><b>CSS</b> voor de kleuren, ruimte en opmaak</li>
            </ul>
        </x-text>
    </x-step>

    <x-step number="2">
        <x-text>
            <p>
                Je browser leest die bestanden en maakt daar een webpagina van.
                HTML vertelt <b>wat</b> er op de pagina staat.
                CSS vertelt <b>hoe</b> het eruitziet.
            </p>
        </x-text>

        <x-callout>
            We beginnen klein. Eerst maken we alleen een titel en een stukje tekst.
        </x-callout>
    </x-step>

    <x-step number="3">
        <x-image
            alt="Windows Verkenner met een map waarin later websitebestanden kunnen staan"
            src="{{ public_path('img/websites/directory-in-explorer.jpg') }}"
            caption="Een website begint vaak als een gewone map op je computer"
        />
    </x-step>
</x-page>


<x-page :number="2">
    <x-title>Je eerste bestand</x-title>

    <x-step number="1">
        <x-text>
            <p>
                Maak eerst een nieuwe map aan op de USB-stick, bijvoorbeeld met de naam <b>mijn-website</b>.
                In deze nieuwe map zet je straks al je bestanden.
            </p>
        </x-text>

        <x-image
            alt="Windows Verkenner waarin een nieuwe map met de naam mijn-website wordt aangemaakt"
            src="{{ public_path('img/websites/new-folder.jpg') }}"
            caption="Maak eerst een map voor je website"
        />
        <x-callout>
            Het maakt niet uit of er al andere bestanden op de USB-stick staan.
        </x-callout>
    </x-step>
</x-page>

<x-page :number="3">
    <x-step number="2">
        <x-text>
            <p>
                Maak in die map een nieuw bestand met de naam <b>index.html</b>. Dit kan je doen door met de rechtermuisknop in de map te klikken, te kiezen voor <b>Nieuw</b> en daarna voor <b>Tekstdocument</b>. Daarna verander je de naam van dat nieuwe bestand in <b>index.html</b>.
            </p>
        </x-text>
        <x-text>
            <p>
                De naam <b>index</b> wordt vaak gebruikt voor de beginpagina van een website.
                Het stuk <b>.html</b> laat zien dat dit een HTML-bestand is.
            </p>
        </x-text>

        <x-image
            alt="Windows Verkenner met een bestand index.html in een map"
            src="{{ public_path('img/websites/index-html.jpg') }}"
            caption="Je eerste HTML-bestand"
        />
    </x-step>

    <x-step number="3">
        <x-text>
            <p>
                Open <b>index.html</b> in Visual Studio Code. Je kan dit doen door met de rechtermuisknop op het bestand te klikken en te kiezen voor <b>Openen met Code</b>.
            </p>
        </x-text>
    </x-step>
</x-page>


<x-page :number="4">
    <x-title>Je eerste zichtbare HTML</x-title>

    <x-step number="1">
        <x-text>
            <p>
                HTML werkt met <b>tags</b>. Een tag vertelt aan de browser wat iets is.
                Sommige tags maken een grote titel, andere tags maken gewone tekst.
            </p>
        </x-text>
    </x-step>

    <x-step number="2">
        <x-text>
            <p>
                Typ eerst alleen deze twee regels in <b>index.html</b>:
            </p>
        </x-text>

        <x-code language="html" label="HTML">
<h1>Mijn eerste website</h1>
<p>Hallo! Dit is mijn eerste website.</p>
        </x-code>
    </x-step>

    <x-step number="3">
        <x-text>
            <p>
                De eerste regel gebruikt de tag <b>&lt;h1&gt;</b>. Dat is een grote titel.
                De tweede regel gebruikt <b>&lt;p&gt;</b>. Dat is een paragraaf met gewone tekst.
            </p>
        </x-text>
    </x-step>

    <x-step number="4">
        <x-text>
            <p>
                Sla het bestand op en open <b>index.html</b> in je browser (bijvoorbeeld Chrome, Firefox of Edge).
                Als het goed is zie je nu een grote titel en daaronder tekst.
            </p>
        </x-text>

        <x-result :image="public_path('img/websites/first-html.png')" :height="300"/>
    </x-step>
</x-page>

<x-page :number="5">
    <x-step number="5">
        <x-text>
            <p>
                Verander nu de tekst zodat die over jezelf gaat.
                Bijvoorbeeld je naam, je leeftijd of iets wat je leuk vindt.
            </p>
        </x-text>

        <x-callout>
            Sla op met <b>CTRL + S</b> en ververs daarna je browser. Zo zie je meteen het resultaat van je aanpassingen.
        </x-callout>
    </x-step>

    <x-title>De body van je pagina</x-title>

    <x-step number="1">
        <x-text>
            <p>
                Wat je net hebt gemaakt werkt al. Maar een echte HTML-pagina heeft ook onzichtbare structuur. Deze structuur helpt de browser om te begrijpen wat er op de pagina staat en hoe het allemaal in elkaar zit. De belangrijkste laag in die structuur is de <b>body</b>.
            </p>
        </x-text>
        <x-text>
            <p>
                Het deel dat zichtbaar is op de pagina staat in de <b>body</b>.
                Je kunt de body zien als het zichtbare gedeelte van de website.
            </p>
        </x-text>
    </x-step>

    <x-step number="2">
        <x-text>
            <p>
                Zet je titel en tekst nu tussen <b>&lt;body&gt;</b> en <b>&lt;/body&gt;</b>.
            </p>
        </x-text>

        <x-code language="html" label="HTML">
<body>
    <h1>Mijn eerste website</h1>
    <p>Hallo! Dit is mijn eerste website.</p>
</body>
        </x-code>
    </x-step>

    <x-step number="3">
        <x-text>
            <p>
                Alles wat tussen deze tags staat, kan zichtbaar worden in de browser.
                Daarom horen je titel, tekst, lijstjes en afbeeldingen later allemaal in de body.
            </p>
        </x-text>
        <x-callout>
            Gebruik de <b>Tab</b> toets op je toetsenbord om je code netjes in te springen. Dat maakt het makkelijker leesbaar.
        </x-callout>
    </x-step>
</x-page>

<x-page :number="6">
    <x-title>De buitenkant van je document</x-title>

    <x-step number="1">
        <x-text>
            <p>
                Nu voegen we nog een laag toe om de hele pagina heen:
                het <b>html</b>-element.
            </p>
            <p>
                Dat element vertelt waar het hele HTML-document begint en eindigt.
            </p>
        </x-text>
    </x-step>

    <x-step number="2">
        <x-code language="html" label="HTML">
<html>
<body>
    <h1>Mijn eerste website</h1>
    <p>Hallo! Dit is mijn eerste website.</p>
</body>
</html>
        </x-code>
    </x-step>

    <x-step number="3">
        <x-text>
            <p>
                Je hebt nu dus:
            </p>
            <ul>
                <li>een buitenkant: <b>&lt;html&gt;</b></li>
                <li>een zichtbaar deel: <b>&lt;body&gt;</b></li>
                <li>inhoud in de body: titel en tekst</li>
            </ul>
        </x-text>
    </x-step>

    <x-title>De head en de title</x-title>

    <x-step number="1">
        <x-text>
            <p>
                Een webpagina heeft niet alleen een zichtbaar deel. Er is ook een deel
                met informatie voor de browser. Dat deel heet de <b>head</b>.
            </p>
            <p>
                De inhoud van de head zie je meestal niet midden op de pagina, maar die is wel belangrijk.
            </p>
        </x-text>
    </x-step>
</x-page>

<x-page :number="7">

    <x-step number="2">
        <x-text>
            <p>
                Een van de dingen die je in de head kunt zetten is de <b>title</b>.
                Dat is de titel die je bovenin het browser-tabblad ziet.
            </p>
        </x-text>

        <x-code language="html" label="HTML">
<head>
    <title>Mijn eerste website</title>
</head>
        </x-code>
    </x-step>

    <x-step number="3">
        <x-text>
            <p>
                Zet de head nu boven de body in je document.
            </p>
        </x-text>

        <x-code language="html" label="HTML">
<html>
<head>
    <title>Mijn eerste website</title>
</head>
<body>
    <h1>Mijn eerste website</h1>
    <p>Hallo! Dit is mijn eerste website.</p>
</body>
</html>
        </x-code>
    </x-step>

    <x-step number="4">
        <x-text>
            <p>
                Je pagina ziet er nu bijna hetzelfde uit als eerst, maar de browser heeft
                nu extra informatie gekregen.
            </p>
        </x-text>

        <x-result :image="public_path('img/websites/first-html.png')" :height="180" :titles="['Mijn eerste website']"/>
    </x-step>
</x-page>

<x-page :number="8">
    <x-title>Meer tekst en opmaak in HTML</x-title>

    <x-step number="1">
        <x-text>
            <p>
                Nu je basispagina staat, kun je de inhoud uitbreiden.
                Maak van je website een klein profiel over jezelf.
            </p>
        </x-text>
    </x-step>

    <x-step number="2">
        <x-text>
            <p>
                Voeg meer paragrafen toe. Je kunt bijvoorbeeld schrijven over:
            </p>
            <ul>
                <li>je naam</li>
                <li>je hobby</li>
                <li>je favoriete eten</li>
                <li>iets dat je heel leuk vindt</li>
            </ul>
        </x-text>
    </x-step>

    <x-step number="3">
        <x-text>
            <p>
                Je kunt belangrijke woorden extra nadruk geven met andere tags.
            </p>
        </x-text>

        <x-code language="html" label="HTML">
<p>Ik hou van <strong>games</strong>.</p>
<p>Mijn hobby is <i>tekenen</i>.</p>
        </x-code>
    </x-step>

    <x-step number="4">
        <x-text>
            <p>
                <b>&lt;strong&gt;</b> maakt tekst belangrijker en meestal dikgedrukt.
                <b>&lt;i&gt;</b> maakt tekst schuin.
            </p>
        </x-text>
        <x-result :image="public_path('img/websites/more-text-and-markup.png')" :height="300" :titles="['Mijn eerste website']"/>
    </x-step>
</x-page>

<x-page :number="9">
    <x-title>Lijstjes maken</x-title>

    <x-step number="1">
        <x-text>
            <p>
                Als je meerdere dingen netjes onder elkaar wilt zetten, gebruik je een lijst.
            </p>
        </x-text>
    </x-step>

    <x-step number="2">
        <x-text>
            <p>
                Voor een gewone lijst zonder nummers gebruik je <b>&lt;ul&gt;</b>.
                Voor elk item in die lijst gebruik je <b>&lt;li&gt;</b>.
            </p>
        </x-text>

        <x-code language="html" label="HTML">
<ul>
    <li>Pizza</li>
    <li>Minecraft</li>
    <li>Honden</li>
</ul>
        </x-code>
    </x-step>

    <x-step number="3">
        <x-text>
            <p>
                Maak nu een lijst met jouw favoriete dingen.
                Bijvoorbeeld je favoriete eten of je favoriete games.
            </p>
        </x-text>
    </x-step>

    <x-step number="4">
        <x-result  :image="public_path('img/websites/list.png')" :height="300" :titles="['Mijn eerste website']"/>
    </x-step>
</x-page>

<x-page :number="10">
    <x-title>Afbeeldingen toevoegen</x-title>

    <x-step number="1">
        <x-text>
            <p>
                Je kunt ook afbeeldingen op je website zetten.
                Daarvoor heb je een afbeeldingsbestand nodig in dezelfde map.
            </p>
        </x-text>

        <x-image
            alt="Windows Verkenner met index.html en een afbeelding zoals kat.jpg in dezelfde map"
                src="{{ public_path('img/websites/image-in-explorer.jpg') }}"
            caption="Je HTML-bestand en je afbeelding staan in dezelfde map"
        />
    </x-step>

    <x-step number="2">
        <x-text>
            <p>
                Je kunt op internet zoeken naar afbeeldingen die je leuk vindt. Als je er een hebt gevonden, sla die dan op in dezelfde map als je <b>index.html</b>. Dit kan je doen door met de rechtermuisknop op de afbeelding te klikken en te kiezen voor <b>Afbeelding opslaan als...</b>.
            </p>
        </x-text>
        <x-callout>
            Let op dat je de afbeelding een korte naam geeft zonder spaties, bijvoorbeeld <b>kat.jpg</b>.
        </x-callout>
    </x-step>
</x-page>

<x-page :number="11">

    <x-step number="3">
        <x-text>
            <p>
                Voor een afbeelding gebruik je de tag <b>&lt;img&gt;</b>.
                Die tag gebruikt attributen om extra informatie te geven.
                <b>src</b> vertelt welk bestand geladen moet worden.
                <b>alt</b> beschrijft wat er op de afbeelding staat.
                De bestandsnaam in <b>src</b> moet precies kloppen.
            </p>
        </x-text>

        <x-code language="html" label="HTML">
<img src="kat.jpg" alt="Een kat">
        </x-code>
    </x-step>

    <x-step number="4">
        <x-result :image="public_path('img/websites/image.png')" :titles="['Mijn eerste website']"/>
    </x-step>

    <x-step number="5">
        <x-text>
            <p>
                Als je afbeelding te groot of te klein is, kun je dat oplossen met de attributen <b>width</b> en <b>height</b>.
                Je kunt daar een getal in pixels invullen, bijvoorbeeld <b>width="200"</b> of <b>height="150"</b>.
            </p>
        </x-text>

        <x-code language="html" label="HTML">
<img src="kat.jpg" alt="Een kat" width="200">
        </x-code>
    </x-step>
</x-page>

<x-page :number="12">
    <x-title>Links en meerdere pagina's</x-title>

    <x-step number="1">
        <x-text>
            <p>
                Een website heeft vaak meerdere pagina's. Je kunt bijvoorbeeld naast
                <b>index.html</b> ook <b>games.html</b> maken.
            </p>
        </x-text>

        <x-image
            alt="Windows Verkenner met index.html en games.html in dezelfde map"
            src="{{ public_path('img/websites/other-page.jpg') }}"
            caption="Een website kan uit meerdere HTML-bestanden bestaan"
        />
    </x-step>

    <x-step number="2">
        <x-text>
            <p>
                Om van de ene pagina naar de andere te gaan, gebruik je een link.
                Daarvoor gebruik je de tag <b>&lt;a&gt;</b>.
            </p>
        </x-text>

        <x-code language="html" label="HTML">
<a href="games.html">Mijn games</a>
        </x-code>
    </x-step>

</x-page>

<x-page :number="13">

    <x-step number="3">
        <x-text>
            <p>
                Deze tag werkt zo:
            </p>
            <ul>
                <li><b>&lt;a&gt;</b> maakt een link</li>
                <li><b>href="games.html"</b> zegt waar je heen gaat</li>
                <li><b>Mijn games</b> is de klikbare tekst</li>
            </ul>
        </x-text>
    </x-step>

    <x-step number="4">
        <x-text>
            <p>
                Maak nu een tweede pagina met de naam <b>games.html</b>.
                Zet daar ook een titel en een stukje tekst in.
            </p>
        </x-text>
    </x-step>

    <x-step number="5">
        <x-text>
            <p>
                Zet op je homepagina een link naar <b>games.html</b> en op <b>games.html</b>
                weer een link terug naar <b>index.html</b>.
            </p>
        </x-text>

        <x-code language="html" label="HTML">
<a href="index.html">Terug naar home</a>
        </x-code>
    </x-step>

    <x-step number="6">
        <x-result  :image="public_path('img/websites/link.png')" :titles="['Mijn eerste website']"/>
    </x-step>
</x-page>

<x-page :number="14">
    <x-step number="7">
        <x-text>
            <p>
                Je code is nu al best uitgebreid. Het is belangrijk dat je die netjes houdt.
            </p>
        </x-text>

        <x-code language="html" label="HTML">
            <html>
    <head>
        <title>Mijn eerste website</title>
    </head>
    <body>
        <h1>Mijn eerste website</h1>
        <p>Hallo! Dit is mijn eerste website.</p>
        <a href="games.html">Mijn games</a>
        <p>Ik hou van <strong>games</strong>.</p>
        <p>Mijn hobby is <i>tekenen</i>.</p>
        <ul>
            <li>Pizza</li>
            <li>Minecraft</li>
            <li>Honden</li>
        </ul>
        <img src="kat.jpg" alt="Een kat">
    </body>
</html>
        </x-code>
    </x-step>
    <x-step number="8">
        <x-text>
            <p>
                je <b>games.html</b> kan er bijvoorbeeld zo uitzien:
            </p>
        </x-text>
        <x-result :image="public_path('img/websites/games-page.png')" :height="210" :titles="['Mijn games']" :url="'games.html'"/>
    </x-step>
</x-page>

<x-page :number="15">
    <x-title>Style.css maken</x-title>

    <x-step number="1">
        <x-text>
            <p>
                Tot nu toe heb je vooral inhoud gemaakt. Nu gaan we de website mooier maken.
                Daarvoor gebruiken we CSS in een apart bestand.
            </p>
        </x-text>
    </x-step>

    <x-step number="2">
        <x-text>
            <p>
                Maak in dezelfde map als <b>index.html</b> een nieuw bestand met de naam <b>style.css</b>.
            </p>
        </x-text>

        <x-image
            alt="Windows Verkenner met index.html, games.html en style.css in dezelfde map"
            src="{{ public_path('img/websites/style-file.jpg') }}"
            caption="Je CSS-bestand staat in dezelfde map als je HTML-bestanden"
        />
    </x-step>

    <x-step number="3">
        <x-text>
            <p>
                In de <b>head</b> van je HTML-bestand moet je nu nog een regel toevoegen om dat CSS-bestand te gebruiken.
            </p>
        </x-text>

        <x-code language="html" label="HTML">
<link rel="stylesheet" href="style.css">
        </x-code>
    </x-step>
</x-page>

<x-page :number="16">
    <x-step number="4">
        <x-text>
            <p>
                Deze regel betekent:
            </p>
            <ul>
                <li><b>link</b> maakt een koppeling naar een ander bestand</li>
                <li><b>rel="stylesheet"</b> zegt dat dat bestand opmaak bevat</li>
                <li><b>href="style.css"</b> zegt welk bestand gebruikt moet worden</li>
            </ul>
        </x-text>
    </x-step>

    <x-step number="5">
        <x-text>
            <p>
                Zet die regel in de head van je HTML-bestand.
            </p>
        </x-text>

        <x-callout>
            Zorg dat de bestandnaam in <b>href</b> precies klopt, inclusief hoofdletters en kleine letters.
        </x-callout>

        <x-code language="html" label="HTML">
<head>
    <title>Mijn eerste website</title>
    <link rel="stylesheet" href="style.css">
</head>
        </x-code>
    </x-step>

    <x-step number="6">
        <x-text>
            <p>
                Typ nu je eerste CSS in <b>style.css</b>:
            </p>
        </x-text>

        <x-code language="css" label="CSS">
body {
    background-color: lightblue;
}
        </x-code>
    </x-step>

</x-page>

<x-page :number="17">
    <x-step number="7">
        <x-text>
            <p>
                Sla beide bestanden op en ververs de browser.
                Als het goed is, krijgt je pagina nu een lichtblauwe achtergrond.
            </p>
        </x-text>

        <x-result :image="public_path('img/websites/background-color.png')" :titles="['Mijn eerste website']"/>
    </x-step>

    <x-title>Meer styling met CSS</x-title>

    <x-step number="1">
        <x-text>
            <p>
                CSS werkt met regels. Zo'n regel kiest eerst een onderdeel van de pagina
                en geeft daarna aan welke stijl dat onderdeel krijgt. In dit voorbeeld is <b>h1</b> de selector.
                Dat betekent: pas deze stijl toe op alle grote titels.
            </p>
        </x-text>

        <x-code language="css" label="CSS">
h1 {
    color: darkblue;
}
        </x-code>
    </x-step>

</x-page>

<x-page :number="18">

    <x-step number="2">
        <x-text>
            <p>
                Geef je website nu een netter lettertype en een rustige achtergrond.
            </p>
        </x-text>

        <x-code language="css" label="CSS">
body {
    background-color: #f4f8ff;
    font-family: Arial, sans-serif;
}
        </x-code>
    </x-step>

    <x-step number="3">
        <x-text>
            <p>
                Geef je titel een opvallende kleur en zet hem in het midden.
            </p>
        </x-text>

        <x-code language="css" label="CSS">
h1 {
    color: #691ec4;
    text-align: center;
}
        </x-code>
    </x-step>

    <x-step number="4">
        <x-text>
            <p>
                Maak de gewone tekst ook iets mooier leesbaar.
            </p>
        </x-text>

        <x-code language="css" label="CSS">
p {
    color: #333333;
    font-size: 18px;
}
        </x-code>

        <x-callout>
            <b>px</b> staat voor pixels. Dat is een eenheid die de grootte van tekst en andere dingen op het scherm bepaalt.
        </x-callout>
    </x-step>
</x-page>

<x-page :number="19">

    <x-step number="5">
        <x-result :image="public_path('img/websites/styled-page.png')" :titles="['Mijn eerste website']"/>
    </x-step>

    <x-title>Ruimte en randen</x-title>

    <x-step number="1">
        <x-text>
            <p>
                Mooie websites gebruiken niet alleen kleuren. Ook ruimte is belangrijk.
                Als alles te dicht op elkaar staat, wordt het druk en lastig te lezen.
            </p>
        </x-text>
    </x-step>

    <x-step number="2">
        <x-text>
            <p>
                Met <b>margin</b> maak je ruimte buiten een element.
                Met <b>padding</b> maak je ruimte binnen een element.
            </p>
        </x-text>
    </x-step>

</x-page>

<x-page :number="20">

    <x-step number="3">
        <x-code language="css" label="CSS">
body {
    background-color: #f4f8ff;
    font-family: Arial, sans-serif;
    margin: 40px;
}
        </x-code>
    </x-step>

    <x-step number="4">
        <x-text>
            <p>
                Geef nu je titel een achtergrondkleur, wat ruimte en ronde hoeken. Je kunt ook je paragrafen in een soort blok zetten.
            </p>
        </x-text>

        <x-code language="css" label="CSS">
h1 {
    color: #691ec4;
    text-align: center;
    background-color: #ffd84d;
    padding: 16px;
    border-radius: 12px;
}
        </x-code>

        <x-code language="css" label="CSS">
p {
    color: #333333;
    font-size: 18px;
    background-color: white;
    padding: 12px;
    border: 2px solid #691ec4;
    border-radius: 8px;
}
        </x-code>
    </x-step>

</x-page>

<x-page :number="21">

    <x-step number="5">
        <x-text>
            <p>
                Gefeliciteerd! Je hebt nu een mooie pagina gemaakt met HTML en CSS. Er zijn nog veel meer dingen die je kunt doen, maar dit is een goede basis om mee te beginnen.
            </p>
        </x-text>

        <x-result :image="public_path('img/websites/final.png')" :titles="['Mijn eerste website']"/>
    </x-step>

</x-page>

<x-page :number="22">
    <x-title>Maak je eigen website</x-title>

    <x-step number="1">
        <x-text>
            <p>
                Nu ga je zelf iets bouwen. Je weet nu hoe HTML en CSS werken,
                hoe je een afbeelding toevoegt en hoe je pagina’s aan elkaar koppelt.
            </p>
            <p>
                Gebruik alles wat je hebt geleerd om je eigen website te maken.
            </p>
        </x-text>
    </x-step>

    <x-step number="2">
        <x-text>
            <p>
                Kies eerst een onderwerp voor jouw website. Bijvoorbeeld:
            </p>
            <ul>
                <li>mijn favoriete game</li>
                <li>mijn hobby’s</li>
                <li>mijn dieren</li>
                <li>mijn familie</li>
                <li>mijn droomvakantie</li>
                <li>mijn favoriete eten</li>
            </ul>
        </x-text>
    </x-step>

    <x-step number="3">
        <x-text>
            <p>
                Denk daarna na over welke pagina’s je wilt maken.
                Je kunt bijvoorbeeld beginnen met:
            </p>
            <ul>
                <li><b>index.html</b> als homepagina</li>
                <li>een tweede pagina over jouw onderwerp</li>
                <li>een derde pagina met nog iets extra’s</li>
            </ul>
        </x-text>
    </x-step>

    <x-step number="4">
        <x-text>
            <p>
                Zorg dat jouw website in ieder geval deze dingen heeft:
            </p>
            <ul>
                <li>minstens 2 HTML-pagina’s</li>
                <li>een gekoppeld <b>style.css</b> bestand</li>
                <li>minstens 1 afbeelding</li>
                <li>minstens 1 link naar een andere pagina</li>
                <li>kopjes, tekst en een lijstje</li>
            </ul>
        </x-text>
    </x-step>

    <x-step number="5">
        <x-text>
            <p>
                Controleer tijdens het bouwen steeds of alles werkt:
            </p>
            <ul>
                <li>kloppen je bestandsnamen?</li>
                <li>werkt je link?</li>
                <li>staat <b>style.css</b> goed gekoppeld in de head?</li>
                <li>zie je je afbeelding?</li>
                <li>ziet je website eruit zoals jij wilt?</li>
            </ul>
        </x-text>
    </x-step>

    <x-step number="6">
        <x-callout>
            Je hoeft niet alles in één keer perfect te doen. Bouw rustig stap voor stap en test vaak in de browser.
        </x-callout>
    </x-step>
</x-page>

<x-footer />
</body>
</html>
