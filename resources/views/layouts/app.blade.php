<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')

    <!-- Include Alpine.js -->
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body
    style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,180,1) 32%, rgba(0,212,255,1) 100%);">
    <nav x-data="{ open: false }" class="text-black bg-[#020028] border-b-2 border-black">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ url('/images/wordle.png') }}" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Wordle Game</span>
            </a>
            <button @click="open = !open" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div :class="{ 'block': open, 'hidden': !open }" class="hidden w-full md:block md:w-auto"
                id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4  md:flex-row md:space-x-16 space-y-8 md:space-y-0 rtl:space-x-reverse md:mt-0 md:border-0 ">

                    <li>
                        <a href="{{ route('games.new') }}">
                            <p class="text-white border-b-4 border-yellow-600">New Games</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('games.hot') }}">
                            <p class="text-white border-b-4 border-red-600">Hot Games</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('games.favourite') }}">
                            <p class="text-white border-b-4 border-green-600">Favourite Games</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- <div class="flex flex-col md:flex-row items-start gap-5 flex-grow relative w-full">
        <div class="w-full md:w-3/4">
            <a href="{{ url('/') }}" class="absolute cursor-pointer top-2 left-2 text-white flex items-center text-lg gap-2">
                <svg fill="red" height="20" width="20" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z" />
                </svg>
                Close
            </a>
            <iframe class="rounded-lg border-2 w-full" style="height: 750px; background: #fff; overflow: auto;" id="iframehtml5" src="https://wordlewebsite.com/game/wordle.embed" frameborder="0" scrolling="yes" allowfullscreen="yes">
            </iframe>
            <div class="bg-slate-200 px-10 py-10 border rounded-lg mt-8">
                <p class="text-3xl text-start font-bold">Wordle</p>
                <p class="text-lg">Wordle Website - is a place to play the Wordle games that have consistently appeared on informal networks and sites. This is a fundamental game with many lines of letters like other word puzzles.</p>
            </div>
        </div>
    
        <div class="w-full md:w-1/4 min-h-screen px-5 py-5 border rounded-lg flex flex-grow">
            <p class="text-white">This section will be used for ads</p>
        </div>
    </div> --}}
    <div class="max-w-screen-xl min-h-screen flex  flex-col mb-10 items-center justify-between mx-auto p-4">
       
        @yield('content')
    </div>



    <footer class="shadow dark:bg-[#020028] ">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="flex flex-col items-center md:justify-between justify-center gap-6 md:flex-row">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ url('/images/wordle.png') }}" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Wordle
                        Game</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-white">
                    <li>
                        <a href="{{ route('about') }}" class="hover:underline me-4 md:me-6">About Us</a>
                    </li>
                    <li>
                        <a href="{{ route('copyright') }}" class="hover:underline me-4 md:me-6">Copyright</a>
                    </li>
                    <li>
                        <a href="{{ route('privacy-policy') }}" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="{{ route('contact-us') }}" class="hover:underline me-4 md:me-6">Contact Us</a>
                    </li>
                    <li>
                        <a href="{{ route('term-of-use') }}" class="hover:underline">Term Of Use</a>
                    </li>

                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="#"
                    class="hover:underline">Wordle™</a>. All Rights Reserved.</span>
        </div>
    </footer>



    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
