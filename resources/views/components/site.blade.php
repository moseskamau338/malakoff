<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'Malakoff Analtics' }} | Neo Banking for the SACCO movement in Africa</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
          <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
          />

        <style>
            html{
                scroll-behavior: smooth;
            }
            body {
                font-family: 'Nunito', sans-serif;
                height: 100vh;
            }
           .special_list li::marker{
                content:'✔'; color:midnightblue;font-size:25px;
            }
            [x-cloak] { display: none !important; }
        </style>
        @livewireStyles
    </head>
    <body class="antialiased" x-data="{showContactForm: false}">
        {{--navigation--}}
        <section class="relative bg-white w-full">
            <div class="flex items-center justify-between px-8 mx-auto max-w-7xl py-8"
                 style="z-index: 999">

                <a href="/" class="relative z-5 flex items-center w-auto">
                    <img src="{{asset('images/logo-color.svg')}}" style="width: 40%" alt="Malakoff Analytics">
                </a>

                <nav class="items-center justify-center hidden space-x-8 text-gray-200 md:flex z-100">
                    <a href="/" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative
                    inline-block text-base font-bold text-gray-700 uppercase transition duration-150 ease hover:text-gray-900">
                        <span class="block">Home</span>
                        <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                            <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-blue-600" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" style="display: none;"></span>
                        </span>
                    </a>
                    <a href="#features" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative
                    inline-block text-base font-bold text-gray-700 uppercase transition duration-150 ease hover:text-gray-900">
                        <span class="block">Features</span>
                        <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                            <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-blue-600" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" style="display: none;"></span>
                        </span>
                    </a>
                    <a href="#about" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative
                    inline-block text-base font-bold text-gray-700 uppercase transition duration-150 ease hover:text-gray-900">
                        <span class="block">About Us</span>
                        <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                            <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-blue-600" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" style="display: none;"></span>
                        </span>
                    </a>
                    <a @click="showContactForm = true" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false"
                       class="relative inline-block text-base font-bold text-gray-700 uppercase transition duration-150 ease
                       hover:text-gray-900
                    cursor-pointer">
                        <span class="block">Contact Us</span>
                        <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                            <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-blue-600" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" style="display: none;"></span>
                        </span>
                    </a>
                </nav>

                <!-- Mobile Button -->
               <div class="flex justify-center h-screen md:hidden absolute top-4 right-4">
                    <div x-data="{ dropdownOpen: false }" class="relative">
                        <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md bg-white p-2 focus:outline-none shadow-lg">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path>
                            </svg>
                        </button>

                        <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-50"></div>

                        <div x-show="dropdownOpen" class="absolute right-0 mt-2 bg-white rounded-md shadow-lg overflow-hidden z-50" style="width:20rem;">
                            <div class="py-2">
                                <a href="#home" @click="dropdownOpen = false" class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                                    <span class="font-bold text-blue-500">Home</span>
                                </a>
                                <a href="#features" @click="dropdownOpen = false" class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                                    <span class="font-bold text-blue-500">Features</span>
                                </a>
                                <a href="#about" @click="dropdownOpen = false" class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                                    <span class="font-bold text-blue-500">About Us</span>
                                </a>
                                <a @click="showContactForm = true; dropdownOpen = false" class="flex items-center px-4 py-3 hover:bg-gray-100 -mx-2">
                                    <span class="font-bold text-blue-500">Contact Us</span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        {{--hero section--}}

        {{ $slot }}

     {{--footer--}}
        <section class="bg-white bottom-0">
            <div class="px-8 py-12 mx-auto text-gray-600 bg-white xl:pb-24 max-w-7xl xl:px-12">
                <div class="mx-auto mb-12 lg:mb-16">
                    <div class="col-span-3">
                        <a href="#_" class="text-xl font-black leading-none text-gray-900 select-none logo">
                            <img src="{{asset('images/logo-color.svg')}}" class="h-20 -mb-10" alt="Malakoff Analytics"></a>

                    </div>
                </div>
                <div class="grid gap-6 mx-auto md:grid-cols-2 lg:grid-cols-4 lg:gap-x-8">
                    <div>
                        <h5 class="text-xl font-bold text-gray-700">Product</h5>
                        <nav class="mt-4">
                            <ul class="space-y-2">
                                <li>
                                    <a href="#" class="cursor-not-allowed opacity-50 text-base hover:text-gray-500">Features</a>
                                </li>
                                <li>
                                    <a href="#" class="cursor-not-allowed opacity-50 text-base hover:text-gray-500">Integrations</a>
                                </li>
                                <li>
                                    <a href="#" class="cursor-not-allowed opacity-50 text-base hover:text-gray-500">Documentation</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div>
                        <h5 class="text-xl font-bold text-gray-700">About</h5>
                        <nav class="mt-4">
                            <ul class="space-y-2">
                                <li>
                                    <a href="#" class="cursor-not-allowed opacity-50 text-base hover:text-gray-500">Our Story</a>
                                </li>
                                <li>
                                    <a href="#" class="cursor-not-allowed opacity-50 text-base hover:text-gray-500">Our Team</a>
                                </li>
                                <li>
                                    <a href="#" class="cursor-not-allowed opacity-50 text-base hover:text-gray-500">Work With Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div>
                        <h5 class="text-xl font-bold text-gray-700">Resources</h5>
                        <nav class="mt-4">
                            <ul class="space-y-2">
                                <li>
                                    <a href="#" class="cursor-not-allowed opacity-50 text-base hover:text-gray-500">Help Center</a>
                                </li>
                                <li>
                                    <a href="#" class="cursor-not-allowed opacity-50 text-base hover:text-gray-500">Our Blog</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div>
                        <h5 class="text-xl font-bold text-gray-700">Contact</h5>
                        <nav class="mt-4">
                            <ul class="space-y-2">
                                <li>
                                    <span class="text-base">
                                        <strong>Office: +254-789079688</strong>
                                    </span>
                                </li>
                                <li>
                                    <span class="text-base">
                                        <strong>Mobile: +254-738020516</strong>
                                    </span>
                                </li>
                                <li>
                                    <span class="text-base">
                                        <strong>Sales: +254-726512147</strong>
                                    </span>
                                </li>
                                <li>
                                    <span class="text-base hover:text-gray-500">
                                        Nairobi,
                                        Kenya
                                    </span>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-between mx-auto mt-16 space-y-4 md:space-y-0 md:flex-row lg:mt-20">
                    <div class="space-y-4 text-sm text-center md:space-y-0 md:text-left">
                        <p class="text-gray-500">© {{ date('Y') }} Malakoff. All rights reserved.</p>
                        <p class="my-4 text-xs leading-normal text-gray-500">
                            Been in operation since 2015. We pride in delivering informative analytics in simplicity.
                        </p>
                    </div>
                    <button x-on:click="showContactForm = true" class="px-4 py-3 text-sm font-bold
                    tracking-tight text-white transition duration-200 transform rounded-lg
                    shadow-2xl sm:px-6 bg-gradient-to-tr from-blue-500 to-blue-300 sm:text-lg hover:scale-105 flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 3h5m0 0v5m0-5l-6 6M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
                            </svg>
                        Talk to us
                    </button>
                </div>
                <div class="flex flex-col items-center justify-between mx-auto mt-8 space-y-4 md:space-y-0 md:flex-row lg:mt-16">
                    <nav class="flex flex-wrap justify-center space-x-6">
                        <a href="/privacy-policy" class="mb-2 text-sm hover:text-gray-700">Privacy Policy</a>
                        <a href="/account-settings" class="mb-2 text-sm hover:text-gray-700">My Account Settings</a>
                        <a href="#" class="cursor-not-allowed opacity-50 mb-2 text-sm hover:text-gray-700">Disclaimers</a>
                        <a href="#" class="cursor-not-allowed opacity-50 mb-2 text-sm hover:text-gray-700">Terms and Conditions</a>
                        <a href="#" class="cursor-not-allowed opacity-50 mb-2 text-sm hover:text-gray-700">Refund Policy</a>
                    </nav>
                    <nav class="flex items-center space-x-2">
                        <a href="#" class="text-gray-500 hover:text-gray-600">
                            <span class="sr-only">Facebook</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                            </svg>
                        </a>

                        <a href="mailto:info@malakoffanalytics.co.ke" class="text-gray-500 hover:text-gray-600">
                            <span class="sr-only">Email</span>
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        </a>

                        <a href="#" class="text-gray-500 hover:text-gray-600">
                            <span class="sr-only">Twitter</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                            </svg>
                        </a>
                    </nav>
                </div>
            </div>
            {{--back to top--}}
            <div x-data="{scrollBackTop: false}" x-cloak>
            <button
                x-show="scrollBackTop"
                x-on:scroll.window="scrollBackTop = (window.pageYOffset > window.outerHeight * 0.5) ? true : false"
                x-on:click="window.scroll({ top:0, left:0, behavior: 'smooth'})"
                aria-label="Back to top"
                class="fixed bottom-0 right-0 p-2 mx-10 my-10
                    font-bold tracking-tight text-white transition duration-200 transform rounded-full shadow-2xl
                     bg-gradient-to-tr from-blue-500 to-blue-300 sm:text-lg hover:scale-105
                focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 11l3-3m0 0l3 3m-3-3v8m0-13a9 9 0 110 18 9 9 0 010-18z" />
                    </svg>
            </button>
        </div>

        </section>

        {{--modals--}}
        @include('layouts.includes.modals')

     <script src="{{asset('js/app.js')}}" defer></script>
        @livewireScripts
    </body>
</html>