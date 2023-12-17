<x-site>
    <div class="sm:overflow-hidden max-w-3xl mx-auto py-20">
        <div class="bg-white py-6 space-y-6 sm:p-6 border border-slate-200 rounded">
              <div>
                <h3 class="text-2xl leading-6 font-medium text-gray-900">Update Your Account Preferences</h3>
                <p class="mt-1 text-sm text-gray-500">This will help us authorize data handling or deletion on our part.</p>
              </div>

              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                  <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                  <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                  <input type="text" name="username" id="username" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                  <input type="text" name="email-address" id="email-address" autocomplete="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div class="mt-4 space-y-4">
                  <h3>Which data should be deleted?</h3>
                  <div class="flex items-start">
                    <div class="h-5 flex items-center">
                      <input id="comments" name="comments" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                    </div>
                    <div class="ml-3 text-sm">
                      <label for="comments" class="font-medium text-gray-700">Onboarding Data</label>
                      <p class="text-gray-500">
                        Includes KYC and account data
                      </p>
                    </div>
                  </div>
                  <div>
                    <div class="flex items-start">
                      <div class="h-5 flex items-center">
                        <input id="candidates" name="candidates" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="candidates" class="font-medium text-gray-700">Loan Origination Data</label>
                        <p class="text-gray-500">All loans data</p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <button id="requester" @click="showContactForm = true" class="px-3 py-2 text-xs font-bold tracking-tight text-white transition duration-200 transform rounded-lg shadow-2xl sm:px-6 bg-gradient-to-tr from-blue-500 to-blue-300 sm:text-lg hover:scale-105">
                Submit
              </button>
        </div>
      </div>
</x-site>