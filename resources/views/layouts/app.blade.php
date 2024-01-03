<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div>
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

    
    <footer class="footer">
        <div class=" text-white">
            <div class="container py-2">
                <div class="row">
                    <div class="col">
                        <h5>TelU Finds</h5>
                        <ul class="list-unstyled">
                            <li><i>About TelU Fnds</i></li>
                            <li><i>Privacy Policy</i></li>
                            <li><i>Help Desk</i></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>Popular Category</h5>
                        <ul class="list-unstyled">
                            <li><i>Accessories</i></li>
                            <li><i>Furniture</i></li>
                            <li><i>Clothes</i></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>Sell With US</h5>
                        <ul class="list-unstyled">
                            <li><i>Seller Guideline</i> </li>
                            <li><i>Seller List</i></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>Follow Us</h5>
                        <div class="followus" style="display: flex;">
                            <a href="instagram.com">
                                <img src="{{ asset('build/assets/icon/instagram.png')}}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('build/assets/icon/facebook.png')}}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('build/assets/icon/whatsapp (1).png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copy text-center text-white py-3">
        &copy;2023 TelUFinds. All rights reserved.
    </div>
    <!-- end footer -->
    </body>
</html>
