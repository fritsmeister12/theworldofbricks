<script>
    const mdOptionsToggle = () => {
        document.getElementById("md-searchbar").classList.toggle("hidden");
        document.getElementById("md-searchbar").classList.toggle("flex");
    };

    function showOrHideDiv() {
        var v = document.getElementById("mobile-menu");
        if (v.style.display === "none") {
            v.style.display = "block";
        } else {
            v.style.display = "none";
        }
    }
</script>

{{-- New Navbar --}}
<header class="w-full fixed top-0 z-40">
    <p class="h-10 flex items-center justify-center text-sm  font-light text-white px-4 sm:px-6 lg:px-8"
        style="background-color: #201D48">
        Get free delivery on orders over $100</p>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5" style="background-color: #FFCF00">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="#" class="flex items-center">
                {{-- <img src="../../../../images/logo.png" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" /> --}}
                <span class="self-center text-lg font-semibold whitespace-nowrap dark:text-grey-800">The World of
                    Bricks</span>
            </a>

            <div class="flex items-center lg:order-2">
                <span>
                    <a href="{{ route('winkelmandje') }}" class="block px-4">
                        <button class="py-4 px-1 relative  border-transparent text-gray-800 rounded-full"
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
                                    {{ count((array) session('cart')) }}
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
                    <span class="lg:block hidden">
                        <a href="{{ route('profile') }}" class="block px-4">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>

                            <span class="sr-only"> Account </span>
                        </a>
                    </span>
                    <a href="{{ route('logout') }}"
                        class="lg:block hidden text-gray-200 dark:text-gray-200 bg-red-600 hover:bg-red-500 hover:text-white focus:ring-1 focus:ring-red-400 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-600">Log
                        out</a>
                @endauth
                @guest
                    {{-- <a href="{{ route('login') }}"
                        class="text-gray-200 dark:text-gray-200 bg-red-600 hover:bg-red-500 hover:text-white focus:ring-1 focus:ring-red-400 font-medium rounded text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-600">Log
                        in</a> --}}
                    <span>
                        <a href="{{ route('login') }}" class="px-4 hidden lg:block text-gray-800 hover:text-gray-600">
                            <svg class="h-6 w-6 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>

                            <span class="sr-only"> Account </span>
                        </a>
                    </span>
                    {{-- <a href="{{ route('register') }}"
                        class="text-gray-800 bg-primary-700 hover:bg-primary-800 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Registreren</a> --}}
                @endguest
                <button type="button" onclick="showOrHideDiv()"
                    class="inline-flex items-center px-2 ml-1 text-sm text-gray-800 lg:hidden dark:text-gray-600">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6 text-gray-800" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
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
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="{{ route('home') }}"
                            class="block py-2 pr-4 pl-3 text-gray-700 hover:text-red-600 rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-red-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('producten') }}"
                            class="block py-2 pr-4 pl-3 text-gray-700 hover:text-red-600 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-800 lg:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-red-500 lg:dark:hover:bg-transparent dark:border-gray-700">Producten</a>
                    </li>
                    <li>
                        <a href="{{ url('https://store.bricklink.com/theworldofbrick&utm_content=globalnav%2523/shop') }}"
                            class="relative block py-2 pr-4 pl-3 text-gray-700 hover:text-red-600 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-800 lg:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-red-500 lg:dark:hover:bg-transparent dark:border-gray-700">Onderdelen
                            <i class="fas fa-external-link-alt w-2 h-2 top-1 absolute"></i></a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}"
                            class="block py-2 pr-4 pl-3 text-gray-700 hover:text-red-600 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-800 lg:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-red-500 lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                    <li>
                        <a href="{{ route('over-ons') }}"
                            class="block py-2 pr-4 pl-3 text-gray-700 hover:text-red-600 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-800 lg:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-red-500 lg:dark:hover:bg-transparent dark:border-gray-700">Over
                            ons</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>
