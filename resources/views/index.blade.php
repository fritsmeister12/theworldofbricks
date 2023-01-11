@extends('components.master')
@section('title', 'Home')
@section('content')
    <div class="p-40 bg-yellow-500 absolute top-0 left-0 w-full" style="background-color: #FFCF00"></div>
    <section>
        <div class="grid grid-cols-4 container lg:py-8 mx-auto">
            <div class="col-span-4 justify-center z-10 my-4 lg:my-6">
                <img class="object-cover w-full h-56 lg:h-96 lg:rounded-xl"
                    src="https://manly.bladecdn.net/wp-content/uploads/2022/11/LEGO-Architecture-Taj-Mahal-21056-uren-bouwplezier-met-fantastich-resultaat.jpg" />
            </div>
            <div class="mx-auto text-center col-span-4 px-4 max-w-lg my-6 lg:px-2">
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
            </div>
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
                                    <a href="{{ route('producten-show', [$product->category, $product->id]) }}"
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
