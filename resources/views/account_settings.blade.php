<x-site>
    <div class="sm:overflow-hidden max-w-3xl mx-auto py-20">
        <form action="/account-settings" method="POST" class="bg-white py-6 space-y-6 sm:p-6 border border-slate-200 rounded">
          @csrf
              <div>
                <h3 class="text-2xl leading-6 font-medium text-gray-900">
                  Account deletion for Mwalimu Smart App
                </h3>
                <p class="mt-1 text-sm text-gray-500">Fill out this form to request account deletion</p>
              </div>

              <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12">
                  <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                  <input type="text" required value="{{ old('first_name') }}" name="first_name" id="first-name" autocomplete="given-name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                  @error('first_name')
                    <p class="text-red-500 text-sm italic">{{ $message }}</p>
                  @enderror
                </div>

                <div class="col-span-12">
                  <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                  <input type="text" value="{{ old('last_name') }}" required name="last_name" id="last-name" autocomplete="family-name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  @error('last_name')
                    <p class="text-red-500 text-sm italic">{{ $message }}</p>
                  @enderror
                </div>

                <div class="col-span-12">
                  <label for="username" required class="block text-sm font-medium text-gray-700">Username</label>
                  <input type="text" value="{{ old('username') }}" name="username" id="username" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  @error('username')
                    <p class="text-red-500 text-sm italic">{{ $message }}</p>
                  @enderror
                </div>

                <div class="col-span-12">
                  <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                  <input type="text" value="{{ old('email') }}" required name="email" id="email-address" autocomplete="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  @error('email')
                    <p class="text-red-500 text-sm italic">{{ $message }}</p>
                  @enderror
                </div>

                <div class="col-span-12 mt-4 space-y-4">
                  <h3>Which data should be deleted?</h3>
                  <div class="flex items-start">
                    <div class="h-5 flex items-center">
                      <input id="onboarding_data" value="0" name="onboarding_data" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                    </div>
                    <div class="ml-3 text-sm">
                      <label for="onboarding_data" class="font-medium text-gray-700">Onboarding Data</label>
                      <p class="text-gray-500">
                        Includes KYC and account data
                      </p>
                    </div>
                  </div>
                  @error('onboarding_data')
                    <p class="text-red-500 text-sm italic">{{ $message }}</p>
                  @enderror
                  <div>
                    <div class="flex items-start">
                      <div class="h-5 flex items-center">
                        <input id="loan_origination_data" value="0" name="loan_origination_data" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="loan_origination_data" class="font-medium text-gray-700">Loan Origination Data</label>
                        <p class="text-gray-500">All loans data</p>
                      </div>
                    </div>
                  </div>
                  @error('loan_origination_data')
                    <p class="text-red-500 text-sm italic">{{ $message }}</p>
                  @enderror
                </div>

              </div>

              <button type="submit" class="px-3 py-2 text-xs font-bold tracking-tight text-white transition duration-200 transform rounded-lg shadow-2xl sm:px-6 bg-gradient-to-tr from-blue-500 to-blue-300 sm:text-lg hover:scale-105">
                Submit
              </button>
        </form>
      </div>
</x-site>