<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta6
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('vendor/tabler/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/tabler/css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/tabler/css/tabler-payments.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/tabler/css/tabler-vendors.min.css') }}" rel="stylesheet" />
    {{ $css ?? "" }}
</head>

<body>
    <div class="page">
        <aside class="navbar navbar-vertical navbar-expand-lg navbar-transparent">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="navbar-brand navbar-brand-autodark">
                    {{ $logo ?? "" }}
                </h1>
                <div class="navbar-nav flex-row d-lg-none">
                    {{ $mobileMenus ?? "" }}
                </div>
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="navbar-nav pt-lg-3">
                        {{ $menus ?? "" }}
                    </ul>
                </div>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="container-xl">
                {{ $title ?? "" }}
            </div>
            <div class="page-body">
                <div class="container-xl">
                    {{ $slot }}
                </div>
            </div>
            <footer class="footer footer-transparent d-print-none">
                {{ $footer ?? "" }}
            </footer>
        </div>
    </div>

    <script src="{{ asset('vendor/tabler/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('vendor/tabler/libs/jsvectormap/dist/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('vendor/tabler/libs/jsvectormap/dist/maps/world.js') }}"></script>
    <script src="{{ asset('vendor/tabler/js/tabler.min.js') }}"></script>
    {{ $scripts ?? "" }}
</body>

</html>
