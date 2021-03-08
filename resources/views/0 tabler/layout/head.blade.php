<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Dash</title>
    <!-- CSS files -->
    <link href="{{ asset('src/template/tabler/dist/css/tabler.min.css') }}"             rel="stylesheet"/>
    <link href="{{ asset('src/template/tabler/dist/css/tabler-flags.min.css') }}"       rel="stylesheet"/>
    <link href="{{ asset('src/template/tabler/dist/css/tabler-payments.min.css') }}"    rel="stylesheet"/>
    <link href="{{ asset('src/template/tabler/dist/css/tabler-vendors.min.css') }}"     rel="stylesheet"/>
    <link href="{{ asset('src/template/tabler/dist/css/demo.min.css') }}"               rel="stylesheet"/>
    <link href="{{ asset('src/library/lightbox/css/lightbox.min.css') }}"               rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
    @yield('link')
    <style>
        body { display: none; }
    </style>
    @livewireStyles

    {{-- Masonry --}}
    <style>
        .masonry-with-columns {
        columns: 6 200px;
        column-gap: 1rem;
        }
        .masonry-with-columns div {
            width: 150px;
            background: #ffffff;
            color: white;
            margin: 0 1rem 1rem 0;
            display: inline-block;
            width: 100%;
        }
    </style>
</head>
