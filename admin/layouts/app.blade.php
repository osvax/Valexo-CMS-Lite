<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- Base Meta Tags --}}
    <meta charset="utf-8" />
    {{-- Title --}}
    <title> @yield('title_prefix', config('valexo.title_prefix', '')) @yield('title', config('valexo.title', 'Valexo CMS Lite'))@yield('title_postfix', config('valexo.title_postfix', ''))</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <base href="http://valexocms.lite/">
    <meta name="description" content="" />
    <meta name="author" content="" />
    {{-- Favicon --}}
    @if(config('valexo.use_ico_only'))
        <link rel="shortcut icon" href="{{ asset('access/img/favicons/favicon.ico') }}" />
    @elseif(config('valexo.use_full_favicon'))
        <link rel="shortcut icon" href="{{ asset('access/img/favicons/favicon.ico') }}" />
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('access/img/favicons/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('access/img/favicons/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('access/img/favicons/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('access/img/favicons/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('access/img/favicons/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('access/img/favicons/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('access/img/favicons/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('access/img/favicons/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('access/img/favicons/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('access/img/favicons/favicon-16x16.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('access/img/favicons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('access/img/favicons/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('access/img/favicons/android-icon-192x192.png') }}">
        <link rel="manifest" href="{{ asset('access/img/favicons/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('access/img/favicon/ms-icon-144x144.png') }}">
    @endif

    {{-- Custom stylesheets (pre AdminLTE) --}}
    @stack('styles_before')
    <link rel="stylesheet" href="{{ asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert2/dist/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('vendor/toastr/toastr.min.css') }}">
    {{-- Livewire Styles --}}
    @if(config('valexo.livewire'))
        @if(app()->version() >= 7)
            @livewireStyles
        @else
            <livewire:styles />
        @endif
    @endif
    {{-- Base Stylesheets --}}
    @if(!config('valexo.enabled_laravel_mix'))
        {{-- Configured Stylesheets --}}
        @stack('styles')
        <link rel="stylesheet" href="{{ asset('access/css/app.css') }}">
        @stack('styles_after')
    @else
        {{-- Configured Stylesheets --}}
        @stack('styles')
        <link rel="stylesheet" href="{{ mix(config('valexo.laravel_mix_css_path', 'access/css/app.css')) }}">
        @stack('styles_after')
    @endif
</head>
<body @if(config('valexo.body_class')) class="{{ config('valexo.body_class') }}" @endif>

<div class="wrapper">
    @include('navigation')

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">

            @include('sidebar')
        </div>


        <div id="layoutSidenav_content">
            <main>

                @yield('content')

            </main>
            <footer class="footer mt-auto footer-light">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &#xA9; Your Website {{ date('Y') }}</div>
                        <div class="col-md-6 text-md-right small">
                            <a href="starter-default.html#!">Privacy Policy</a>
                            &#xB7;
                            <a href="starter-default.html#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--/div-->

    @stack('scripts_before')
<!-- версия для разработки, отображает полезные предупреждения в консоли -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('vendor/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('vendor/toastr/toastr.min.js') }}"></script>

    {{-- Livewire Script --}}
    @if(config('valexo.livewire'))
        @if(app()->version() >= 7)
            @livewireScripts
        @else
            <livewire:scripts />
        @endif
    @endif


    {{-- Base Scripts --}}
    @if(!config('valexo.enabled_laravel_mix'))
        {{-- Configured Scripts --}}
        @stack('scripts')
        <script src="{{ mix('access/js/app.js') }}"></script>
        @stack('scripts_after')
    @else
        {{-- Configured Scripts --}}
        @stack('scripts')
        <script src="{{ mix(config('valexo.laravel_mix_js_path', 'access/js/app.js')) }}"></script>
        @stack('scripts_after')
    @endif

    @if(config('valexo.cb_customizer'))
        <script src="{{ asset(access_path_js().'customizer/sb-customizer.js') }}"></script>
        <sb-customizer project="sb-admin-pro"></sb-customizer>
    @endif
</div>

</body>
</html>

