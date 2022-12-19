@extends('components.master')
@section('title', 'Home')
@section('content')
    {{-- <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-6 lg:py-20">
    <div class="flex flex-col items-center justify-between lg:flex-row">
        <div class="mb-10 lg:max-w-lg lg:pr-5 lg:mb-0">
            <div class="max-w-xl mb-6">
                <div>
                    <p class="inline-block px-3 py-1 mb-4 text-xs font-semibold tracking-wider text-white uppercase rounded-full"
                        style="background-color: #201D48">
                        Welkom
                    </p>
                </div>
                <h2
                    class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl sm:leading-none">
                    Bouw al jouw favoriete<br class="hidden md:block" /> Legosets.
                </h2>
                <p class="text-base text-gray-700 dark:text-gray-300 md:text-lg">
                    De platform om de leukste sets
                    maandelijks te ontvangen. Met meer
                    dan 100+ Lego sets in ons assortiment.
                </p>
            </div>
            <div class="flex flex-col items-center md:flex-row">
                <a href=href="{{ route('verkoop.index') }}"
                    class="inline-flex items-center justify-center w-full h-12 px-6 mb-3 font-medium tracking-wide text-black transition duration-200 rounded shadow-md md:w-auto md:mr-4 md:mb-0 focus:shadow-outline focus:outline-none"
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
            </div>
        </div>
        <div class="relative lg:w-1/2 w-full">
            <img class="object-cover w-full h-56 rounded shadow-lg sm:h-96"
                src="https://images.pexels.com/photos/927022/pexels-photo-927022.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260"
                alt="" />
            <a href="/" aria-label="Play Video"
                class="absolute inset-0 flex items-center justify-center w-full h-full transition-colors duration-300 bg-gray-900 bg-opacity-50 group hover:bg-opacity-25">
                <div
                    class="flex items-center justify-center w-16 h-16 transition duration-300 transform bg-gray-100 rounded-full shadow-2xl group-hover:scale-110">
                    <svg class="w-10 text-gray-900" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M16.53,11.152l-8-5C8.221,5.958,7.833,5.949,7.515,6.125C7.197,6.302,7,6.636,7,7v10 c0,0.364,0.197,0.698,0.515,0.875C7.667,17.958,7.833,18,8,18c0.184,0,0.368-0.051,0.53-0.152l8-5C16.822,12.665,17,12.345,17,12 S16.822,11.335,16.53,11.152z">
                        </path>
                    </svg>
                </div>
            </a>
        </div>
    </div>
    </div> --}}

    <section>
        <div class="container px-6 py-16 mx-auto text-center">
            <div class="max-w-lg mx-auto">
                <h1 class="text-3xl font-semibold text-gray-800 dark:text-white lg:text-4xl">Al jouw favoriete Legosets
                    <br>op 1
                    plek!
                </h1>
                <p class="mt-6 text-gray-500 dark:text-gray-300">De platform om de leukste sets
                    maandelijks te ontvangen. Met meer
                    dan 100+ Lego sets in ons assortiment.</p>
                <a href=href="{{ route('verkoop.index') }}"
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
            </div>

            <div class="flex justify-center mt-10">
                <img class="object-cover w-full h-96 rounded-xl"
                    src="https://manly.bladecdn.net/wp-content/uploads/2022/11/LEGO-Architecture-Taj-Mahal-21056-uren-bouwplezier-met-fantastich-resultaat.jpg" />
            </div>
        </div>
    </section>

    {{-- <div class="container mx-auto md:py-16 pl-4 md:px-6">
        <div class="flex items-strech justify-center flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6 lg:space-x-8">
            <div
                class="flex flex-col md:flex-row items-strech rounded justify-between bg-gray-50 dark:bg-slate-700 py-6 px-6 md:py-12 lg:px-12 md:w-8/12 lg:w-7/12 xl:w-8/12 2xl:w-9/12">
                <div class="flex flex-col justify-center md:w-1/2">
                    <h1 class="text-3xl lg:text-4xl font-semibold text-gray-800 dark:text-white">Welcome Deal</h1>
                    <p class="text-base lg:text-xl text-gray-800 dark:text-white mt-2">Meld je nu aan voor <span
                            class="font-bold">30%</span> korting op je eerste 3 maanden</p>
                </div>
                <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center md:justify-end">
                    <img src="https://i.ibb.co/J2BtZdg/Rectangle-56-1.png" alt="" class="" />
                </div>
            </div>
            <div
                class="md:w-4/12 lg:w-5/12 xl:w-4/12 2xl:w-3/12 rounded bg-gray-50 dark:bg-slate-700 py-6 px-6 md:py-0 md:px-4 lg:px-6 flex flex-col justify-center relative">
                <div class="flex flex-col justify-center">
                    <h1 class="text-3xl lg:text-4xl font-semibold text-gray-800 dark:text-white">Nieuwsbrief</h1>
                    <p class="text-base lg:text-xl w-48 text-gray-800 dark:text-white">Meld je nu aan voor onze <span
                            class="font-bold">nieuwsbrief</span></p>
                </div>
                <div class="flex justify-end md:absolute md:bottom-4 md:right-4 lg:bottom-0 lg:right-0">
                    <img src="https://i.ibb.co/rGfP7mp/Rectangle-59-1.png" alt=""
                        class="md:w-20 md:h-20 lg:w-full lg:h-full" />
                </div>
            </div>
        </div>
    </div> --}}

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
    <div class="swiper mx-auto w-full px-2 py-6">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach ($data as $key => $product)
                @if ($product->available == true)
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
                                    <a href="{{ route('verkoop.show', $product->id) }}"
                                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-black bg-yellow-500 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                            <!-- Heroicon name: solid/lock-closed -->
                                            {{-- <svg class="h-5 w-5 text-gray-700 group-hover:text-gray-900"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                clip-rule="evenodd" />
                                        </svg> --}}
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
                                            <!-- Heroicon name: solid/lock-closed -->
                                            <svg class="h-5 w-5 text-gray-700 group-hover:text-gray-900"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
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
                @endif
            @endforeach
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev text-gray-500 opacity-20 hover:opacity-100 ml-2"></div>
        <div class="swiper-button-next text-gray-500 opacity-20 hover:opacity-100 mr-2"></div>
    </div>

    <section class="m-8 mb-16 dark:bg-gray-800 dark:text-gray-100">
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
    <div class="swiper mx-auto w-full px-2 py-6 mb-12">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach ($data as $key => $product)
                @if ($product->available == true)
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
                                @if ($product->sellable = 1)
                                    <a href="{{ route('verkoop.show', $product->id) }}"
                                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-black bg-yellow-500 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                            <!-- Heroicon name: solid/lock-closed -->
                                            {{-- <svg class="h-5 w-5 text-gray-700 group-hover:text-gray-900"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                clip-rule="evenodd" />
                                        </svg> --}}
                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                class="w-4">
                                                <polyline fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                    points="4,4 22,4 19,14 4,14 "></polyline>
                                                <circle cx="4" cy="22" r="2"
                                                    stroke-linejoin="miter" stroke-linecap="square" stroke="none"
                                                    fill="currentColor"></circle>
                                                <circle cx="20" cy="22" r="2"
                                                    stroke-linejoin="miter" stroke-linecap="square" stroke="none"
                                                    fill="currentColor"></circle>
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
                                            <!-- Heroicon name: solid/lock-closed -->
                                            <svg class="h-5 w-5 text-gray-700 group-hover:text-gray-900"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
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
                @endif
            @endforeach
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev text-gray-500 opacity-20 hover:opacity-100 ml-2"></div>
        <div class="swiper-button-next text-gray-500 opacity-20 hover:opacity-100 mr-2"></div>
    </div>
    @include('components.highlights')

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
