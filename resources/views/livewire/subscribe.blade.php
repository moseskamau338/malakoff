<section class="bg-white">
    @include('layouts.includes.notifications')
        <div class="flex flex-col items-center justify-center px-5 py-20 mx-auto max-w-7xl md:px-0">
            <div class="relative">
                <h1 class="relative text-5xl font-black text-transparent bg-center bg-cover bg-gradient-to-br from-indigo-400 via-indigo-600 to-indigo-500 lg:text-6xl bg-clip-text" style="background-image:url('https://cdn.devdojo.com/images/february2021/bg-colorful.jpg')">Join now.</h1>
            </div>
            <p class="mt-3 text-xl text-gray-500 lg:text-2xl">Discover the power of your potential.</p>
            @error('email')
                <div class="bg-yellow-200 border-l-4 border-yellow-400 p-4 mt-2">
                  <div class="flex">
                    <div class="flex-shrink-0">
                      <!-- Heroicon name: solid/exclamation -->
                      <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                      </svg>
                    </div>
                    <div class="ml-3">
                      <p class="text-sm text-yellow-700">
                        {{ $message }}
                      </p>
                    </div>
                  </div>
                </div>
            @enderror


            <form wire:submit.prevent="subscribe"
                class="flex flex-col justify-center w-full mt-5 space-y-3 sm:space-x-3 sm:space-y-0 sm:flex-row lg:mt-8">
               @csrf
                <input wire:model.defer="email" name="email" type="email" required class="container inline-block h-12 px-3
                overflow-visible
                text-base
                font-semibold
                text-gray-700
                bg-transparent border-2 border-gray-300 border-solid rounded-lg sm:max-w-xs lg:max-w-sm focus:outline-none cursor-text
                md:text-left focus:ring-2 focus:ring-indigo-500 focus:border-indigo-600 @error('email') ring-red-400 @enderror"
                       placeholder="Your email address">


                <button @error('email') disabled @enderror type="submit" class="px-3 py-2 text-sm font-bold tracking-tight text-white
                transition
                duration-200 transform
                rounded-lg
                shadow-2xl
                 sm:px-5 bg-gradient-to-tr from-blue-500 to-blue-300 sm:text-lg hover:scale-105">
                    <span  wire:loading.remove>Join our mailing list</span>
                    <span wire:loading.attr="disabled" wire:loading.class="cursor-none opacity-70" wire:loading.flex class="ml-1">
                        Processing...
                    </span>
                </button>
            </form>

        </div>



    </section>
