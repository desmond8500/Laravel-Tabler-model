<!doctype html>
<html lang="fr">
    @include('0 Webapp.src.head')
    @livewireStyles

    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

        <div id="overlayer"></div>
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
            </div>
        </div>


        <div class="site-wrap">

            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>

            @include('0 Webapp.src.header')

            @include('0 Webapp.section.home')
            {{-- @include('0 Webapp.section.features') --}}
            {{-- @include('0 Webapp.section.site') --}}
            {{-- @include('0 Webapp.section.testimonial') --}}
            @include('0 Webapp.section.pricing')
            {{-- @include('0 Webapp.section.blog') --}}
            @include('0 Webapp.section.contact')
            {{-- @include('0 Webapp.src.footer') --}}

        </div> <!-- .site-wrap -->

        @include('0 Webapp.src.scripts')

        @livewireScripts
    </body>
  </html>
