{{-- <!doctype html>

<html lang="fr">
    @include('0 tabler.layout.head')

    <body class="antialiased">
        <div class="page">
            @livewire('tabler.layout.navbar')
            <div class="content">
                <div class="container-xl">
                    @include('0 tabler.layout.breadcrumb')
                    @yield('content')
                </div>
                @include('0 tabler.layout.footer')
            </div>
        </div>
        @include('0 tabler.layout.script')
        @yield('script')
        @livewireScripts
    </body>
</html> --}}

<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta
* @link https://tabler.io
* Copyright 2018-2021 The Tabler Authors
* Copyright 2018-2021 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
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
  </head>
  <body class="antialiased">
    <div class="page">
      <header class="navbar navbar-expand-md navbar-light d-print-none">
        <div class="container-xl">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href=".">
              <img src="{{ asset('src/template/tabler/demo/static/logo.svg') }}" width="110" height="32" alt="Tabler" class="navbar-brand-image">
            </a>
          </h1>
          <div class="navbar-nav flex-row order-md-last">

            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm" style="background-image: url({{ asset('src/template/tabler/demo/static/avatars/000m.jpg') }})"></span>
                <div class="d-none d-xl-block ps-2">
                  <div>Paweł Kuna</div>
                  <div class="mt-1 small text-muted">{{ $user->profession ?? '' }}</div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="#" class="dropdown-item">Profile</a>
                <a href="#" class="dropdown-item">Admin</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">Paramètres</a>
                <a href="#" class="dropdown-item">Déconnexion</a>
              </div>
            </div>
          </div>
          <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
              <ul class="navbar-nav">

                <li class="nav-item active dropdown">
                  <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="4" width="6" height="5" rx="2" /><rect x="4" y="13" width="6" height="7" rx="2" /><rect x="14" y="4" width="6" height="7" rx="2" /><rect x="14" y="15" width="6" height="5" rx="2" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Layout
                    </span>
                  </a>
                  <div class="dropdown-menu">
                    <div class="dropdown-menu-columns">
                      <div class="dropdown-menu-column">
                        <a class="dropdown-item" href="./layout-horizontal.html" >
                          Horizontal
                        </a>
                        <a class="dropdown-item" href="./layout-vertical.html" >
                          Vertical
                        </a>
                        <a class="dropdown-item" href="./layout-vertical-transparent.html" >
                          Vertical transparent
                        </a>
                        <a class="dropdown-item" href="./layout-vertical-right.html" >
                          Right vertical
                        </a>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item  dropdown">
                  <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="4" width="6" height="5" rx="2" /><rect x="4" y="13" width="6" height="7" rx="2" /><rect x="14" y="4" width="6" height="7" rx="2" /><rect x="14" y="15" width="6" height="5" rx="2" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Layout
                    </span>
                  </a>
                  <div class="dropdown-menu">
                    <div class="dropdown-menu-columns">
                      <div class="dropdown-menu-column">
                        <a class="dropdown-item" href="./layout-horizontal.html" >
                          Horizontal
                        </a>
                        <a class="dropdown-item" href="./layout-vertical.html" >
                          Vertical
                        </a>
                        <a class="dropdown-item" href="./layout-vertical-transparent.html" >
                          Vertical transparent
                        </a>
                        <a class="dropdown-item" href="./layout-vertical-right.html" >
                          Right vertical
                        </a>
                      </div>
                    </div>
                  </div>
                </li>

              </ul>

            </div>
          </div>
        </div>
      </header>
        <div class="content">
            <div class="container-xl">
                <!-- Page title -->
                <div class="page-header d-print-none">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="page-title">
                            Empty page
                            </h2>
                        </div>
                    </div>
                </div>
                <!-- Content here -->
                @yield('content')
            </div>
            @include('0 tabler.layout.footer')
        </div>
    </div>

    <script src="{{ asset('src/template/tabler/dist/js/tabler.min.js') }}"></script>
  </body>
</html>
