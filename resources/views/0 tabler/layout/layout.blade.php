<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta
* @link https://tabler.io
* Copyright 2018-2021 The Tabler Authors
* Copyright 2018-2021 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE) -->
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Tabler</title>
    <!-- CSS files -->

    <link href="{{ asset('src/template/tabler/dist/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('src/template/tabler/dist/css/tabler-flags.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('src/template/tabler/dist/css/tabler-payments.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('src/template/tabler/dist/css/tabler-vendors.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('src/template/tabler/dist/css/demo.min.css') }}" rel="stylesheet"/>
    @livewireStyles
  </head>
  <body class="antialiased">
    <div class="page">
        @livewire('tabler.layout.header')
        <div class="content">
            <div class="container-xl">
                @yield('content')
            </div>
            @include('0 tabler.layout.footer')
        </div>
    </div>

    <script src="{{ asset('src/template/tabler/dist/js/tabler.min.js') }}"></script>
    @livewireScripts
  </body>
</html>
