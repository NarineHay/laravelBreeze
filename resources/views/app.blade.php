<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" data-mode="light" class="scroll-smooths group" data-theme-color="green">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

        <!-- App favicon -->
        {{-- <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" /> --}}


        {{-- <link rel="stylesheet" href="{{asset('assets/libs/choices.js/public/assets/styles/choices.min.css')}}"> --}}

         <!-- Swiper Css -->
        {{-- <link rel="stylesheet" href="{{asset('assets/libs/swiper/swiper-bundle.min.css')}}"> --}}

        {{-- <link rel="stylesheet" href="{{asset('assets/css/icons.css')}}" /> --}}
        {{-- <link rel="stylesheet" href="{{asset('assets/css/tailwind.css')}}" /> --}}
        <!-- Scripts -->

        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/User/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia

        
     <script src="{{asset('assets/user/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

     <script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
     {{-- <script src="assets/libs/@popperjs/core/umd/popper.min.js"></script>
     <script src="assets/libs/simplebar/simplebar.min.js"></script>


       <script src="{{asset('assets/js/pages/switcher.js')}}"></script>

        <script src="{{asset('assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <script src="{{asset('assets/js/pages/job-list.init.js')}}"></script>

        <script src="{{asset('assets/js/pages/dropdown&modal.init.js')}}"></script>

        <!-- Swiper Js -->
            <script src="{{asset('assets/libs/swiper/swiper-bundle.min.js')}}"></script>
            <script src="{{asset('assets/js/pages/swiper.init.js')}}"></script>

        <script src="{{asset('assets/js/pages/nav&tabs.js')}}"></script>

        <script src="{{asset('assets/js/app.js')}}"></script> --}}

    </body>
</html>
