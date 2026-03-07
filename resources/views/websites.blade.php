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
    <x-page>
        <x-title>
            Workshop Webdevelopment — Stap 1
        </x-title>
        <x-step number="1">
            <x-text>
                <p>
                    Lorem ipsum dolor sit amet, consectetur <b>adipiscing</b> elit.
                </p>
                <ul>
                    <li>Item 1</li>
                    <li>Item 2</li>
                    <li>Item 3</li>
                </ul>
            </x-text>
            <x-image src="{{ public_path('img/vscode.webp') }}" alt="Stap 1" caption="Visual Studio Code" />
        </x-step>

    </x-page>
    <x-page>
        <x-step number="2">
            <x-text>
                <p>
                    Sed do eiusmod tempor incididunt ut <b>HTML</b> labore et dolore magna aliqua.
                </p>
            </x-text>
            <x-code language="html" label="HTML">
                <!DOCTYPE html>
                <html lang="nl">
                <head>
                    <meta charset="UTF-8">
                    <title>Mijn eerste website</title>
                </head>
                <body>
                    <h1>Mijn eerste website</h1>
                    <p>Hallo! Dit is mijn eerste website.</p>
                </body>
                </html>
                            </x-code>
                            <x-code language="css" label="CSS">
                body {
                    background: lightblue;
                    font-family: Arial, sans-serif;
                }
            </x-code>
        </x-step>
    </x-page>
    <x-page>
        <x-step number="3">
            <x-text>
                <p>
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat.
                </p>
            </x-text>
            <x-code language="css" label="CSS">
                body {
                    background: lightblue;
                    font-family: Arial, sans-serif;
                }
            </x-code>
        </x-step>
    </x-page>
</body>
</html>
