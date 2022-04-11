{{-- <div class="relative shadow-lg">
    <!-- For md screen size -->
    <div id="md-searchbar" class="bg-white dark:bg-gray-900 hidden lg:hidden py-5 px-6 items-center justify-between">
        <div class="flex items-center space-x-3 text-gray-800 dark:text-white">
            <div>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2.svg"
                    alt="search">
                <img class="dark:block hidden"
                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2dark.svg" alt="search">
            </div>
            <input type="text" placeholder="Search for products"
                class="text-sm leading-none dark:text-gray-300 dark:bg-gray-900 text-gray-600 focus:outline-none" />
        </div>
        <div class="space-x-6">
            <button aria-label="go to cart"
                class="text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800">
                <img class="w-5 dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4.svg"
                    alt="bag">
                <img class="w-5 dark:block hidden"
                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4dark.svg" alt="bag">
            </button>
        </div>
    </div>
    <!-- For md screen size -->

    <!-- For large screens -->
    <div class="dark:bg-gray-900 bg-gray-50 px-6 py-9">
        <div class="container mx-auto flex items-center justify-between">
            <h1 class="md:w-2/12 cursor-pointer font-bold text-gray-800 dark:text-yellow-500" aria-label="the Crib.">
                <span class="dark:text-white text-yellow-500">The World of </span>Bricks
            </h1>
            <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">
                <li>
                    <a href="javascript:void(0)"
                        class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">Home</a>
                </li>

                <li>
                    <a href="{{ route('products.index') }}"
                        class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">Producten</a>
                </li>

                <li>
                    <a href="javascript:void(0)"
                        class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">Prijzen</a>
                </li>
                <li>
                    <a href="javascript:void(0)"
                        class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">Over
                        Ons</a>
                </li>
                <li>
                    <a href="javascript:void(0)"
                        class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">Contact</a>
                </li>
            </ul>

            <div class="md:w-2/12 justify-end flex items-center space-x-4 xl:space-x-8">
                <div class="hidden lg:flex items-center">
                    <button onclick="toggleSearch()" aria-label="search items"
                        class="w-5 text-gray-800 dark:hover:text-gray-300 dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800">
                        <img class="transform rotate-90 dark:hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2.svg" alt="search">
                        <img class="transform rotate-90 dark:block hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2dark.svg" alt="search">
                    </button>
                    <input id="searchInput" type="text" placeholder="search"
                        class="hidden text-sm dark:bg-white dark:placeholder-gray-300 text-gray-600 rounded ml-1 border border-transparent focus:outline-none focus:border-gray-400 px-1" />
                </div>
                <div class="hidden lg:flex items-center space-x-4 xl:space-x-8">
                    <button aria-label="go to cart"
                        class="w-6 text-gray-800 dark:hover:text-gray-300 dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800">
                        <img class=" dark:hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4.svg" alt="bag">
                        <img class=" dark:block hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4dark.svg" alt="bag">
                    </button>
                </div>

                <div class="flex lg:hidden">
                    <button aria-label="show options" onclick="mdOptionsToggle()"
                        class="text-black dark:text-white dark:hover:text-gray-300 hidden md:flex focus:outline-none focus:ring-2 rounded focus:ring-gray-600">
                        <img class=" dark:hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg5.svg" alt="toggler">
                        <img class=" dark:block hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg5dark.svg" alt="toggler">
                    </button>

                    <button aria-label="open menu" onclick="openMenu()"
                        class="text-black dark:text-white dark:hover:text-gray-300 md:hidden focus:outline-none focus:ring-2 rounded focus:ring-gray-600">
                        <img class=" dark:hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg5.svg" alt="toggler">
                        <img class=" dark:block hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg5dark.svg" alt="toggler">
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- For small screen -->
    <div id="mobile-menu"
        class="hidden absolute dark:bg-gray-900 z-10 inset-0 md:hidden bg-white flex flex-col h-screen w-full">
        <div class="flex items-center justify-between border-b border-gray-200 dark:border-gray-700 pb-4 p-4">
            <div class="flex items-center space-x-3">
                <div>
                    <img class="dark:hidden"
                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2.svg" alt="search">
                    <img class="dark:block hidden"
                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2dark.svg" alt="search">
                </div>
                <input type="text" placeholder="Search for products"
                    class="text-sm dark:bg-gray-900 text-gray-600 placeholder-gray-600 dark:placeholder-gray-300 focus:outline-none" />
            </div>

            <button onclick="closeMenu()" aria-label="close menu"
                class="focus:outline-none focus:ring-2 rounded focus:ring-gray-600">
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg6.svg"
                    alt="cross">
                <img class="dark:block hidden"
                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg6dark.svg" alt="cross">
            </button>
        </div>
        <div class="mt-6 p-4">
            <ul class="flex flex-col space-y-6">
                <li>
                    <a href="javascript:void(0)"
                        class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800">
                        Home
                        <div>
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg" alt="arrow">
                            <img class="dark:block hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg"
                                alt="arrow">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)"
                        class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800">
                        Furniture
                        <div>
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg" alt="arrow">
                            <img class="dark:block hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg"
                                alt="arrow">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)"
                        class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800">
                        Lookbook
                        <div>
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg" alt="arrow">
                            <img class="dark:block hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg"
                                alt="arrow">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)"
                        class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800">
                        Support
                        <div>
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg" alt="arrow">
                            <img class="dark:block hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg"
                                alt="arrow">
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="h-full flex items-end">
            <ul class="flex flex-col space-y-8 bg-gray-50 w-full py-10 p-4 dark:bg-gray-800">
                <li>
                    <a href="javascript:void(0)"
                        class="dark:text-white text-gray-800 flex items-center space-x-2 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">
                        <div>
                            <img class="w-5 dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4.svg" alt="bag">
                            <img class="w-5 dark:block hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4dark.svg" alt="bag">
                        </div>
                        <p class="text-base">Cart</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)"
                        class="dark:text-white text-gray-800 flex items-center space-x-2 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">
                        <div>
                            <img class="w-5 dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg3.svg"
                                alt="favourites">
                            <img class="w-5 dark:block hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg3dark.svg"
                                alt="favourites">
                        </div>
                        <p class="text-base">Wishlist</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div> --}}
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

<!--
  This example requires Tailwind CSS v2.0+
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="bg-white dark:bg-gray-500">
    <!--
      Mobile menu
  
      Off-canvas menu for mobile, show/hide based on off-canvas menu state.
    -->
    <div class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true">
        <!--
        Off-canvas menu overlay, show/hide based on off-canvas menu state.
  
        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
        <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>

        <!--
        Off-canvas menu, show/hide based on off-canvas menu state.
  
        Entering: "transition ease-in-out duration-300 transform"
          From: "-translate-x-full"
          To: "translate-x-0"
        Leaving: "transition ease-in-out duration-300 transform"
          From: "translate-x-0"
          To: "-translate-x-full"
      -->
        <div class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col overflow-y-auto">
            <div class="px-4 pt-5 pb-2 flex">
                <button type="button" class="-m-2 p-2 rounded-md inline-flex items-center justify-center text-gray-400">
                    <span class="sr-only">Close menu</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Links -->
            <div class="mt-2">
                <div class="border-b border-gray-200">
                    <div class="-mb-px flex px-4 space-x-8" aria-orientation="horizontal" role="tablist">
                        <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->
                        <button id="tabs-1-tab-1"
                            class="text-gray-900 border-transparent flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium"
                            aria-controls="tabs-1-panel-1" role="tab" type="button">Women</button>

                        <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->
                        <button id="tabs-1-tab-2"
                            class="text-gray-900 border-transparent flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium"
                            aria-controls="tabs-1-panel-2" role="tab" type="button">Men</button>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-200 py-6 px-4 space-y-6">
                <div class="flow-root">
                    <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Company</a>
                </div>

                <div class="flow-root">
                    <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Stores</a>
                </div>
            </div>

            <div class="border-t border-gray-200 py-6 px-4 space-y-6">
                <div class="flow-root">
                    <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Sign in</a>
                </div>
                <div class="flow-root">
                    <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Create account</a>
                </div>
            </div>

            <div class="border-t border-gray-200 py-6 px-4">
                <a href="#" class="-m-2 p-2 flex items-center">
                    <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt=""
                        class="w-5 h-auto block flex-shrink-0">
                    <span class="ml-3 block text-base font-medium text-gray-900"> CAD </span>
                    <span class="sr-only">, change currency</span>
                </a>
            </div>
        </div>
    </div>

    <header class="relative bg-white dark:bg-yellow-500">
        <p
            class="bg-blue-600 h-10 flex items-center justify-center text-sm font-medium text-white px-4 sm:px-6 lg:px-8">
            Get free delivery on orders over $100</p>

        <nav aria-label="Top" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="border-b border-gray-200 dark:border-yellow-500">
                <div class="h-16 flex items-center">
                    <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                    <button type="button" class="bg-white p-2 rounded-md text-gray-400 lg:hidden">
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>

                    <!-- Logo -->
                    <div class="ml-4 flex lg:ml-0">
                        <a href="/">
                            <span class="sr-only">Workflow</span>
                            <img class="h-8 w-auto"
                                src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="">
                        </a>
                    </div>

                    <!-- Flyout menus -->
                    <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                        <div class="h-full flex space-x-8">
                            <a href="{{ route('home') }}"
                                class="flex items-center text-sm font-medium text-gray-700 dark:text-white hover:text-gray-800">Home</a>

                            <a href="{{ route('products.index') }}"
                                class="flex items-center text-sm font-medium text-gray-700 dark:text-white hover:text-gray-800">Producten</a>

                            <a href="{{ route('prijzen') }}"
                                class="flex items-center text-sm font-medium text-gray-700 dark:text-white hover:text-gray-800">Prijzen</a>

                            <a href="{{ route('over-ons') }}"
                                class="flex items-center text-sm font-medium text-gray-700 dark:text-white hover:text-gray-800">Over
                                Ons</a>

                            <a href="{{ route('contact') }}"
                                class="flex items-center text-sm font-medium text-gray-700 dark:text-white hover:text-gray-800">Contact</a>
                        </div>
                    </div>

                    <div class="ml-auto flex items-center">
                        @auth
                            <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                                <a href="{{ route('profile') }}"
                                    class="text-sm font-medium text-gray-700 dark:text-white hover:text-gray-800">Mijn
                                    account</a>
                                <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                                <a href="{{ route('register') }}"
                                    class="text-sm font-medium text-gray-700 dark:text-white hover:text-gray-800">Log
                                    uit</a>
                            </div>
                        @endauth
                        @guest
                            <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                                <a href="{{ route('login') }}"
                                    class="text-sm font-medium text-gray-700 dark:text-white hover:text-gray-800">Sign
                                    in</a>
                                <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                                <a href="{{ route('register') }}"
                                    class="text-sm font-medium text-gray-700 dark:text-white hover:text-gray-800">Create
                                    account</a>
                            </div>
                        @endguest

                        <!-- Search -->
                        <div class="flex lg:ml-6">
                            <button onclick="toggleSearch()" aria-label="search items"
                                class="p-2 text-white hover:text-gray-500">
                                <span class="sr-only">Search</span>
                                <!-- Heroicon name: outline/search -->
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                            <input id="searchInput" type="text" placeholder="search"
                                class="hidden text-sm dark:bg-white dark:placeholder-gray-300 text-gray-600 rounded ml-1 border border-transparent focus:outline-none focus:border-gray-400 px-1" />
                        </div>

                        <!-- Cart -->
                        <div class="ml-4 flow-root lg:ml-6">
                            <a href="#" class="group -m-2 p-2 flex items-center">
                                <!-- Heroicon name: outline/shopping-bag -->
                                <svg class="flex-shrink-0 h-6 w-6 text-white group-hover:text-gray-500"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                                <span class="ml-2 text-sm font-medium text-white group-hover:text-gray-800">0</span>
                                <span class="sr-only">items in cart, view bag</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>
