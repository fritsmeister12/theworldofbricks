<script>
    const toggleSearch = () => {
        document.getElementById("searchInput").classList.toggle("hidden");
    };
    const mdOptionsToggle = () => {
        document.getElementById("md-searchbar").classList.toggle("hidden");
        document.getElementById("md-searchbar").classList.toggle("flex");
    };
    const openMenu = () => {
        document.getElementById("mobile-menu").classList.remove("hidden");
    };
    const closeMenu = () => {
        document.getElementById("mobile-menu").classList.add("hidden");
    };
</script>

{{-- New Navbar --}}
{{-- <div class="top-0 shadow-md fixed w-full" style="z-index: 100; background-color: #FFCF00">
    <p class="h-10 flex items-center justify-center text-sm  font-light text-white px-4 sm:px-6 lg:px-8"
        style="background-color: #201D48">
        Get free delivery on orders over $100</p>
    <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class="relative flex grid items-center grid-cols-2 lg:grid-cols-3">
            <ul class="flex items-center hidden space-x-8 lg:flex">
                <li><a href="{{ route('verkoop.index') }}" aria-label="Our product" title="Our product"
                        class="font-medium uppercase tracking-wide text-black transition-colors duration-200 hover:text-teal-accent-400">Producten</a>
                </li>
                <li><a href="{{ route('over-ons') }}" aria-label="Our product" title="Our product"
                        class="font-medium uppercase tracking-wide text-black transition-colors duration-200 hover:text-teal-accent-400">Over
                        Ons</a>
                </li>
                <li><a href="{{ route('contact') }}" aria-label="Product pricing" title="Product pricing"
                        class="font-medium uppercase tracking-wide text-black transition-colors duration-200 hover:text-teal-accent-400">Contact</a>
                </li>
            </ul>
            <a href="{{ route('home') }}" aria-label="Company" title="Company"
                class="inline-flex items-center lg:mx-auto">
                <svg class="w-8 text-red-600" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2"
                    stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                    <rect x="3" y="1" width="7" height="12"></rect>
                    <rect x="3" y="17" width="7" height="6"></rect>
                    <rect x="14" y="1" width="7" height="6"></rect>
                    <rect x="14" y="11" width="7" height="12"></rect>
                </svg>
                <span class="ml-2 text-xl font-bold tracking-wide text-black uppercase">The World of Bricks</span>
            </a>
            @auth
                <ul class="flex items-center hidden ml-auto space-x-8 lg:flex">
                    <li><a href="{{ route('profile') }}" aria-label="Sign in" title="Sign in"
                            class="font-medium tracking-wide text-black transition-colors duration-200 hover:text-teal-accent-400">Profiel
                        </a></li>
                    <li>
                        <a href="{{ route('logout') }}"
                            class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md focus:shadow-outline focus:outline-none"
                            style="background-color: #d01012" aria-label="Sign up" title="Sign up">
                            Log uit
                        </a>
                    </li>
                </ul>
            @endauth
            @guest
                <ul class="flex items-center hidden ml-auto space-x-8 lg:flex">
                    <li><a href="{{ route('login') }}" aria-label="Sign in" title="Sign in"
                            class="font-medium tracking-wide text-black transition-colors duration-200 hover:text-teal-accent-400">Log
                            in
                        </a></li>
                    <li>
                        <a href="{{ route('register') }}"
                            class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md focus:shadow-outline focus:outline-none"
                            style="background-color: #d01012" aria-label="Sign up" title="Sign up">
                            Aanmelden
                        </a>
                    </li>
                </ul>
            @endguest

            <!-- Mobile menu -->
            <div class="ml-auto lg:hidden">
                <button aria-label="Open Menu" title="Open Menu"
                    class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline">
                    <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
                        <path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z">
                        </path>
                        <path fill="currentColor"
                            d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
                    </svg>
                </button>
                {{-- <!-- Mobile menu dropdown
          <div class="absolute top-0 left-0 w-full">
            <div class="p-5 bg-white border rounded shadow-sm">
              <div class="flex items-center justify-between mb-4">
                <div>
                  <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
                    <svg class="w-8 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                      <rect x="3" y="1" width="7" height="12"></rect>
                      <rect x="3" y="17" width="7" height="6"></rect>
                      <rect x="14" y="1" width="7" height="6"></rect>
                      <rect x="14" y="11" width="7" height="12"></rect>
                    </svg>
                    <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Company</span>
                  </a>
                </div>
                <div>
                  <button aria-label="Close Menu" title="Close Menu" class="p-2 -mt-2 -mr-2 transition duration-200 rounded hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                    <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                      <path
                        fill="currentColor"
                        d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z"
                      ></path>
                    </svg>
                  </button>
                </div>
              </div>
              <nav>
                <ul class="space-y-4">
                  <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Product</a></li>
                  <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Features</a></li>
                  <li><a href="/" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Pricing</a></li>
                  <li><a href="/" aria-label="Sign in" title="Sign in" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Sign in</a></li>
                  <li>
                    <a
                      href="/"
                      class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                      aria-label="Sign up"
                      title="Sign up"
                    >
                      Sign up
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          --> 
            </div>
        </div>
    </div>
</div> --}}

<header class="w-full fixed top-0 z-50">
    <p class="h-10 flex items-center justify-center text-sm  font-light text-white px-4 sm:px-6 lg:px-8"
        style="background-color: #201D48">
        Get free delivery on orders over $100</p>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5" style="background-color: #FFCF00">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="#" class="flex items-center">
                <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-grey-800">The World of
                    Bricks</span>
            </a>

            <div class="flex items-center lg:order-2 divide-x divide-gray-700">
                <span>
                    <a href="#" class="block border-b-4 border-transparent px-4 hover:border-red-700">
                        <button
                            class="py-4 px-1 relative border-2 border-transparent text-gray-800 rounded-full hover:text-gray-400 focus:outline-none focus:text-gray-500 transition duration-150 ease-in-out"
                            aria-label="Cart">
                            <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                            <span class="absolute inset-0 object-right-top -mr-6">
                                <div
                                    class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-semibold leading-4 bg-red-500 text-white">
                                    1
                                </div>
                            </span>
                        </button>
                        <span class="sr-only">Cart</span>
                    </a>
                </span>

                <div class="border-left border-l-2 border-gray-200"></div>

                @auth
                    {{-- <a href="{{ route('profile') }}"
                        class="text-gray-800 bg-primary-700 hover:bg-primary-800 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Mijn
                        profiel</a> --}}
                    <span>
                        <a href="{{ route('profile') }}"
                            class="block border-b-4 border-transparent px-4 hover:border-red-700">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>

                            <span class="sr-only"> Account </span>
                        </a>
                    </span>
                    <a href="{{ route('logout') }}"
                        class="text-gray-200 dark:text-gray-200 bg-red-600 hover:bg-red-500 hover:text-white focus:ring-1 focus:ring-red-400 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-600">Log
                        out</a>
                @endauth
                @guest
                    {{-- <a href="{{ route('login') }}"
                        class="text-gray-200 dark:text-gray-200 bg-red-600 hover:bg-red-500 hover:text-white focus:ring-1 focus:ring-red-400 font-medium rounded text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-600">Log
                        in</a> --}}
                    <span>
                        <a href="{{ route('login') }}"
                            class="block border-b-4 border-transparent px-4 hover:border-red-700">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>

                            <span class="sr-only"> Account </span>
                        </a>
                    </span>
                    {{-- <a href="{{ route('register') }}"
                        class="text-gray-800 bg-primary-700 hover:bg-primary-800 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Registreren</a> --}}
                @endguest
                <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="{{ route('home') }}"
                            class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-red-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('over-ons') }}"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-800 lg:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-red-500 lg:dark:hover:bg-transparent dark:border-gray-700">Over
                            ons</a>
                    </li>
                    <li>
                        <a href="{{ route('verkoop.index') }}"
                            class="block py-2 pr-4 pl-3 tsext-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-800 lg:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-red-500 lg:dark:hover:bg-transparent dark:border-gray-700">Producten</a>
                    </li>
                    <li>
                        <a href="{{ url('https://store.bricklink.com/theworldofbrick&utm_content=globalnav%2523/shop') }}"
                            class="relative block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-800 lg:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-red-500 lg:dark:hover:bg-transparent dark:border-gray-700">Onderdelen
                            <i class="fas fa-external-link-alt w-2 h-2 top-1 absolute"></i></a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-800 lg:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-red-500 lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>
