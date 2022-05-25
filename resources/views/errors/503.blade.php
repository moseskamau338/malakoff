<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Malakoff Analtics | Neo Banking for the SACCO movement in Africa</title>

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
        </style>
        @livewireStyles
    </head>
    <body class="antialiased" x-data="{showContactForm: false}">
        <section class="px-2 py-32 bg-gray-50 md:px-0">
          <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
              <div class="w-full md:w-1/2 md:px-3">
                <div class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
                  <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
                    <span class="block xl:inline">We're working</span>
                    <span class="block text-indigo-600 xl:inline"> on a few changes</span>
                  </h1>
                  <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">The site will be live soon. We
                      apologize for any inconveniences</p>
                </div>
              </div>
              <div class="w-full md:w-1/2">
                <div class="w-full h-auto overflow-hidden">
                    <img src="https://cdn.devdojo.com/images/november2020/hero-image.png">
                  </div>
              </div>
            </div>
          </div>
        </section>

    </body>
</html>
