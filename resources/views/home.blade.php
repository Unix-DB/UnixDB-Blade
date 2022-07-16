<x-guest-layout>
    <!--
      This example requires Tailwind CSS v2.0+

      This example requires some changes to your config:

      ```
      // tailwind.config.js
      module.exports = {
        // ...
        plugins: [
          // ...
          require('@tailwindcss/forms'),
        ],
      }
      ```
    -->
    <div class="relative overflow-hidden">
        <header class="relative" x-data="{explore:false, more:false}">
            <div class="relative bg-white">
                <div class="absolute inset-0 shadow z-30 pointer-events-none" aria-hidden="true"></div>
                <div class="relative z-20">
                    <div class="max-w-7xl mx-auto flex justify-between items-center px-4 py-5 sm:px-6 sm:py-4 lg:px-8 md:justify-start md:space-x-10">
                        <div>
                            <a href="#" class="flex">
                                <span class="sr-only">Workflow</span>
                                <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                            </a>
                        </div>
                        <div class="-mr-2 -my-2 md:hidden">
                            <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                                <span class="sr-only">Open menu</span>
                                <!-- Heroicon name: outline/menu -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>
                        <div class="hidden md:flex-1 md:flex md:items-center md:justify-between">
                            <nav class="flex space-x-10">
                                <div>
                                    <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                                    <button @click="explore = true; more = false" @click.away="explore = false" type="button" class="text-gray-500 group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" aria-expanded="false">
                                        <span>Explore</span>
                                        <!--
                                          Heroicon name: solid/chevron-down

                                          Item active: "text-gray-600", Item inactive: "text-gray-400"
                                        -->
                                        <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>

                                    <!--
                                      'Solutions' flyout menu, show/hide based on flyout menu state.

                                      Entering: "transition ease-out duration-200"
                                        From: "opacity-0 -translate-y-1"
                                        To: "opacity-100 translate-y-0"
                                      Leaving: "transition ease-in duration-150"
                                        From: "opacity-100 translate-y-0"
                                        To: "opacity-0 -translate-y-1"
                                    -->
                                    <div x-show="explore" x-cloak class="hidden md:block absolute z-10 top-full inset-x-0 transform shadow-lg bg-white">
                                        <div class="max-w-7xl mx-auto grid gap-y-6 px-4 py-6 sm:grid-cols-2 sm:gap-8 sm:px-6 sm:py-8 lg:grid-cols-4 lg:px-8 lg:py-12 xl:py-16">
                                            <a href="#" class="-m-3 p-3 flex flex-col justify-between rounded-lg hover:bg-gray-50">
                                                <div class="flex md:h-full lg:flex-col">
                                                    <div class="flex-shrink-0">
                      <span class="inline-flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                        <!-- Heroicon name: outline/chart-bar -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                      </span>
                                                    </div>
                                                    <div class="ml-4 md:flex-1 md:flex md:flex-col md:justify-between lg:ml-0 lg:mt-4">
                                                        <div>
                                                            <p class="text-base font-medium text-gray-900">Analytics</p>
                                                            <p class="mt-1 text-sm text-gray-500">Get a better understanding of where your traffic is coming from.</p>
                                                        </div>
                                                        <p class="mt-2 text-sm font-medium text-indigo-600 lg:mt-4">Learn more <span aria-hidden="true">&rarr;</span></p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="#" class="-m-3 p-3 flex flex-col justify-between rounded-lg hover:bg-gray-50">
                                                <div class="flex md:h-full lg:flex-col">
                                                    <div class="flex-shrink-0">
                      <span class="inline-flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                        <!-- Heroicon name: outline/cursor-click -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                        </svg>
                      </span>
                                                    </div>
                                                    <div class="ml-4 md:flex-1 md:flex md:flex-col md:justify-between lg:ml-0 lg:mt-4">
                                                        <div>
                                                            <p class="text-base font-medium text-gray-900">Engagement</p>
                                                            <p class="mt-1 text-sm text-gray-500">Speak directly to your customers in a more meaningful way.</p>
                                                        </div>
                                                        <p class="mt-2 text-sm font-medium text-indigo-600 lg:mt-4">Learn more <span aria-hidden="true">&rarr;</span></p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="#" class="-m-3 p-3 flex flex-col justify-between rounded-lg hover:bg-gray-50">
                                                <div class="flex md:h-full lg:flex-col">
                                                    <div class="flex-shrink-0">
                      <span class="inline-flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                        <!-- Heroicon name: outline/shield-check -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                      </span>
                                                    </div>
                                                    <div class="ml-4 md:flex-1 md:flex md:flex-col md:justify-between lg:ml-0 lg:mt-4">
                                                        <div>
                                                            <p class="text-base font-medium text-gray-900">Security</p>
                                                            <p class="mt-1 text-sm text-gray-500">Your customers&#039; data will be safe and secure.</p>
                                                        </div>
                                                        <p class="mt-2 text-sm font-medium text-indigo-600 lg:mt-4">Learn more <span aria-hidden="true">&rarr;</span></p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="#" class="-m-3 p-3 flex flex-col justify-between rounded-lg hover:bg-gray-50">
                                                <div class="flex md:h-full lg:flex-col">
                                                    <div class="flex-shrink-0">
                      <span class="inline-flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                        <!-- Heroicon name: outline/view-grid -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                      </span>
                                                    </div>
                                                    <div class="ml-4 md:flex-1 md:flex md:flex-col md:justify-between lg:ml-0 lg:mt-4">
                                                        <div>
                                                            <p class="text-base font-medium text-gray-900">Integrations</p>
                                                            <p class="mt-1 text-sm text-gray-500">Connect with third-party tools that you&#039;re already using.</p>
                                                        </div>
                                                        <p class="mt-2 text-sm font-medium text-indigo-600 lg:mt-4">Learn more <span aria-hidden="true">&rarr;</span></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="bg-gray-50">
                                            <div class="max-w-7xl mx-auto space-y-6 px-4 py-5 sm:flex sm:space-y-0 sm:space-x-10 sm:px-6 lg:px-8">
                                                <div class="flow-root">
                                                    <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                                                        <!-- Heroicon name: outline/play -->
                                                        <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                        <span class="ml-3">Watch Demo</span>
                                                    </a>
                                                </div>

                                                <div class="flow-root">
                                                    <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                                                        <!-- Heroicon name: outline/check-circle -->
                                                        <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                        <span class="ml-3">View All Products</span>
                                                    </a>
                                                </div>

                                                <div class="flow-root">
                                                    <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                                                        <!-- Heroicon name: outline/phone -->
                                                        <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                        </svg>
                                                        <span class="ml-3">Contact Sales</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900"> Pricing </a>
                                <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900"> Docs </a>
                                <div>
                                    <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                                    <button @click="more = true; explore = false" @click.away="more = false" type="button" class="text-gray-500 group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" aria-expanded="false">
                                        <span>More</span>
                                        <!--
                                          Heroicon name: solid/chevron-down

                                          Item active: "text-gray-600", Item inactive: "text-gray-400"
                                        -->
                                        <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>

                                    <!--
                                      'More' flyout menu, show/hide based on flyout menu state.

                                      Entering: "transition ease-out duration-200"
                                        From: "opacity-0 -translate-y-1"
                                        To: "opacity-100 translate-y-0"
                                      Leaving: "transition ease-in duration-150"
                                        From: "opacity-100 translate-y-0"
                                        To: "opacity-0 -translate-y-1"
                                    -->
                                    <div x-show="more" x-cloak class="hidden md:block absolute z-10 top-full inset-x-0 transform shadow-lg">
                                        <div class="absolute inset-0 flex">
                                            <div class="bg-white w-1/2"></div>
                                            <div class="bg-gray-50 w-1/2"></div>
                                        </div>
                                        <div class="relative max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2">
                                            <nav class="grid gap-y-10 px-4 py-8 bg-white sm:grid-cols-2 sm:gap-x-8 sm:py-12 sm:px-6 lg:px-8 xl:pr-12">
                                                <div>
                                                    <h3 class="text-sm font-medium tracking-wide text-gray-500 uppercase">Company</h3>
                                                    <ul role="list" class="mt-5 space-y-6">
                                                        <li class="flow-root">
                                                            <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">
                                                                <!-- Heroicon name: outline/information-circle -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                </svg>
                                                                <span class="ml-4">About</span>
                                                            </a>
                                                        </li>

                                                        <li class="flow-root">
                                                            <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">
                                                                <!-- Heroicon name: outline/office-building -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                                                </svg>
                                                                <span class="ml-4">Customers</span>
                                                            </a>
                                                        </li>

                                                        <li class="flow-root">
                                                            <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">
                                                                <!-- Heroicon name: outline/newspaper -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                                                </svg>
                                                                <span class="ml-4">Press</span>
                                                            </a>
                                                        </li>

                                                        <li class="flow-root">
                                                            <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">
                                                                <!-- Heroicon name: outline/briefcase -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                                </svg>
                                                                <span class="ml-4">Careers</span>
                                                            </a>
                                                        </li>

                                                        <li class="flow-root">
                                                            <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">
                                                                <!-- Heroicon name: outline/shield-check -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                                                </svg>
                                                                <span class="ml-4">Privacy</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h3 class="text-sm font-medium tracking-wide text-gray-500 uppercase">Resources</h3>
                                                    <ul role="list" class="mt-5 space-y-6">
                                                        <li class="flow-root">
                                                            <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">
                                                                <!-- Heroicon name: outline/user-group -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                                                </svg>
                                                                <span class="ml-4">Community</span>
                                                            </a>
                                                        </li>

                                                        <li class="flow-root">
                                                            <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">
                                                                <!-- Heroicon name: outline/globe-alt -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                                                </svg>
                                                                <span class="ml-4">Partners</span>
                                                            </a>
                                                        </li>

                                                        <li class="flow-root">
                                                            <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">
                                                                <!-- Heroicon name: outline/bookmark-alt -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                                </svg>
                                                                <span class="ml-4">Guides</span>
                                                            </a>
                                                        </li>

                                                        <li class="flow-root">
                                                            <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">
                                                                <!-- Heroicon name: outline/desktop-computer -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                                </svg>
                                                                <span class="ml-4">Webinars</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </nav>
                                            <div class="bg-gray-50 px-4 py-8 sm:py-12 sm:px-6 lg:px-8 xl:pl-12">
                                                <div>
                                                    <h3 class="text-sm font-medium tracking-wide text-gray-500 uppercase">From the blog</h3>
                                                    <ul role="list" class="mt-6 space-y-6">
                                                        <li class="flow-root">
                                                            <a href="#" class="-m-3 p-3 flex rounded-lg hover:bg-gray-100">
                                                                <div class="hidden sm:block flex-shrink-0">
                                                                    <img class="w-32 h-20 object-cover rounded-md" src="https://images.unsplash.com/photo-1558478551-1a378f63328e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2849&q=80" alt="">
                                                                </div>
                                                                <div class="w-0 flex-1 sm:ml-8">
                                                                    <h4 class="text-base font-medium text-gray-900 truncate">Boost your conversion rate</h4>
                                                                    <p class="mt-1 text-sm text-gray-500">Eget ullamcorper ac ut vulputate fames nec mattis pellentesque elementum. Viverra tempor id mus.</p>
                                                                </div>
                                                            </a>
                                                        </li>

                                                        <li class="flow-root">
                                                            <a href="#" class="-m-3 p-3 flex rounded-lg hover:bg-gray-100">
                                                                <div class="hidden sm:block flex-shrink-0">
                                                                    <img class="w-32 h-20 object-cover rounded-md" src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2300&q=80" alt="">
                                                                </div>
                                                                <div class="w-0 flex-1 sm:ml-8">
                                                                    <h4 class="text-base font-medium text-gray-900 truncate">How to use search engine optimization to drive traffic to your site</h4>
                                                                    <p class="mt-1 text-sm text-gray-500">Eget ullamcorper ac ut vulputate fames nec mattis pellentesque elementum. Viverra tempor id mus.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mt-6 text-sm font-medium">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-500"> View all posts <span aria-hidden="true">&rarr;</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                            @guest()
                            <div class="flex items-center md:ml-12">
                                <a href="{{route('login')}}" class="text-base font-medium text-gray-500 hover:text-gray-900"> Sign in </a>
                                <a href="{{route('register')}}" class="ml-8 inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700"> Sign up </a>
                            </div>
                            @endguest()
                            @auth()
                                <div class="flex items-center md:ml-12">
                                    <a href="{{route('dashboard')}}" class="text-base font-medium text-gray-500 hover:text-gray-900"> Dashboard </a>
                                    <a href="{{--{{route('register')}}--}}" class="ml-8 inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700"> New post </a>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>

                <!--
                  Mobile menu, show/hide based on mobile menu state.

                  Entering: "duration-200 ease-out"
                    From: "opacity-0 scale-95"
                    To: "opacity-100 scale-100"
                  Leaving: "duration-100 ease-in"
                    From: "opacity-100 scale-100"
                    To: "opacity-0 scale-95"
                -->
                <div class="absolute z-30 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" x-data="{mobile: false}">
                    <div x-show="mobile" class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                        <div class="pt-5 pb-6 px-5 sm:pb-8">
                            <div class="flex items-center justify-between">
                                <div>
                                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
                                </div>
                                <div class="-mr-2">
                                    <button @click="mobile = false" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                        <span class="sr-only">Close menu</span>
                                        <!-- Heroicon name: outline/x -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="mt-6 sm:mt-8">
                                <nav>
                                    <div class="grid gap-7 sm:grid-cols-2 sm:gap-y-8 sm:gap-x-4">
                                        <a href="#" class="-m-3 flex items-center p-3 rounded-lg hover:bg-gray-50">
                                            <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                                <!-- Heroicon name: outline/chart-bar -->
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                                </svg>
                                            </div>
                                            <div class="ml-4 text-base font-medium text-gray-900">Analytics</div>
                                        </a>

                                        <a href="#" class="-m-3 flex items-center p-3 rounded-lg hover:bg-gray-50">
                                            <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                                <!-- Heroicon name: outline/cursor-click -->
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                                </svg>
                                            </div>
                                            <div class="ml-4 text-base font-medium text-gray-900">Engagement</div>
                                        </a>

                                        <a href="#" class="-m-3 flex items-center p-3 rounded-lg hover:bg-gray-50">
                                            <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                                <!-- Heroicon name: outline/shield-check -->
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                                </svg>
                                            </div>
                                            <div class="ml-4 text-base font-medium text-gray-900">Security</div>
                                        </a>

                                        <a href="#" class="-m-3 flex items-center p-3 rounded-lg hover:bg-gray-50">
                                            <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                                <!-- Heroicon name: outline/view-grid -->
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                                </svg>
                                            </div>
                                            <div class="ml-4 text-base font-medium text-gray-900">Integrations</div>
                                        </a>
                                    </div>
                                    <div class="mt-8 text-base">
                                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> View all products <span aria-hidden="true">&rarr;</span></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="py-6 px-5">
                            <div class="grid grid-cols-2 gap-4">
                                <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700"> Pricing </a>

                                <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700"> Docs </a>

                                <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700"> Company </a>

                                <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700"> Resources </a>

                                <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700"> Blog </a>

                                <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700"> Contact Sales </a>
                            </div>
                            <div class="mt-6">
                                <a href="#" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700"> Sign up </a>
                                <p class="mt-6 text-center text-base font-medium text-gray-500">
                                    Existing customer?
                                    <a href="#" class="text-indigo-600 hover:text-indigo-500"> Sign in </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="pt-10 bg-gray-900 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
                <div class="mx-auto max-w-7xl lg:px-8">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                        <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
                            <div class="lg:py-24">
                                {{--<a href="#" class="inline-flex items-center text-white bg-black rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base hover:text-gray-200">
                                    <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-indigo-500 rounded-full">We're hiring</span>
                                    <span class="ml-4 text-sm">Visit our careers page</span>
                                    <!-- Heroicon name: solid/chevron-right -->
                                    <svg class="ml-2 w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>--}}
                                <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                                    <span class="block">A community to share</span>
                                    <span class="block text-indigo-400">your riced setups</span>
                                </h1>
                                <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">One central community, whether you are new or experienced when it comes to making Unix look amazing.</p>
                            </div>
                        </div>
                        <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
                            <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
                                <!-- Illustration taken from Lucid Illustrations: https://lucid.pixsellz.io/ -->
                                <img class="w-full lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-auto lg:max-w-none" src="https://tailwindui.com/img/component-images/cloud-illustration-indigo-400.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="py-16 bg-gray-50 overflow-hidden lg:py-24">
                <div class="relative max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
                    <svg class="hidden lg:block absolute left-full transform -translate-x-1/2 -translate-y-1/4" width="404" height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
                        <defs>
                            <pattern id="b1e6e422-73f8-40a6-b5d9-c8586e37e0e7" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="784" fill="url(#b1e6e422-73f8-40a6-b5d9-c8586e37e0e7)" />
                    </svg>

                    <div class="relative">
                        <h2 class="text-center text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Be part of the unix community.</h2>
                        <p class="mt-4 max-w-3xl mx-auto text-center text-xl text-gray-500">On Unix DB, we welcome anyone whether you are just visiting or uploading one of your new setups to share with everyone. You are all welcome.</p>
                    </div>

                    <div class="relative mt-12 lg:mt-24 lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
                        <div class="relative">
                            <h3 class="text-2xl font-extrabold text-gray-900 tracking-tight sm:text-3xl">Transfer funds world-wide</h3>
                            <p class="mt-3 text-lg text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur minima sequi recusandae, porro maiores officia assumenda aliquam laborum ab aliquid veritatis impedit odit adipisci optio iste blanditiis facere. Totam, velit.</p>

                            <dl class="mt-10 space-y-10">
                                <div class="relative">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                            <!-- Heroicon name: outline/globe-alt -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                            </svg>
                                        </div>
                                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Competitive exchange rates</p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
                                </div>

                                <div class="relative">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                            <!-- Heroicon name: outline/scale -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                            </svg>
                                        </div>
                                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">No hidden fees</p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
                                </div>

                                <div class="relative">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                            <!-- Heroicon name: outline/lightning-bolt -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                            </svg>
                                        </div>
                                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Transfers are instant</p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
                                </div>
                            </dl>
                        </div>

                        <div class="mt-10 -mx-4 relative lg:mt-0" aria-hidden="true">
                            <svg class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" fill="none" viewBox="0 0 784 404">
                                <defs>
                                    <pattern id="ca9667ae-9f92-4be7-abcb-9e3d727f2941" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                    </pattern>
                                </defs>
                                <rect width="784" height="404" fill="url(#ca9667ae-9f92-4be7-abcb-9e3d727f2941)" />
                            </svg>
                            <img class="relative mx-auto" width="490" src="https://tailwindui.com/img/features/feature-example-1.png" alt="">
                        </div>
                    </div>

                    <svg class="hidden lg:block absolute right-full transform translate-x-1/2 translate-y-12" width="404" height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
                        <defs>
                            <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="784" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)" />
                    </svg>

                    <div class="relative mt-12 sm:mt-16 lg:mt-24">
                        <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
                            <div class="lg:col-start-2">
                                <h3 class="text-2xl font-extrabold text-gray-900 tracking-tight sm:text-3xl">Always in the loop</h3>
                                <p class="mt-3 text-lg text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit ex obcaecati natus eligendi delectus, cum deleniti sunt in labore nihil quod quibusdam expedita nemo.</p>

                                <dl class="mt-10 space-y-10">
                                    <div class="relative">
                                        <dt>
                                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                                <!-- Heroicon name: outline/annotation -->
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                                </svg>
                                            </div>
                                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Mobile notifications</p>
                                        </dt>
                                        <dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
                                    </div>

                                    <div class="relative">
                                        <dt>
                                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                                <!-- Heroicon name: outline/mail -->
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                </svg>
                                            </div>
                                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Reminder emails</p>
                                        </dt>
                                        <dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
                                    </div>
                                </dl>
                            </div>

                            <div class="mt-10 -mx-4 relative lg:mt-0 lg:col-start-1">
                                <svg class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" fill="none" viewBox="0 0 784 404" aria-hidden="true">
                                    <defs>
                                        <pattern id="e80155a9-dfde-425a-b5ea-1f6fadd20131" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                        </pattern>
                                    </defs>
                                    <rect width="784" height="404" fill="url(#e80155a9-dfde-425a-b5ea-1f6fadd20131)" />
                                </svg>
                                <img class="relative mx-auto" width="490" src="https://tailwindui.com/img/features/feature-example-2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gray-50">
                <div class="max-w-7xl mx-auto text-center py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        <span class="block">Ready to dive in?</span>
                        <span class="block">Start your free trial today.</span>
                    </h2>
                    <div class="mt-8 flex justify-center">
                        <div class="inline-flex rounded-md shadow">
                            <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700"> Get started </a>
                        </div>
                        <div class="ml-3 inline-flex">
                            <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200"> Learn more </a>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>

</x-guest-layout>
