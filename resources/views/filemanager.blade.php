<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>{{ config('app.name', 'TFE File Manager') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta NAME="robots" CONTENT="noindex,nofollow">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="referrer" content="no-referrer-when-downgrade">
    <meta name="author" content="The Fashion Enthusiast">
    <meta name="theme-color" content="#000" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="copyright" content="Copyright (c) Nine Day's Wonder Media Network 2022">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta property="og:locale" content="en_US">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ url('favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ url('favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ url('favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ url('favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ url('favicon/ms-icon-144x144.png') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
</head>

<body>
    <div class="container">
        <h2 class="mt-5">The Fashion Enthusiast Assets</h2>
        <div class="row">
            <div class="col-md-12" id="fm-main-block">
                <div id="fm" style="height: 100vh;"></div>
            </div>
        </div>
    </div>

    <!-- File manager -->
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('fm-main-block').setAttribute('style', 'height:' + window.innerHeight + 'px');

            fm.$store.commit('fm/setFileCallBack', function(fileUrl) {
                window.opener.fmSetLink(fileUrl);
                window.close();
            });
        });
    </script>
</body>

</html>
