<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') - Laravel Newspaper System</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="shortcut icon" href="{{URL::asset('assets/images/favicon.ico')}}" />


        <link rel="stylesheet" href="{{asset('assets/css/icons.css')}}" />
        <!-- Scripts -->
        @vite(['resources/css/app.css'])
    </head>
    <body data-mode="light" data-sidebar-size="sm">
        @include('admin.layouts.navbar')
        @include('admin.layouts.left_sidebar')

        <div class="main-content ">
            <div class="page-content dark:bg-zinc-700 min-h-screen">
                <div class="container-fluid px-[0.625rem]">
                    {{ $slot }}
                </div>
            </div>

            @include('admin.layouts.footer')
        </div>


        <script src="{{asset('assets/libs/%40popperjs/core/umd/popper.min.js')}}"></script>
        <script src="{{assert('assets/libs/feather-icons/feather.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenujs/metismenujs.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>


{{--        <script src="../../../code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>--}}
{{--        <!-- apexcharts -->--}}
{{--        <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>--}}
{{--        <!-- Plugins js-->--}}
{{--        <script src="{{asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>--}}
{{--        <script src="{{asset('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js')}}"></script>--}}
        <!-- dashboard init -->
{{--        <script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>--}}

{{--        <script src="{{asset('assets/js/pages/nav%26tabs.js')}}"></script>--}}

        <script src="{{asset('assets/js/app.js')}}"></script>
        @vite(['resources/js/app.js'])
</body>
</html>
