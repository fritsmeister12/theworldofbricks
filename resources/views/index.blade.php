@extends('components.master')
@section('title', 'Home')
@section('content')
    <div class="p-40 bg-yellow-500 absolute top-0 left-0 w-full" style="background-color: #FFCF00"></div>
    <section class="mx-2 lg:mx-0">
        <div class="grid grid-cols-4 container py-4 lg:py-8 mx-auto">
            <div class="relative rounded col-span-4 lg:h-96 h-56 w-full my-4 flex items-end justify-start text-left bg-cover bg-center"
                style="background-image:url(https://manly.bladecdn.net/wp-content/uploads/2022/11/LEGO-Architecture-Taj-Mahal-21056-uren-bouwplezier-met-fantastich-resultaat.jpg);">
                <div
                    class="absolute rounded-b top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                </div>
                <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                    <a href="#"
                        class="text-xs bg-red-600 text-white rounded px-5 py-2 uppercase hover:bg-white hover:text-indigo-600 transition ease-in-out duration-500">Taj
                        Mahal</a>
                    <div class="text-white font-regular flex flex-col justify-start">
                        <span class="text-3xl leading-0 font-semibold">11</span>
                        <span class="-mt-3">Jan</span>
                    </div>
                </div>
                <main class="p-5 z-10">
                    <h1 class="text-3xl font-semibold text-white lg:text-4xl">Al jouw favoriete Legosets
                        op 1 plek!
                    </h1>
                    <p class="mt-2 text-gray-300">Het platform om de leukste sets
                        maandelijks te ontvangen. Met meer
                        dan 100+ Lego sets in ons assortiment.</p>
                </main>

            </div>

            {{-- <div class="col-span-4 justify-center z-10 my-4 lg:my-6">
                <img class="object-cover w-full h-56 lg:h-96 lg:rounded-xl"
                    src="https://manly.bladecdn.net/wp-content/uploads/2022/11/LEGO-Architecture-Taj-Mahal-21056-uren-bouwplezier-met-fantastich-resultaat.jpg" />
            </div>
            <div class="mx-auto col-span-4 px-4 max-w-lg my-6 lg:px-2">
                <h1 class="text-3xl font-semibold text-gray-800 dark:text-white lg:text-4xl">Al jouw favoriete Legosets
                    <br>op 1
                    plek!
                </h1>
                <p class="mt-6 text-gray-500 dark:text-gray-300">De platform om de leukste sets
                    maandelijks te ontvangen. Met meer
                    dan 100+ Lego sets in ons assortiment.</p>
                <a href=href="{{ route('producten') }}"
                    class="inline-flex items-center justify-center w-full h-12 px-6 my-4 font-medium tracking-wide text-black transition duration-200 rounded shadow-md md:w-auto md:mr-4 md:mb-0 focus:shadow-outline focus:outline-none"
                    style="background-color: #FFCF00">
                    <span class="mr-3">Producten</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-4">
                        <polyline fill="none" stroke="currentColor" stroke-miterlimit="10" points="4,4 22,4 19,14 4,14 ">
                        </polyline>
                        <circle cx="4" cy="22" r="2" stroke-linejoin="miter" stroke-linecap="square"
                            stroke="none" fill="currentColor"></circle>
                        <circle cx="20" cy="22" r="2" stroke-linejoin="miter" stroke-linecap="square"
                            stroke="none" fill="currentColor"></circle>
                        <polyline fill="none" stroke="currentColor" stroke-miterlimit="10"
                            points="1,1 4,4 4,14 2,18 23,18 "></polyline>
                    </svg>
                </a>
                <p class="mt-3 text-sm text-gray-400 ">No credit card required</p>
            </div> --}}
        </div>



    </section>

    {{-- Uitgelicht --}}
    <div class="px-4 md:px-6 2xl:px-0 2xl:mx-auto 2xl:container flex justify-center items-center">
        <div class="flex justify-between items-center w-full">
            <div class="flex flex-col justify-start items-start">
                <p class="text-sm leading-none text-gray-600 dark:text-gray-300">Lego - Verkoop</p>
                <div class="mt-2 flex flex-row justify-end items-center space-x-3">
                    <p class="text-2xl font-semibold leading-normal text-gray-800 dark:text-white">Uitgelicht</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider main container -->
    <div class="swiper mx-auto w-full px-2 py-4">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach ($data as $key => $product)
                @if ($product->spotlight == 'uitgelicht')
                    <div tabindex="0" class="focus:outline-none w-72 swiper-slide xl:mb-0 mb-8">
                        <div>
                            <img alt="person capturing an image"
                                src="{{ url('http://back-lego.test/storage/images/products/' . $product->image_thumbnail) }}"
                                tabindex="0" class="focus:outline-none object-cover rounded-t w-full h-44" />
                        </div>
                        <div class="bg-gray-100 shadow-lg rounded-b dark:bg-slate-700">
                            <div class="p-4">
                                <div class="flex items-center">
                                    <h2 tabindex="0" class="focus:outline-none text-lg dark:text-white font-semibold">
                                        {{ $product->name }}
                                    </h2>
                                </div>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 dark:text-gray-200 mt-2">
                                    {{ Str::limit($product->description, 150) }}</p>
                                <div class="flex mt-4">
                                    <div>
                                        <p tabindex="0"
                                            class="focus:outline-none text-xs text-gray-600 rounded dark:text-gray-200 px-2 bg-gray-300 dark:bg-slate-600 py-1">
                                            {{ $product->category }}</p>
                                    </div>
                                    <div class="pl-2">
                                        <p tabindex="0"
                                            class="focus:outline-none text-xs text-gray-600 rounded dark:text-gray-200 px-2 bg-gray-300 dark:bg-slate-600 py-1">
                                            {{ $product->bricks_amount }} Blokjes</p>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between py-4">
                                    <h2 tabindex="0" class="focus:outline-none text-yellow-500 text-xs font-semibold">3
                                        Beschikbaar</h2>
                                    <h3 tabindex="0" class="focus:outline-none text-yellow-500 text-xl font-semibold">
                                        €{{ $product->price }}
                                    </h3>
                                </div>
                                @if ($product->sellable = 1)
                                    <a href="{{ route('producten-show', [$product->category, $product->id]) }}"
                                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-black bg-yellow-500 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" class="w-4">
                                                <polyline fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                    points="4,4 22,4 19,14 4,14 "></polyline>
                                                <circle cx="4" cy="22" r="2" stroke-linejoin="miter"
                                                    stroke-linecap="square" stroke="none" fill="currentColor"></circle>
                                                <circle cx="20" cy="22" r="2" stroke-linejoin="miter"
                                                    stroke-linecap="square" stroke="none" fill="currentColor"></circle>
                                                <polyline fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                    points="1,1 4,4 4,14 2,18 23,18 "></polyline>
                                            </svg>
                                        </span>
                                        Kopen
                                    </a>
                                @else
                                    <a href="{{ route('producten.show', $product->id) }}"
                                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-yellow-500 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                            <svg class="h-5 w-5 text-gray-700 group-hover:text-gray-900"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                        Huren
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{-- <a href="#"
                        class="block rounded-lg p-4 bg-gray-100/75 swiper-slide shadow-lg shadow-indigo-900/10">
                        <img alt="Home"
                            src="{{ url('http://back-lego.test/storage/images/products/' . $product->image_thumbnail) }}"
                            class="h-56 w-full rounded-md object-cover" />

                        <div class="mt-2">
                            <dl>
                                <div>
                                    <dt class="sr-only">Prijs</dt>

                                    <dd class="text-sm text-gray-500">€{{ $product->price }} - {{ $product->available }}
                                    </dd>
                                </div>

                                <div>
                                    <dt class="sr-only">Naam</dt>

                                    <dd class="font-medium">{{ $product->name }}</dd>
                                </div>
                            </dl>

                            <div class="mt-4 flex items-center gap-2 text-xs">
                                <div class="sm:inline-flex sm:shrink-0 sm:items-center">
                                    <svg class="h-4 w-4 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                                    </svg>

                                    <div class="mt-1.5 sm:ml-3 sm:mt-0">
                                        <p class="text-gray-500">Steentjes</p>

                                        <p class="font-medium">{{ $product->bricks_amount }}</p>
                                    </div>
                                </div>

                                <div class="sm:inline-flex sm:shrink-0 sm:items-center">
                                    <svg class="h-4 w-4 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                    </svg>

                                    <div class="mt-1.5 sm:ml-3 sm:mt-0">
                                        <p class="text-gray-500">Setnummer</p>

                                        <p class="font-medium">#12345</p>
                                    </div>
                                </div>

                                <div class="sm:inline-flex sm:shrink-0 sm:items-center">
                                    <svg class="h-4 w-4 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                    </svg>

                                    <div class="mt-1.5 sm:ml-3 sm:mt-0">
                                        <p class="text-gray-500">Leeftijd</p>

                                        <p class="font-medium">18+</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a> --}}
                @endif
            @endforeach
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev text-gray-500 opacity-20 hover:opacity-100 ml-2"></div>
        <div class="swiper-button-next text-gray-500 opacity-20 hover:opacity-100 mr-2"></div>
    </div>

    {{-- <section class="m-8 mb-16 dark:bg-gray-800 dark:text-gray-100">
        <div class="container mx-auto p-4 my-6 space-y-2 text-center">
            <h2 class="text-5xl font-bold">Waarom ons?</h2>
            <p class="dark:text-gray-400">Libero minima optio qui</p>
        </div>
        <div class="container mx-auto grid justify-center gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <div class="flex flex-col items-center p-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="w-8 h-8 dark:text-yellow-400">
                    <path fill-rule="evenodd"
                        d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                        clip-rule="evenodd"></path>
                </svg>
                <h3 class="my-3 text-3xl font-semibold">Producten</h3>
                <div class="space-y-1 leading-tight">
                    <p>Similique quas ea veniam</p>
                    <p>Tempore quasi porro</p>
                    <p>Blanditiis aut mollitia ex</p>
                </div>
            </div>
            <div class="flex flex-col items-center p-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="w-8 h-8 dark:text-yellow-400">
                    <path fill-rule="evenodd"
                        d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                        clip-rule="evenodd"></path>
                </svg>
                <h3 class="my-3 text-3xl font-semibold">Bezorgen</h3>
                <div class="space-y-1 leading-tight">
                    <p>Similique quas ea veniam</p>
                    <p>Tempore quasi porro</p>
                    <p>Blanditiis aut mollitia ex</p>
                </div>
            </div>
            <div class="flex flex-col items-center p-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="w-8 h-8 dark:text-yellow-400">
                    <path fill-rule="evenodd"
                        d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                        clip-rule="evenodd"></path>
                </svg>
                <h3 class="my-3 text-3xl font-semibold">Service</h3>
                <div class="space-y-1 leading-tight">
                    <p>Similique quas ea veniam</p>
                    <p>Tempore quasi porro</p>
                    <p>Blanditiis aut mollitia ex</p>
                </div>
            </div>
        </div>
    </section> --}}

    <section
        class="overflow-hidden mx-2 lg:mx-0 rounded h-full mb-8 lg:my-8 bg-[url(http://back-lego.test/storage/images/products/tajmahal.jpg)] bg-cover bg-no-repeat"
        style="background-position: 100% 70%;transform: rotateY(180deg);">
        <div class="bg-black/25 p-8 md:p-12 lg:px4 lg:py-12" style="transform: rotateY(-180deg);">
            <div class="max-w-xl text-center sm:text-left">

                <h2 class="text-2xl max-w-xl font-bold text-white sm:text-3xl md:text-5xl">
                    Nieuw in ons assortiment, de Taj Mahal!
                </h2>

                <p class="hidden max-w-xl text-white/90 md:mt-6 md:block md:text-lg md:leading-relaxed">
                    Wil jij de eeuwen oude tempel uit India bouwen? Leer meer over de Taj Mahal en haal veel plezier uit het
                    bouwen.
                </p>

                <div class="mt-4 sm:mt-8">
                    <a href="#"
                        class="inline-flex items-center rounded-full bg-red-600 px-8 py-3 text-white shadow-lg transition hover:bg-indigo-600 focus:outline-none focus:ring">
                        <span class="text-sm font-medium"> Bekijk het hier </span>

                        <svg class="ml-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>



    {{-- Uitgelicht --}}
    <div class="px-4 md:px-6 2xl:px-0 2xl:mx-auto 2xl:container flex justify-center items-center">
        <div class="flex justify-between items-center w-full">
            <div class="flex flex-col justify-start items-start">
                <p class="text-sm leading-none text-gray-600 dark:text-gray-300">Lego - Verkoop</p>
                <div class="mt-2 flex flex-row justify-end items-center space-x-3">
                    <p class="text-2xl font-semibold leading-normal text-gray-800 dark:text-white">Nieuw Binnen</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider main container -->
    <div class="swiper mx-auto w-full px-2 py-4 mb-12">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach ($data as $key => $product)
                @if ($product->spotlight == 'nieuw')
                    <div tabindex="0" class="focus:outline-none w-72 swiper-slide xl:mb-0 mb-8">
                        <div>
                            <img alt="person capturing an image"
                                src="{{ url('http://back-lego.test/storage/images/products/' . $product->image_thumbnail) }}"
                                tabindex="0" class="focus:outline-none object-cover rounded-t w-full h-44" />
                        </div>
                        <div class="bg-gray-100 shadow-lg rounded-b dark:bg-slate-700">
                            <div class="p-4">
                                <div class="flex items-center">
                                    <h2 tabindex="0" class="focus:outline-none text-lg dark:text-white font-semibold">
                                        {{ $product->name }}
                                    </h2>
                                </div>
                                <p tabindex="0"
                                    class="focus:outline-none text-xs text-gray-600 dark:text-gray-200 mt-2">
                                    {{ Str::limit($product->description, 150) }}</p>
                                <div class="flex mt-4">
                                    <div>
                                        <p tabindex="0"
                                            class="focus:outline-none text-xs text-gray-600 rounded dark:text-gray-200 px-2 bg-gray-300 dark:bg-slate-600 py-1">
                                            {{ $product->category }}</p>
                                    </div>
                                    <div class="pl-2">
                                        <p tabindex="0"
                                            class="focus:outline-none text-xs text-gray-600 rounded dark:text-gray-200 px-2 bg-gray-300 dark:bg-slate-600 py-1">
                                            {{ $product->bricks_amount }} Blokjes</p>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between py-4">
                                    <h2 tabindex="0" class="focus:outline-none text-yellow-500 text-xs font-semibold">3
                                        Beschikbaar</h2>
                                    <h3 tabindex="0" class="focus:outline-none text-yellow-500 text-xl font-semibold">
                                        €{{ $product->price }}
                                    </h3>
                                </div>
                                <a href="{{ route('producten-show', [$product->category, $product->id]) }}"
                                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-black bg-yellow-500 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-4">
                                            <polyline fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                points="4,4 22,4 19,14 4,14 "></polyline>
                                            <circle cx="4" cy="22" r="2" stroke-linejoin="miter"
                                                stroke-linecap="square" stroke="none" fill="currentColor"></circle>
                                            <circle cx="20" cy="22" r="2" stroke-linejoin="miter"
                                                stroke-linecap="square" stroke="none" fill="currentColor"></circle>
                                            <polyline fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                points="1,1 4,4 4,14 2,18 23,18 "></polyline>
                                        </svg>
                                    </span>
                                    Kopen
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev text-gray-500 opacity-20 hover:opacity-100 ml-2"></div>
        <div class="swiper-button-next text-gray-500 opacity-20 hover:opacity-100 mr-2"></div>
    </div>

    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            spaceBetween: 30,
            loop: true,
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // when window width is >= 480px
                480: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                // when window width is >= 640px
                960: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                // when window width is >= 640px
                1340: {
                    slidesPerView: 4,
                    spaceBetween: 25
                }
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
@endsection
