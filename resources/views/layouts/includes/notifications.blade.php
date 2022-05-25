  @if(session()->has('message'))
        @if(session('message')->type === 'success')
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" class="rounded-md bg-green-100 p-4 border-2
        border-green-200 right-10 top-10 fixed z-50 animate__animated animate__slideInRight">
            <div class="flex">
            <div class="flex-shrink-0">
              <!-- Heroicon name: solid/check-circle -->
              <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
            </div>
            <div class="ml-3">
              <h3 class="text-sm font-medium text-green-800">Success!</h3>
              <div class="mt-2 text-sm text-green-700">
                <p>{{session('message')->message}}</p>
              </div>
              <div class="mt-4">
                <div class="-mx-2 -my-1.5 flex">
                  <button  x-on:click="show = false" type="button" class="ml-3 bg-green-50 px-2 py-1.5 rounded-md text-sm font-medium text-green-800
                  hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-green-50 focus:ring-green-600">Dismiss</button>
                </div>
              </div>
            </div>
            </div>
            </div>

        @else
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" class="rounded-md bg-red-100 p-4 border-2
    border-red-200 right-10 top-10 fixed z-50 animate__animated animate__slideInRight">
        <div class="flex">
        <div class="flex-shrink-0">
          <!-- Heroicon name: solid/check-circle -->
         <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"
              stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
        </svg>
          </svg>
        </div>
        <div class="ml-3">
          <h3 class="text-sm font-medium text-red-800">System Error!</h3>
          <div class="mt-2 text-sm text-red-700">
            <p>{{session('message')->message}}</p>
          </div>
          <div class="mt-4">
            <div class="-mx-2 -my-1.5 flex">
              <button x-on:click="show = false" type="button" class="ml-3 bg-red-50 px-2 py-1.5 rounded-md text-sm font-medium text-red-800
              hover:bg-red-100
              focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-red-50 focus:ring-red-600">Dismiss</button>
            </div>
          </div>
        </div>
        </div>
        </div>
        @endif
    @endif
