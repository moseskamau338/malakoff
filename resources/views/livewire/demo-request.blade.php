<section class="py-20 bg-gray-50">
    @include('layouts.includes.notifications')
        <div class="px-10 mx-auto max-w-7xl">
            <div class="flex flex-wrap items-center justify-center">
                <div class="max-w-sm mb-16 lg:mb-0 lg:max-w-2xl lg:w-1/2 lg:px-4">
                    <a class="inline-block mb-6 text-3xl font-bold leading-none" href="#">
                        <img class="h-24" src="{{asset('images/logo-color.svg')}}" alt="">

                    </a>
                    <h2 style="color: #022A5B" class="mb-4 text-3xl font-bold tracking-tight lg:text-5xl xl:text-6xl">
                        Join us and change your <span class="tracking-tight text-transparent bg-clip-text bg-gradient-to-l
                from-green-400 to-blue-500">GAME.</span>
                    </h2>
                    <p class="mb-8 leading-loose text-gray-500">We will get in touch soon and discuss how the demo will be undertaken
                        .</p>
                    @include('layouts.includes.notifications')
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div class="max-w-sm mx-auto lg:mr-0 lg:ml-auto">
                        <div class="overflow-hidden text-left bg-white rounded-md shadow-sm">
                            <div class="px-6 py-8">
                                    <h2 class="text-gray-700 text-2xl mb-2">Request A Demo</h2>
                                <form wire:submit.prevent="submit" class="grid max-w-3xl gap-4 mx-auto sm:grid-cols-2">
                                    <div>
                                        <label for="name" class="inline-block mb-2 text-sm font-medium text-gray-500
                                        sm:text-base">Your Name</label>
                                        <input wire:model.defer="name" name="name" class="w-full px-3 py-2 text-gray-800 transition
                                        duration-100
                                        border
                                        rounded-md outline-none bg-gray-50 focus:ring ring-blue-300">
                                    </div>

                                    <div>
                                        <label for="email" class="inline-block mb-2 text-sm font-medium text-gray-500
                                        sm:text-base">Your Email</label>
                                        <input wire:model.defer="email" name="email" type="email" required class="w-full px-3 py-2
                                        text-gray-800
                                        transition
                                        duration-100 border
                                        rounded-md outline-none bg-gray-50 focus:ring ring-blue-300">
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="company" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Company</label>
                                        <input wire:model.defer="company" name="company" class="w-full px-3 py-2 text-gray-800 transition
                                        duration-100 border
                                        rounded-md outline-none bg-gray-50 focus:ring ring-blue-300">
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="phone" class="inline-block mb-2 text-sm font-medium text-gray-500
                                        sm:text-base">Phone Number</label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                        <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300
                                        bg-gray-50 text-gray-500 sm:text-sm">+</span>
                                        <input type="number" wire:model.defer="phone" name="phone" class="flex-1 min-w-0
                                        block w-full px-3 py-2 rounded-none rounded-r-md focus:ring ring-blue-300
                                        sm:text-sm bg-gray-50 outline-none border border-l-0 border-gray-300 text-gray-800
                                        transition duration-100" placeholder="254XXXX">
                                      </div>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="message" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Message</label>
                                        <textarea wire:model.defer="message" name="message" class="w-full h-28 px-3 py-2 text-gray-800
                                        transition
                                        duration-100
                                        border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300"></textarea>
                                    </div>

                                    <div class="flex items-center justify-between sm:col-span-2">
                                        <button type="submit" class="px-2 py-2 text-sm font-bold tracking-tight text-white
                                    transition duration-200 transform rounded-lg shadow-2xl sm:px-6 bg-gradient-to-tr from-blue-500
                                    to-blue-300 sm:text-md hover:scale-105">
                                            <span  wire:loading.remove>Send Message</span>
                                            <span wire:loading.attr="disabled" wire:loading.class="cursor-none opacity-70" wire:loading.flex class="ml-1">
                                                Processing...
                                            </span>
                                        </button>
                                    </div>
                                </form>

                            </div>
                            <div class="py-2 text-xs font-medium text-gray-300 border-t border-gray-100 bg-gray-50">By signing up, you agree to our <a class="text-indigo-400 underline">Terms of Service</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
