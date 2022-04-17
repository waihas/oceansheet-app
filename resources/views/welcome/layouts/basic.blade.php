<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @hasSection('title')
        <title>@yield('title') | OceanSheet</title>
    @else
        <title>OceanSheet</title>
    @endif
    
    <meta name="robots" content="noodp,noydir">
    <meta name="description" content="The best way to Connect, Manage and Automate your spreadsheets easily and for free.">
    <meta name=”keywords” content="oceansheet, ocean, sheet, spreadsheet, connect, excel, google sheet, microsoft, update, sync" />

    <meta property="og:title" content="OceanSheet" />
    <meta property="og:description" content="The best way to Connect, Manage and Automate your spreadsheets easily and for free." />
    <meta property="og:site_name" content="OceanSheet - Connect, Manage and Automate your spreadsheets easily." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://oceansheet.com/" />

    {{-- <!-- CSRF Token --> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <!-- Favicon --> --}}
    <link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

    <link rel="stylesheet" href="{{ mix('dist/css/app.css') }}">

    @stack('stylesheets')
    @yield('stylesheets')

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/ui@latest/dist/tailwind-ui.min.css"> --}}
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YY9PMCP7RH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-YY9PMCP7RH');
    </script>
</head>
<body>

    {{-- @include('welcome.partials.navbar') --}}
    
    <div id="main">
        <welcome-navbar></welcome-navbar>
        {{-- <basic-navbar></basic-navbar> --}}
    
        @yield('content')
    
        @include('welcome.partials.footer')
    </div>
    

    
    {{-- if cookies is set or not
    @isset($slot)
        {{ $slot }}
    @endisset --}}

    

    @yield('scripts')
    @stack('scripts')

    <script src="{{ mix('dist/js/basic.js') }}"></script>
</body>
</html>
