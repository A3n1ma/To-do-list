<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Project</title>

        <meta name="robots" content="noindex, nofollow">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Icons -->
        <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">

        <!-- Fonts and Styles -->
        @yield('css_before')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="{{ mix('/css/oneui.css') }}">

        <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="{{ mix('/css/themes/amethyst.css') }}"> -->
        @yield('css_after')

        <!-- Scripts -->
        <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>
    </head>
    <body>
        <div id="page-container">
            <!-- Main Container -->
            <main id="main-container">
                @yield('content')
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- OneUI Core JS -->
        <script src="{{ mix('js/oneui.app.js') }}"></script>

        <!-- Laravel Scaffolding JS -->
        <script src="{{ mix('js/laravel.app.js') }}"></script>

        @yield('js_after')
    </body>
</html>
