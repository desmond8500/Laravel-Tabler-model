<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title>Dash - Admin</title>
        <!-- CSS files -->
        <link href="{{ asset('src/template/tabler/dist/css/tabler.min.css') }}"             rel="stylesheet"/>
        <link href="{{ asset('src/template/tabler/dist/css/tabler-flags.min.css') }}"       rel="stylesheet"/>
        <link href="{{ asset('src/template/tabler/dist/css/tabler-payments.min.css') }}"    rel="stylesheet"/>
        <link href="{{ asset('src/template/tabler/dist/css/tabler-vendors.min.css') }}"     rel="stylesheet"/>
        <link href="{{ asset('src/template/tabler/dist/css/demo.min.css') }}"               rel="stylesheet"/>
        <link href="{{ asset('src/library/lightbox/css/lightbox.min.css') }}"               rel="stylesheet"/>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
        @livewireStyles
    </head>

    <body class="antialiased">
        <div class="page">
            @livewire('tabler.layout.sidebar')
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
