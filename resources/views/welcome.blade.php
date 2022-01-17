@php
$config = [
    'appName' => config('app.name'),
    'locale' => $locale = app()->getLocale(),
    'locales' => config('app.locales'),
    'githubAuth' => config('services.github.client_id'),
];
@endphp
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.name') }}</title>

    <meta name="robots" content="noodp,noydir">
    <meta name="description" content="The best way to connect and manage your spreadsheets for free.">
    <meta name=”keywords” content="oceansheet, ocean, sheet, spreadsheet, connect, excel, google sheet, microsoft, update, sync" />

    <meta property="og:title" content="OceanSheet" />
    <meta property="og:description" content="The best way to connect and manage your spreadsheets for free." />
    <meta property="og:site_name" content="OceanSheet - The best way to connect and manage your spreadsheets for free" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://oceansheet.com/" />

    <link rel="stylesheet" href="{{ mix('dist/css/app.css') }}">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/ui@latest/dist/tailwind-ui.min.css"> --}}
</head>
<body>
    <div id="app"></div>

    {{-- Global configuration object --}}
    <script>
        window.config = @json($config);
    </script>

    {{-- Load the application scripts --}}
    <script src="{{ mix('dist/js/app.js') }}"></script>
</body>
</html>
