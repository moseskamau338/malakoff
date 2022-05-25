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
            [x-cloak] { display: none !important; }
        </style>
        @livewireStyles
    </head>
    <body class="antialiased" x-data="{showContactForm: false}">
        {{--navigation--}}
        <section class="relative bg-white w-full">
            <div class="flex items-center justify-between h-24 px-8 mx-auto max-w-7xl"
                 style="z-index: 999">

                <a href="#_" class="relative z-5 flex items-center w-auto text-2xl font-extrabold leading-none text-black select-none">
                    <img src="{{asset('images/logo-color.svg')}}" class="w-[75%]" alt="Malakoff Analytics">
                </a>

                <nav class="items-center justify-center hidden space-x-8 text-gray-200 md:flex z-100">
                    <a href="#home" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative
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
        <section id="home" class="relative w-full h-auto py-8 overflow-hidden bg-white sm:py-12 md:py-20 lg:py-32">
            <img src="{{asset('images/bg-gradient.png')}}" class="absolute left-0 object-cover w-full h-full opacity-50 sm:opacity-100">
            <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-transparent to-white"></div>
            <div class="relative flex flex-col items-center justify-start h-full mx-auto px-14 max-w-7xl lg:flex-row">

                <div class="relative z-10 w-full h-full lg:w-1/2 xl:pr-12 2xl:pr-24">
                    <div class="flex flex-col items-start justify-center h-full pt-12 lg:pt-0">
                        <h1 class="max-w-lg mx-auto text-4xl font-bold tracking-tight text-center text-gray-700 lg:mx-0 sm:text-4xl
                        lg:text-5xl lg:text-left">
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 animate__animated
                            animate__slideInDown animate__delay-2s">Neo Banking</span>
                            for the sacco movement in <span class="relative text-5xl font-black text-transparent bg-center bg-cover
                            bg-gradient-to-br from-indigo-400 via-indigo-600 to-indigo-500 lg:text-6xl bg-clip-text"
                                                            style="background-image:url({{asset('/images/africa_bg.png')}})">Africa</span>
                        </h1>
                        <p class="max-w-md mx-auto mt-4 text-center text-gray-500 lg:mx-0 lg:text-left">Reach you customers with fast, secure
                            and reliable solutions.</p>
                        <p class="max-w-md mx-auto mt-4 text-center text-gray-500 lg:mx-0 lg:text-left">
                            No limits, highest customer satisfaction, spend less time in preliminaries, reduce fixed costs and much more!
                        </p>
                        <div class="max-w-lg mx-auto lg:mx-0">
                            <div class="flex items-center justify-center w-full my-6 space-x-2 lg:justify-start sm:space-x-6 lg:my-12">
                                <button id="requester" @click="showContactForm = true" class="px-4 py-3 text-sm font-bold tracking-tight
                                text-white
                                transition duration-200 transform rounded-lg shadow-2xl sm:px-6 bg-gradient-to-tr from-blue-500
                                to-blue-300 sm:text-lg hover:scale-105">Request Demo</button>
                                <a href="#_" class="flex items-center justify-start px-4 py-3 text-sm font-bold tracking-tight text-gray-500 transition duration-200 rounded-lg sm:px-6 sm:text-lg group hover:text-blue-500">
                                    <svg class="w-6 mr-2 text-gray-500 transition duration-200 fill-current group-hover:scale-125 group-hover:text-blue-500" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.26587 8.87988H2.26587V20.8799C2.26587 21.4103 2.47658 21.919 2.85166 22.2941C3.22673 22.6692 3.73544 22.8799 4.26587 22.8799H16.2659V20.8799H4.26587V8.87988Z"></path><path d="M20.2659 2.87988H8.26587C7.73544 2.87988 7.22673 3.0906 6.85166 3.46567C6.47658 3.84074 6.26587 4.34945 6.26587 4.87988V16.8799C6.26587 17.4103 6.47658 17.919 6.85166 18.2941C7.22673 18.6692 7.73544 18.8799 8.26587 18.8799H20.2659C20.7963 18.8799 21.305 18.6692 21.6801 18.2941C22.0552 17.919 22.2659 17.4103 22.2659 16.8799V4.87988C22.2659 4.34945 22.0552 3.84074 21.6801 3.46567C21.305 3.0906 20.7963 2.87988 20.2659 2.87988ZM11.2659 14.8799V6.87988L18.2659 10.8799L11.2659 14.8799Z"></path></svg>
                                    Watch Demo
                                </a>
                            </div>
                            <div class="hidden grid-cols-3 gap-8 sm:grid">
                                <div class="col-span-1 text-center lg:text-left">
                                    <h4 class="text-3xl font-bold tracking-tight text-transparent lg:text-4xl bg-clip-text bg-gradient-to-r
                                    from-blue-300 to-blue-500">50%</h4>
                                    <p class="text-sm font-semibold text-gray-400">Revenue Growth</p>
                                </div>
                                <div class="col-span-1 text-center lg:text-left">
                                    <h4 class="text-3xl font-bold tracking-tight text-transparent lg:text-4xl bg-clip-text
                                    bg-gradient-to-r from-blue-300 to-blue-500">30%</h4>
                                    <p class="text-sm font-semibold text-gray-400">Cost Reduction</p>
                                </div>
                                <div class="col-span-1 text-center lg:text-left">
                                    <h4 class="text-3xl font-bold tracking-tight text-transparent lg:text-4xl bg-clip-text
                                    bg-gradient-to-r from-blue-300 to-blue-500">75%</h4>
                                    <p class="text-sm font-semibold text-gray-400">Customer Engagement</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative z-10 w-full h-full px-10 pb-32 mt-16 lg:w-1/2 md:px-20 lg:px-5 xl:px-0 lg:pb-0 lg:mt-0 group">

                    <div class="relative flex items-center justify-center w-full h-full">
                        <div class="relative w-full h-auto md:h-full lg:h-auto">

                            <img data-aos="fade-left"
                                data-aos-offset="50"
                                data-aos-delay="110"
                                data-aos-duration="1000"
                                class="absolute bottom-0 left-0 z-10 object-cover object-center w-24 -mb-12 -ml-4 transition
                            duration-300 transform rounded-md shadow-2xl md:w-32 lg:w-32 xl:w-40 md:-ml-12 md:rounded-lg lg:rounded-xl
                            group-hover:scale-95" src="{{asset('images/features/hero_phone.png')}}" alt="image" />
                            <div class="relative w-full h-auto overflow-hidden transition duration-300 transform shadow-lg rounded-xl group-hover:scale-95">
                                <img data-aos="zoom-in"
                                data-aos-offset="50"
                                data-aos-delay="110"
                                data-aos-duration="1000" class="w-full" src="{{asset('images/features/hero_dashboard.png')}}" alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{--Explained features--}}
        <div id="features" class="relative bg-white pt-16 pb-32 overflow-hidden">
          <div class="mt-24">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
              <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
                <div>
                  <div data-aos="fade-up"
                        data-aos-offset="200"
                        data-aos-delay="70"
                        data-aos-duration="2000">
                    <h2 class="text-4xl font-extrabold tracking-tight text-transparent bg-clip-text bg-gradient-to-l
                    from-green-400 to-blue-500">
                      Digital Customer On-boarding
                    </h2>
                    <p class="mt-4 text-lg text-gray-500">
                     Your clients will enjoy our smooth paperless onboarding process via the mobile app. Not to mention, we keep security
                        and requirements at high standards.
                    </p>
                    <div class="mt-6">
                      <button @click="showContactForm = true" class="px-4 py-3 text-sm font-bold tracking-tight text-white transition
                      duration-200 transform rounded-lg shadow-2xl sm:px-6 bg-gradient-to-tr from-blue-500 to-blue-300 sm:text-lg
                      hover:scale-105 hover:cursor-pointer">
                        Request a demo
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
                <div class="pr-4 -ml-48 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                  <img data-aos="fade-up"
                        data-aos-offset="200"
                        data-aos-delay="70"
                        data-aos-duration="15000" class="hidden md:block sm:w-1/2 sm:m-auto rounded-xl lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none"
                       src="{{asset('images/features/products_onboard.svg')}}" alt="onboarding interface">

                    <img data-aos="fade-left"
                        data-aos-offset="200"
                        data-aos-delay="70"
                        data-aos-duration="3000" class="sm:left-[469px] lg:h-56 sm:h-72 absolute lg:bottom-[-57px] rounded-xl lg:absolute
                        lg:top-0 hidden md:block sm:top-[500px] lg:left-[369px] lg:w-auto lg:max-w-none" src="{{asset('images/features/onboarding.png')}}"
                         alt="guarantor
                        accepted">
                </div>
              </div>
            </div>
          </div>

          <div class="relative">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
              <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
                <div>
                  <div data-aos="fade-up"
                        data-aos-offset="200"
                        data-aos-delay="70"
                        data-aos-duration="1000">
                    <h2 class="text-4xl font-extrabold tracking-tight text-transparent bg-clip-text bg-gradient-to-l
                    from-green-400 to-blue-500">
                      Digital Lending
                    </h2>
                    <p class="mt-4 text-lg text-gray-500">
                      We have revolutionized <strong>Digital Lending</strong> in the market space! Everything is online, everything is
                        simple. <br />

                        <strong>Get this: </strong> Guarantorship request and approval is paperless and instant.
                        <p class="mt-4 text-lg text-gray-500">
                          <i class="font-bold">Unlock instant BOSA and FOSA
                            loans.</i>
                      </p>
                    </p>

                    <div class="mt-6">
                      <button @click="showContactForm = true" class="px-4 py-3 text-sm font-bold tracking-tight text-white transition duration-200 transform rounded-lg shadow-2xl sm:px-6 bg-gradient-to-tr from-blue-500 to-blue-300 sm:text-lg hover:scale-105">
                        Request a demo
                      </button>
                    </div>
                  </div>
                </div>

              </div>
              <div class="mt-12 sm:mt-16 lg:mt-0">
                <div class="pl-4 md:-mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                  <img data-aos="fade-up"
                        data-aos-offset="200"
                        data-aos-delay="70"
                        data-aos-duration="1500" class="hidden md:block sm:w-1/2 sm:m-auto rounded-xl lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
                       src="{{asset
                  ('images/features/products_lending.svg')}}" alt="Inbox user interface">
                    <img data-aos="fade-left"
                        data-aos-offset="200"
                        data-aos-delay="70"
                        data-aos-duration="2000" class="relative h-32 md:block sm:w-[25%] md:absolute lg:bottom-[-57px] rounded-xl lg:absolute lg:left-0
                        lg:h-1/2 lg:w-auto
                    lg:max-w-none"
                         src="{{asset
                    ('images/features/products_guarantor.svg')}}" alt="guarantor accepted">
                </div>
              </div>
            </div>
          </div>
            <div class="mt-24">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
              <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
                <div data-aos="fade-up"
                        data-aos-offset="200"
                        data-aos-delay="70"
                        data-aos-duration="1500">
                  <div class="mt-6">
                    <h2 class="text-4xl font-extrabold tracking-tight text-transparent bg-clip-text bg-gradient-to-l
                    from-green-400 to-blue-500">
                      Buy now, pay later
                    </h2>
                    <p class="mt-4 text-lg text-gray-500">
                        This product allows your <strong>SACCO members</strong> with insufficient funds in their <strong>FOSA
                            account</strong>, to make purchases and bill payments through a <strong>short-term financing
                            facility</strong> that is payable at a <strong>future date</strong>.
                    </p>
                    <div class="mt-6">
                      <button @click="showContactForm = true" class="px-4 py-3 text-sm font-bold tracking-tight text-white transition duration-200 transform rounded-lg shadow-2xl sm:px-6 bg-gradient-to-tr from-blue-500 to-blue-300 sm:text-lg hover:scale-105">
                        Request a demo
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
                <div class="pr-4 md:-ml-48 sm:pr-6 lg:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                  <img data-aos="fade-left"
                        data-aos-offset="200"
                        data-aos-delay="70"
                        data-aos-duration="2000" class="w-1/2 m-auto sm:w-1/2 sm:m-auto rounded-xl lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none" src="{{asset
                  ('images/features/buy_now.png')}}" alt="Customer profile user interface">
                </div>
              </div>
            </div>
          </div>
             <div class="relative">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
              <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
                <div data-aos="fade-up"
                        data-aos-offset="200"
                        data-aos-delay="70"
                        data-aos-duration="1000">
                  <div class="mt-6">
                    <h2 class="text-4xl font-extrabold tracking-tight text-transparent bg-clip-text bg-gradient-to-l
                    from-green-400 to-blue-500">
                     Dashboards with analytics and regulatory reporting
                    </h2>
                       <p class="mt-4 text-lg text-gray-500">
                        <strong>Robust, scalable and on-demand</strong> functionality to help you analyse your <strong>business
                               performance</strong> and <strong>comply</strong>
                             with <strong>regulatory reporting</strong> requirements.
                        <p class="text-lg text-gray-500">
                            We give you insights on <i class="font-bold">loans, customer acquisition, security</i> and much more.
                        </p>
                    </p>

                    <div class="mt-6">
                      <button @click="showContactForm = true" class="px-4 py-3 text-sm font-bold tracking-tight text-white transition duration-200 transform rounded-lg shadow-2xl sm:px-6 bg-gradient-to-tr from-blue-500 to-blue-300 sm:text-lg hover:scale-105">
                        Request a demo
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-12 sm:mt-16 lg:mt-0">
                <div class="pl-4 md:-mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                    <img data-aos="fade-left"
                         data-aos-offset="200"
                         data-aos-delay="70"
                         data-aos-duration="2000" class="w-1/2 m-auto sm:w-1/2 sm:m-auto rounded-xl lg:absolute lg:right-0 lg:h-full lg:w-auto
                         lg:max-w-none" src="{{asset
                  ('images/features/products_analytics.svg')}}" alt="Customer profile user interface">

                </div>
              </div>
            </div>
          </div>
          <div class="mt-8">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
              <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
                <div data-aos="fade-up"
                        data-aos-offset="200"
                        data-aos-delay="70"
                        data-aos-duration="1500">
                  <div class="mt-6">
                    <h2 class="text-4xl font-extrabold tracking-tight text-transparent bg-clip-text bg-gradient-to-l
                    from-green-400 to-blue-500">
                      Fraud detection through transaction monitoring
                    </h2>
                    <p class="mt-4 text-lg text-gray-500">
                      We keep an eye on all transaction flows through our AI driven mechanisms which enables our systems to detect any
                        fraudulent activity in realtime. Talk about saving lives!
                    </p>
                    <div class="mt-6">
                      <button @click="showContactForm = true" class="px-4 py-3 text-sm font-bold tracking-tight text-white transition duration-200 transform rounded-lg shadow-2xl sm:px-6 bg-gradient-to-tr from-blue-500 to-blue-300 sm:text-lg hover:scale-105">
                        Request a demo
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
                <div class="pr-4 md:-ml-48 sm:pr-6 lg:px-0 lg:m-0 lg:relative lg:h-full">
                    <img data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom"
                        data-aos-offset="200"
                        data-aos-delay="50"
                        data-aos-duration="2000" class="h-32 m-auto sm:max-w-xl sm:m-auto sm:relative rounded-xl lg:top-40 lg:absolute lg:left-0 xl:h-40 lg:w-auto lg:max-w-none" src="{{asset('images/features/products_fraud.png')}}" alt="fraud detection">

                </div>
              </div>
            </div>
          </div>

        </div>


        {{--More features--}}
        <section class="py-20 bg-gray-50">
          <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
            <div class="flex flex-wrap items-center -mx-3">
              <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                <div class="w-full lg:max-w-md">
                  <h2 class="mb-4 font-sans text-7xl font-bold leading-tight tracking-tight sm:text-4xl lg:text-6xl font-heading
                  text-transparent
                  bg-clip-text bg-gradient-to-l from-green-400 to-blue-500">Wait!
                      There's more....</h2>
                  <p class="mb-4 font-medium tracking-tight text-gray-700 xl:mb-6">At Malakoff Analytics, we take time to address all the
                      minor
                      details that make up the entire difference in customer experience...</p>
                  <ul>
                    <li class="flex items-center py-2 space-x-4 xl:py-3">
                      <svg class="w-8 h-8 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                      <span class="font-medium text-gray-700">Track loan status</span>
                    </li>
                    <li class="flex items-center py-2 space-x-4 xl:py-3">
                      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                         class="h-8 w-8"
                         x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1902_" d="m120.105 225h-24.807c-5.523 0-10-4.477-10-10v-132c0-5.523 4.477-10 10-10h24.807z" fill="#cdbfbb" data-original="#cdbfbb" class=""></path><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1197_" d="m98.298 73h21.807v152h-21.807z" fill="#009ca2" data-original="#9e9797" class=""></path><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1899_" d="m391.895 73h24.807c5.523 0 10 4.477 10 10v33c0 5.523-4.477 10-10 10h-24.807z" fill="#cdbfbb" data-original="#cdbfbb" class=""></path><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1898_" d="m391.895 73h21.807v53h-21.807z" fill="#009ca2" data-original="#9e9797" class=""></path><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1896_" d="m391.895 161.167h24.807c5.523 0 10 4.477 10 10v33c0 5.523-4.477 10-10 10h-24.807z" fill="#cdbfbb" data-original="#cdbfbb" class=""></path><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1895_" d="m391.895 161.167h21.807v53h-21.807z" fill="#009ca2" data-original="#9e9797" class=""></path><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1894_" d="m391.895 383.833h24.807c5.523 0 10 4.477 10 10v33c0 5.523-4.477 10-10 10h-24.807z" fill="#cdbfbb" data-original="#cdbfbb" class=""></path><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1893_" d="m391.895 383.833h21.807v53h-21.807z" fill="#009ca2" data-original="#9e9797" class=""></path><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1890_" d="m381.202 504.5h-250.404c-11.046 0-20-8.954-20-20v-457c0-11.046 8.954-20 20-20h250.404c11.046 0 20 8.954 20 20v457c0 11.046-8.954 20-20 20z" fill="#68b091" data-original="#b9acac" class=""></path><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1200_" d="m401.2 27.5v457c0 11.05-8.95 20-20 20h-28.66c11.04 0 20-8.95 20-20v-457c0-11.05-8.96-20-20-20h28.66c11.05 0 20 8.95 20 20z" fill="#009ca2" data-original="#9e9797" class=""></path><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1888_" d="m110.798 46.513h290.404v418.974h-290.404z" fill="#faf7f7" data-original="#faf7f7" class=""></path><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1201_" d="m372.54 46.51h28.66v418.98h-28.66z" fill="#efe2dd" data-original="#efe2dd" class=""></path><circle xmlns="http://www.w3.org/2000/svg" id="XMLID_1885_" cx="184" cy="154.529" fill="#68b091" r="21.441" data-original="#b9acac" class=""></circle><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1884_" d="m205.439 154.345c.103 11.837-9.413 21.52-21.25 21.623-1.992.017-3.922-.238-5.751-.733 9.034-2.588 15.605-10.945 15.52-20.79-.086-9.851-6.801-18.093-15.878-20.524 1.82-.527 3.745-.815 5.737-.833 11.836-.103 21.519 9.413 21.622 21.257z" fill="#009ca2" data-original="#9e9797" class=""></path><circle xmlns="http://www.w3.org/2000/svg" id="XMLID_1883_" cx="256" cy="154.529" fill="#68b091" r="21.441" data-original="#b9acac" class=""></circle><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1882_" d="m277.439 154.345c.103 11.837-9.413 21.52-21.25 21.623-1.992.017-3.922-.238-5.751-.733 9.034-2.588 15.605-10.945 15.52-20.79-.086-9.851-6.801-18.093-15.878-20.524 1.82-.527 3.745-.815 5.737-.833 11.836-.103 21.519 9.413 21.622 21.257z" fill="#009ca2" data-original="#9e9797" class=""></path><circle xmlns="http://www.w3.org/2000/svg" id="XMLID_1881_" cx="328" cy="154.529" fill="#68b091" r="21.441" data-original="#b9acac" class=""></circle><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1880_" d="m349.439 154.345c.103 11.837-9.413 21.52-21.25 21.623-1.992.017-3.922-.238-5.751-.733 9.034-2.588 15.605-10.945 15.52-20.79-.086-9.851-6.801-18.093-15.878-20.524 1.82-.527 3.745-.815 5.737-.833 11.836-.103 21.519 9.413 21.622 21.257z" fill="#009ca2" data-original="#9e9797" class=""></path><circle xmlns="http://www.w3.org/2000/svg" id="XMLID_1879_" cx="184" cy="222.177" fill="#68b091" r="21.441" data-original="#b9acac" class=""></circle><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1878_" d="m205.439 221.992c.103 11.837-9.413 21.52-21.25 21.623-1.992.017-3.922-.238-5.751-.733 9.034-2.588 15.605-10.945 15.52-20.79-.086-9.851-6.801-18.093-15.878-20.524 1.82-.527 3.745-.815 5.737-.833 11.836-.103 21.519 9.413 21.622 21.257z" fill="#009ca2" data-original="#9e9797" class=""></path><circle xmlns="http://www.w3.org/2000/svg" id="XMLID_1877_" cx="256" cy="222.177" fill="#68b091" r="21.441" data-original="#b9acac" class=""></circle><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1876_" d="m277.439 221.992c.103 11.837-9.413 21.52-21.25 21.623-1.992.017-3.922-.238-5.751-.733 9.034-2.588 15.605-10.945 15.52-20.79-.086-9.851-6.801-18.093-15.878-20.524 1.82-.527 3.745-.815 5.737-.833 11.836-.103 21.519 9.413 21.622 21.257z" fill="#009ca2" data-original="#9e9797" class=""></path><circle xmlns="http://www.w3.org/2000/svg" id="XMLID_1875_" cx="328" cy="222.177" fill="#68b091" r="21.441" data-original="#b9acac" class=""></circle><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1874_" d="m349.439 221.992c.103 11.837-9.413 21.52-21.25 21.623-1.992.017-3.922-.238-5.751-.733 9.034-2.588 15.605-10.945 15.52-20.79-.086-9.851-6.801-18.093-15.878-20.524 1.82-.527 3.745-.815 5.737-.833 11.836-.103 21.519 9.413 21.622 21.257z" fill="#009ca2" data-original="#9e9797" class=""></path><circle xmlns="http://www.w3.org/2000/svg" id="XMLID_1873_" cx="184" cy="289.824" fill="#68b091" r="21.441" data-original="#b9acac" class=""></circle><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1872_" d="m205.439 289.64c.103 11.837-9.413 21.52-21.25 21.623-1.992.017-3.922-.238-5.751-.733 9.034-2.588 15.605-10.945 15.52-20.79-.086-9.851-6.801-18.093-15.878-20.524 1.82-.527 3.745-.815 5.737-.833 11.836-.103 21.519 9.413 21.622 21.257z" fill="#009ca2" data-original="#9e9797" class=""></path><circle xmlns="http://www.w3.org/2000/svg" id="XMLID_1871_" cx="256" cy="289.824" fill="#68b091" r="21.441" data-original="#b9acac" class=""></circle><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1870_" d="m277.439 289.64c.103 11.837-9.413 21.52-21.25 21.623-1.992.017-3.922-.238-5.751-.733 9.034-2.588 15.605-10.945 15.52-20.79-.086-9.851-6.801-18.093-15.878-20.524 1.82-.527 3.745-.815 5.737-.833 11.836-.103 21.519 9.413 21.622 21.257z" fill="#009ca2" data-original="#9e9797" class=""></path><circle xmlns="http://www.w3.org/2000/svg" id="XMLID_1869_" cx="328" cy="289.824" fill="#68b091" r="21.441" data-original="#b9acac" class=""></circle><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1868_" d="m349.439 289.64c.103 11.837-9.413 21.52-21.25 21.623-1.992.017-3.922-.238-5.751-.733 9.034-2.588 15.605-10.945 15.52-20.79-.086-9.851-6.801-18.093-15.878-20.524 1.82-.527 3.745-.815 5.737-.833 11.836-.103 21.519 9.413 21.622 21.257z" fill="#009ca2" data-original="#9e9797" class=""></path><circle xmlns="http://www.w3.org/2000/svg" id="XMLID_1867_" cx="256" cy="357.472" fill="#64e0c4" r="21.441" data-original="#64e0c4" class=""></circle><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1866_" d="m277.439 357.287c.103 11.837-9.413 21.52-21.25 21.623-1.992.017-3.922-.238-5.751-.733 9.034-2.588 15.605-10.945 15.52-20.79-.086-9.851-6.801-18.093-15.878-20.524 1.82-.527 3.745-.815 5.737-.833 11.836-.103 21.519 9.413 21.622 21.257z" fill="#27d1b3" data-original="#27d1b3"></path><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1204_" d="m310.821 421.5h-109.642c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h109.643c4.142 0 7.5-3.358 7.5-7.5s-3.359-7.5-7.501-7.5z" fill="#000000" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1205_" d="m416.702 133.5c9.649 0 17.5-7.851 17.5-17.5v-33c0-9.649-7.851-17.5-17.5-17.5h-8v-38c0-15.164-12.336-27.5-27.5-27.5h-250.404c-15.164 0-27.5 12.336-27.5 27.5v38h-8c-9.649 0-17.5 7.851-17.5 17.5v79.636c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-79.636c0-1.378 1.122-2.5 2.5-2.5h8v137h-8c-1.378 0-2.5-1.122-2.5-2.5v-16.969c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v16.969c0 9.649 7.851 17.5 17.5 17.5h8v252c0 15.164 12.336 27.5 27.5 27.5h175.171c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-175.171c-6.893 0-12.5-5.607-12.5-12.5v-11.513h275.404v11.513c0 6.893-5.607 12.5-12.5 12.5h-39.838c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h39.838c15.164 0 27.5-12.336 27.5-27.5v-40.167h8c9.649 0 17.5-7.851 17.5-17.5v-33c0-9.649-7.851-17.5-17.5-17.5h-8v-154.666h8c9.649 0 17.5-7.851 17.5-17.5v-33c0-9.649-7.851-17.5-17.5-17.5h-8v-20.167zm0-53c1.378 0 2.5 1.122 2.5 2.5v33c0 1.378-1.122 2.5-2.5 2.5h-8v-38zm-285.904-65.5h250.404c6.893 0 12.5 5.607 12.5 12.5v11.513h-275.404v-11.513c0-6.893 5.607-12.5 12.5-12.5zm285.904 376.333c1.378 0 2.5 1.122 2.5 2.5v33c0 1.378-1.122 2.5-2.5 2.5h-8v-38zm2.5-220.166v33c0 1.378-1.122 2.5-2.5 2.5h-8v-2.636c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v253.956h-275.404v-403.974h275.404v114.623c0 4.142 3.358 7.5 7.5 7.5 4.132 0 7.481-3.341 7.498-7.469h8.001c1.379 0 2.501 1.122 2.501 2.5z" fill="#000000" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1211_" d="m183.995 183.471c.084 0 .171 0 .256-.001 7.73-.067 14.972-3.14 20.391-8.654 5.418-5.513 8.366-12.807 8.298-20.538-.138-15.873-13.094-28.69-28.937-28.69-.084 0-.17 0-.255.001-7.73.067-14.971 3.141-20.39 8.654-5.418 5.514-8.366 12.807-8.298 20.538.138 15.873 13.093 28.69 28.935 28.69zm-9.938-38.714c2.61-2.656 6.099-4.136 9.822-4.169h.123c7.631 0 13.873 6.175 13.939 13.821.032 3.724-1.388 7.237-3.998 9.893s-6.099 4.137-9.823 4.169c-.042 0-.083 0-.125 0-3.677 0-7.142-1.417-9.768-3.998-2.656-2.61-4.136-6.099-4.169-9.823-.031-3.723 1.389-7.236 3.999-9.893z" fill="#000000" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1214_" d="m255.995 183.471c.084 0 .171 0 .256-.001 7.73-.067 14.972-3.14 20.391-8.654 5.418-5.513 8.366-12.807 8.298-20.538-.138-15.873-13.094-28.69-28.937-28.69-.084 0-.17 0-.255.001-7.73.067-14.971 3.141-20.39 8.654-5.418 5.514-8.366 12.807-8.298 20.538.138 15.873 13.093 28.69 28.935 28.69zm-9.938-38.714c2.61-2.656 6.099-4.136 9.822-4.169h.123c7.631 0 13.873 6.175 13.939 13.821.032 3.724-1.388 7.237-3.998 9.893s-6.099 4.137-9.823 4.169c-.042 0-.083 0-.125 0-3.677 0-7.142-1.417-9.768-3.998-2.656-2.61-4.136-6.099-4.169-9.823-.031-3.723 1.389-7.236 3.999-9.893z" fill="#000000" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1217_" d="m328.003 125.588c-.084 0-.17 0-.255.001-7.73.067-14.971 3.141-20.39 8.654-5.418 5.514-8.366 12.807-8.298 20.538.138 15.873 13.093 28.69 28.935 28.69.084 0 .171 0 .256-.001 7.73-.067 14.972-3.14 20.391-8.654 5.418-5.513 8.366-12.807 8.298-20.538-.138-15.873-13.094-28.69-28.937-28.69zm9.94 38.713c-2.61 2.656-6.099 4.137-9.823 4.169-.042 0-.083 0-.125 0-3.677 0-7.142-1.417-9.768-3.998-2.656-2.61-4.136-6.099-4.169-9.823-.032-3.723 1.388-7.236 3.998-9.893 2.61-2.656 6.099-4.136 9.822-4.169h.123c7.631 0 13.873 6.175 13.939 13.821.033 3.724-1.387 7.238-3.997 9.893z" fill="#000000" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1220_" d="m183.995 251.118c.084 0 .171 0 .256-.001 7.73-.067 14.972-3.14 20.391-8.654 5.418-5.513 8.366-12.807 8.298-20.538-.138-15.873-13.094-28.69-28.937-28.69-.084 0-.17 0-.255.001-15.958.139-28.828 13.234-28.688 29.192.138 15.873 13.093 28.69 28.935 28.69zm-.116-42.882h.123c7.631 0 13.873 6.175 13.939 13.821.032 3.724-1.388 7.237-3.998 9.893s-6.099 4.137-9.823 4.169c-.041 0-.082 0-.123 0-7.63 0-13.872-6.174-13.938-13.82-.067-7.688 6.133-13.996 13.82-14.063z" fill="#000000" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1223_" d="m255.995 251.118c.084 0 .171 0 .256-.001 7.73-.067 14.972-3.14 20.391-8.654 5.418-5.513 8.366-12.807 8.298-20.538-.138-15.873-13.094-28.69-28.937-28.69-.084 0-.17 0-.255.001-15.958.139-28.828 13.234-28.688 29.192.138 15.873 13.093 28.69 28.935 28.69zm-.116-42.882h.123c7.631 0 13.873 6.175 13.939 13.821.032 3.724-1.388 7.237-3.998 9.893s-6.099 4.137-9.823 4.169c-.041 0-.082 0-.123 0-7.63 0-13.872-6.174-13.938-13.82-.067-7.688 6.133-13.996 13.82-14.063z" fill="#000000" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1226_" d="m328.003 193.235c-.084 0-.17 0-.255.001-15.958.139-28.828 13.234-28.688 29.192.138 15.873 13.093 28.689 28.935 28.689.084 0 .171 0 .256-.001 7.73-.067 14.972-3.14 20.391-8.654 5.418-5.513 8.366-12.807 8.298-20.538-.138-15.871-13.094-28.689-28.937-28.689zm9.94 38.714c-2.61 2.656-6.099 4.137-9.823 4.169-.041 0-.082 0-.123 0-7.63 0-13.872-6.174-13.938-13.82-.067-7.687 6.133-13.995 13.82-14.062h.123c7.631 0 13.873 6.175 13.939 13.821.032 3.723-1.388 7.236-3.998 9.892z" fill="#000000" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1229_" d="m212.94 289.573c-.138-15.873-13.094-28.69-28.937-28.69-.084 0-.17 0-.255.001-15.958.139-28.828 13.234-28.688 29.192.138 15.873 13.093 28.689 28.935 28.689.084 0 .171 0 .256-.001 7.73-.067 14.972-3.14 20.391-8.654 5.418-5.513 8.365-12.807 8.298-20.537zm-18.997 10.023c-2.61 2.656-6.099 4.137-9.823 4.169-.041 0-.082 0-.123 0-7.63 0-13.872-6.174-13.938-13.82-.067-7.687 6.133-13.995 13.82-14.062h.123c7.631 0 13.873 6.175 13.939 13.821.032 3.723-1.388 7.236-3.998 9.892z" fill="#000000" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1232_" d="m255.995 318.766c.084 0 .171 0 .256-.001 7.73-.067 14.972-3.14 20.391-8.654 5.418-5.513 8.366-12.807 8.298-20.538-.138-15.873-13.094-28.69-28.937-28.69-.084 0-.17 0-.255.001-15.958.139-28.828 13.234-28.688 29.192.138 15.873 13.093 28.69 28.935 28.69zm-.116-42.883h.123c7.631 0 13.873 6.175 13.939 13.821.032 3.724-1.388 7.237-3.998 9.893s-6.099 4.137-9.823 4.169c-.041 0-.082 0-.123 0-7.63 0-13.872-6.174-13.938-13.82-.067-7.687 6.133-13.996 13.82-14.063z" fill="#000000" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1235_" d="m328.003 260.883c-.084 0-.17 0-.255.001-15.958.139-28.828 13.234-28.688 29.192.138 15.873 13.093 28.689 28.935 28.689.084 0 .171 0 .256-.001 7.73-.067 14.972-3.14 20.391-8.654 5.418-5.513 8.366-12.807 8.298-20.538-.138-15.872-13.094-28.689-28.937-28.689zm9.94 38.713c-2.61 2.656-6.099 4.137-9.823 4.169-.041 0-.082 0-.123 0-7.63 0-13.872-6.174-13.938-13.82-.067-7.687 6.133-13.995 13.82-14.062h.123c7.631 0 13.873 6.175 13.939 13.821.032 3.723-1.388 7.236-3.998 9.892z" fill="#000000" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1238_" d="m255.995 386.413c.084 0 .171 0 .256-.001 7.73-.067 14.972-3.14 20.391-8.654 5.418-5.513 8.366-12.807 8.298-20.538-.138-15.873-13.094-28.69-28.937-28.69-.084 0-.17 0-.255.001-15.958.139-28.828 13.234-28.688 29.192.138 15.873 13.093 28.69 28.935 28.69zm-.116-42.882h.123c7.631 0 13.873 6.175 13.939 13.821.032 3.724-1.388 7.237-3.998 9.893s-6.099 4.137-9.823 4.169c-.042 0-.083 0-.125 0-3.677 0-7.142-1.417-9.768-3.998-2.656-2.61-4.136-6.098-4.169-9.822-.066-7.688 6.134-13.996 13.821-14.063z" fill="#000000" data-original="#000000" class=""></path></g></svg>
                      <span class="font-medium text-gray-700">USSD Menu for SACCO customers</span>
                    </li>
                    <li class="flex items-center py-2 space-x-4 xl:py-3">
                      <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                      <span class="font-medium text-gray-700">Paybill and Till payments directly from your sacco account</span>
                    </li>
                   <li class="flex items-center py-2 space-x-4 xl:py-3">
                       <img class="h-5" src="{{asset('images/features/products_aws.svg')}}" alt="install on aws or premise">
                      <span class="font-medium text-gray-700">Get both AWS or on-premise installation</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img class="mx-auto sm:max-w-sm lg:max-w-full" src="https://cdn.devdojo.com/images/november2020/feature-graphic.png" alt="feature image"></div>
            </div>
          </div>
        </section>

         {{--Features--}}
        <section id="about" class="box-border relative block pt-12 pb-28 overflow-hidden leading-6 text-left bg-white">
            <div class="max-w-6xl px-4 px-16 mx-auto leading-6 text-left xl:px-12">
                <div class="box-border flex flex-col flex-wrap items-start mx-0 text-indigo-900">
                    <div class="pb-4 text-sm font-bold text-left text-gray-700 uppercase">
                        About Malakoff Analytics
                    </div>
                    <h3 class="relative w-full px-0 pb-2 m-0 font-sans text-5xl font-bold text-left xl:flex-grow-0 xl:flex-shrink-0
                    md:flex-grow-0 md:flex-shrink-0 lg:flex-grow-0 lg:flex-shrink-0 text-transparent bg-clip-text bg-gradient-to-l
                    from-green-400 to-blue-500">
                        What we do best...
                    </h3>
                </div>
                <div class="grid grid-cols-3 gap-5 text-indigo-900 md:grid-cols-6">
                     <div class="relative w-full col-span-3 px-4 leading-6 text-left">
                        <div class="box-border flex justify-start pt-12 text-indigo-900">
                            <img data-aos="fade-up"
                                data-aos-offset="50"
                                data-aos-delay="50"
                                data-aos-duration="1500" src="{{asset('images/digital_lending.svg')}}" class="leading-6 text-left
                                align-middle border-none w-14
                            h-14">
                            <div data-aos="fade-up"
                                data-aos-offset="50"
                                data-aos-delay="50"
                                data-aos-duration="2000" class="pl-8 leading-6 text-left">
                                <div class="box-border pb-1 text-xl font-medium text-indigo-900">
                                    Digitization
                                </div>
                                <div class="box-border text-base leading-normal text-gray-700">
                                    <ul class="list-outside list-disc ml-2">
                                        <li>
                                            <strong>Digital Lending</strong> - End-to-end solution <strong>integrated to CRB and
                                                Safaricom APIs</strong> via USSD and Mobile app interface.

                                        </li>
                                        <li>
                                            <strong>Digital customer on-boarding</strong> using biometric facial recognition integrate to
                                            IPRS and TSC
                                        </li>
                                        <li>
                                            <strong>Digital marketing</strong> - SEO, FB, IG and WhatsApp
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative w-full col-span-3 px-4 leading-6 text-left">
                        <div class="box-border flex justify-start pt-12 text-indigo-900">
                            <img data-aos="fade-up"
                                data-aos-offset="50"
                                data-aos-delay="50"
                                data-aos-duration="1000"
                                 src="{{asset('images/bank.png')}}" class="leading-6 text-left align-middle border-none w-14 h-14">
                            <div data-aos="fade-up"
                                data-aos-offset="50"
                                data-aos-delay="50"
                                data-aos-duration="2000" class="pl-8 leading-6 text-left">
                                <div class="box-border pb-1 text-xl font-medium text-indigo-900">
                                   Credit Risk Scoring
                                </div>
                                <div class="box-border text-base leading-normal text-gray-700">
                                    <ul class="list-outside list-disc ml-2">
                                        <li>Credit Score cards using <strong>R statistical packaging</strong></li>
                                        <li>Customer segmentation and clustering. Helps you maximize high potential client base.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative w-full col-span-3 px-4 leading-6 text-left">
                        <div class="box-border flex justify-start pt-12 text-indigo-900">
                            <span data-aos="fade-up"
                                data-aos-offset="50"
                                data-aos-delay="50"
                                data-aos-duration="1000">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     class="leading-6 text-left align-middle border-none w-14 h-14" x="0" y="0" viewBox="0 0 480 480" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m472 240c0 128.128906-103.871094 232-232 232s-232-103.871094-232-232 103.871094-232 232-232 232 103.871094 232 232zm0 0" fill="#f6e8c7" data-original="#f6e8c7" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m240 72c-92.785156 0-168 75.214844-168 168s75.214844 168 168 168 168-75.214844 168-168-75.214844-168-168-168zm0 288c-66.273438 0-120-53.726562-120-120s53.726562-120 120-120 120 53.726562 120 120-53.726562 120-120 120zm0 0" fill="#dce1ea" data-original="#dce1ea" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m237.664062 247.5625 4.707032-15.292969 104.019531 31.988281-4.703125 15.296876zm0 0" fill="#d12136" data-original="#d12136"></path><path xmlns="http://www.w3.org/2000/svg" d="m256 240c0 8.835938-7.164062 16-16 16s-16-7.164062-16-16 7.164062-16 16-16 16 7.164062 16 16zm0 0" fill="#9196a9" data-original="#9196a9" class=""></path><g xmlns="http://www.w3.org/2000/svg" fill="#354468"><path d="m232 32h16v24h-16zm0 0" fill="#354468" data-original="#354468" class=""></path><path d="m178.4375 41.160156 15.457031-4.140625 6.210938 23.179688-15.453125 4.144531zm0 0" fill="#354468" data-original="#354468" class=""></path><path d="m129.070312 63.863281 13.859376-8 12 20.785157-13.859376 8zm0 0" fill="#354468" data-original="#354468" class=""></path><path d="m87.265625 98.578125 11.3125-11.3125 16.972656 16.972656-11.3125 11.3125zm0 0" fill="#354468" data-original="#354468" class=""></path><path d="m55.863281 142.929688 8-13.855469 20.785157 12-8 13.855469zm0 0" fill="#354468" data-original="#354468" class=""></path><path d="m37.019531 193.890625 4.140625-15.453125 23.183594 6.214844-4.144531 15.453125zm0 0" fill="#354468" data-original="#354468" class=""></path><path d="m32 232h24v16h-24zm0 0" fill="#354468" data-original="#354468" class=""></path><path d="m279.898438 60.199219 6.210937-23.183594 15.453125 4.140625-6.210938 23.183594zm0 0" fill="#354468" data-original="#354468" class=""></path><path d="m325.070312 76.65625 11.996094-20.789062 13.859375 8-12 20.785156zm0 0" fill="#354468" data-original="#354468" class=""></path><path d="m364.449219 104.238281 16.96875-16.972656 11.316406 11.316406-16.972656 16.96875zm0 0" fill="#354468" data-original="#354468" class=""></path><path d="m395.34375 141.074219 20.785156-12 8 13.859375-20.785156 11.996094zm0 0" fill="#354468" data-original="#354468" class=""></path><path d="m415.660156 184.648438 23.183594-6.214844 4.140625 15.457031-23.183594 6.210937zm0 0" fill="#354468" data-original="#354468" class=""></path><path d="m424 232h24v16h-24zm0 0" fill="#354468" data-original="#354468" class=""></path><path d="m415.652344 295.34375 4.144531-15.453125 23.179687 6.214844-4.144531 15.453125zm0 0" fill="#354468" data-original="#354468" class=""></path></g><path xmlns="http://www.w3.org/2000/svg" d="m240 80c-88.367188 0-160 71.632812-160 160h32c0-70.691406 57.308594-128 128-128zm0 0" fill="#2cb357" data-original="#2cb357"></path><path xmlns="http://www.w3.org/2000/svg" d="m400 240c0-88.367188-71.632812-160-160-160v32c70.691406 0 128 57.308594 128 128zm0 0" fill="#ffbc05" data-original="#ffbc05" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m368 240c.035156 22.472656-5.875 44.550781-17.128906 64l27.714844 16c14.070312-24.308594 21.457031-51.910156 21.414062-80zm0 0" fill="#d12136" data-original="#d12136"></path><path xmlns="http://www.w3.org/2000/svg" d="m395.339844 338.925781 8-13.855469 20.785156 11.996094-8 13.859375zm0 0" fill="#354468" data-original="#354468" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m240 480c-132.546875 0-240-107.453125-240-240s107.453125-240 240-240 240 107.453125 240 240c-.148438 132.484375-107.515625 239.851562-240 240zm0-464c-123.710938 0-224 100.289062-224 224s100.289062 224 224 224 224-100.289062 224-224c-.140625-123.652344-100.347656-223.859375-224-224zm0 0" fill="#e38100" data-original="#e38100" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m55.007812 415.617188 99.390626-161.472657c2.914062-4.730469 8.070312-7.609375 13.625-7.609375 5.554687 0 10.710937 2.878906 13.625 7.609375l99.34375 161.472657c3.035156 4.933593 3.167968 11.128906.339843 16.1875-2.828125 5.058593-8.167969 8.195312-13.964843 8.195312h-198.734376c-5.796874 0-11.136718-3.136719-13.964843-8.195312-2.828125-5.058594-2.695313-11.253907.339843-16.1875zm0 0" fill="#ffbc05" data-original="#ffbc05" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m184 400c0 8.835938-7.164062 16-16 16s-16-7.164062-16-16 7.164062-16 16-16 16 7.164062 16 16zm0 0" fill="#354468" data-original="#354468" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m152 312c0-8.835938 7.164062-16 16-16s16 7.164062 16 16l-6.6875 40.113281c-.757812 4.550781-4.695312 7.890625-9.3125 7.886719-4.617188.003906-8.554688-3.335938-9.3125-7.886719zm0 0" fill="#354468" data-original="#354468" class=""></path></g>
                                </svg>
                            </span>

                            <div data-aos="fade-up"
                                data-aos-offset="50"
                                data-aos-delay="30"
                                data-aos-duration="1500"
                                 class="pl-8 leading-6 text-left">
                                <div class="box-border pb-1 text-xl font-medium text-indigo-900">
                                    Operational Risk Management
                                </div>
                                <div class="box-border text-base leading-normal text-gray-700">
                                    <ul class="list-outside list-disc ml-2">
                                        <li>Fraud risk management</li>
                                        <li>AML and suspicious transaction monitoring</li>
                                        <li>IT risk and information security</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative w-full col-span-3 px-4 leading-6 text-left">
                        <div class="box-border flex justify-start pt-12 text-indigo-900">
                            <img data-aos="fade-up"
                                data-aos-offset="50"
                                data-aos-delay="50"
                                data-aos-duration="1500" src="{{asset('images/partner.svg')}}" class="leading-6 text-left align-middle
                                border-none w-14 h-14">
                            <div data-aos="fade-up"
                                data-aos-offset="50"
                                data-aos-delay="50"
                                data-aos-duration="2000"
                                 class="pl-8 leading-6 text-left">
                                <div class="box-border pb-1 text-xl font-medium text-indigo-900">
                                    Partnerships
                                </div>
                                <div class="box-border text-base leading-normal text-gray-700">
                                    <ul class="list-outside list-disc ml-2">
                                        <li>
                                            <strong>Merchant and Agency Banking</strong>
                                        </li>
                                        <li>
                                            <strong>BRP and Robotics</strong>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
         {{--logos--}}
        <section class="bg-white pt-7 pb-10">
            <div class="container px-8 mx-auto sm:px-12 lg:px-20">
                <h1 class="pb-4 text-2xl font-black text-gray-500 text-center uppercase mb-7">
                    We have partnered and integrated with the best.
                </h1>
                <div class="flex grid items-center justify-center grid-cols-3 grid-cols-12 gap-y-8">
                    <div data-aos="fade-up"
                        data-aos-offset="200"
                        data-aos-delay="0"
                        data-aos-duration="1000"
                         class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                        <img src="{{asset('images/features/smile.png')}}" alt="Smile identity" class="block object-contain">
                    </div>
                    <div
                        data-aos="fade-up"
                        data-aos-offset="200"
                        data-aos-delay="10"
                        data-aos-duration="1000"
                        class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                        <img src="{{asset('images/logo_processmaker.webp')}}" alt="Google" class="block object-contain h-12">
                    </div>
                    <div data-aos="fade-up"
                        data-aos-offset="200"
                        data-aos-delay="30"
                        data-aos-duration="1000"
                         class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                        <img src="{{asset('images/mwalimu.png')}}" alt="Hubspot" class="block object-contain h-24">
                    </div>
                    <div data-aos="fade-up"
                        data-aos-offset="200"
                        data-aos-delay="50"
                        data-aos-duration="1000"
                         class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                        <img src="{{asset('images/navision.png')}}" alt="navision" class="block object-contain h-14 lg:h-14">
                    </div>
                    <div data-aos="fade-up"
                        data-aos-offset="200"
                        data-aos-delay="70"
                        data-aos-duration="1000"
                         class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-6 xl:col-span-2">
                        <img src="{{asset('images/profits.png')}}" alt="Slack" class="block object-contain h-14">
                    </div>
                    <div data-aos="fade-up"
                        data-aos-offset="200"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                         class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-6 xl:col-span-2">
                        <img  style="height: 60px" src="{{asset('images/features/products_aws.svg')}}" alt="aws" class="block
                        object-contain">
                    </div>
                </div>
            </div>
        </section>

        {{--CTA--}}
        <livewire:subscribe />

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
                        <a href="#" class="cursor-not-allowed opacity-50 mb-2 text-sm hover:text-gray-700">Privacy Policy</a>
                        <a href="#" class="cursor-not-allowed opacity-50 mb-2 text-sm hover:text-gray-700">Disclaimers</a>
                        <a href="#" class="cursor-not-allowed opacity-50 mb-2 text-sm hover:text-gray-700">Terms and Conditions</a>
                        <a href="#" class="cursor-not-allowed opacity-50 mb-2 text-sm hover:text-gray-700">Refund Policy</a>
                        <a href="#" class="cursor-not-allowed opacity-50 mb-2 text-sm hover:text-gray-700">Legal</a>
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
