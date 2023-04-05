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
                    <div tabindex="0" class="focus:outline-none mx-2 mb-4 swiper-slide cursor-pointer" onclick="location.href='{{ route('producten-show', [$product->category, $product->id]) }}';">
                        <div class="w-full max-w-sm bg-white hover:shadow-inner transition border border-slate-50 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                @if ($product->images != null)
                                    @foreach (json_decode($product->images) as $item)
                                        @if (str_contains($item, '_thumbnail'))
                                            <img alt="person capturing an image"
                                                src="{{ url(env('BRICK_CENTRE_IMAGE_URL') . $item) }}"
                                                tabindex="0"
                                                class="focus:outline-none object-contain w-full h-44 p-1 rounded-t" />
                                        @endif
                                    @endforeach
                                @endif
                            </a>
                            <h1 class="text-3xl px-5 mt-2 font-bold text-gray-900 dark:text-white">€{{ $product->price }}</h1>
                            <div class="flex items-center px-5 mt-2 mb-4">
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Second star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Third star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <span class="bg-yellow-200 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-800 ml-3">5.0</span>
                            </div>
                            <div class="px-5 mb-4">
                                <a href="#">
                                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                        {{ $product->name }}</h5>
                                </a>
                                <div class="flex items-center mt-2 mb-4">
                                    <p tabindex="0"
                                        class="focus:outline-none text-xs text-gray-600 dark:text-gray-200 h-4">
                                        {{ Str::limit($product->description, 40) }}</p>
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <a href="#" class="col-span-1 text-white bg-yellow-400 hover:bg-yellow-500 transition focus:ring-4 focus:outline-none focus:ring-yellow-400 font-medium rounded text-sm px-2 py-2.5 text-center dark:bg-yellow-400 dark:hover:bg-yellow-400 dark:focus:ring-yellow-400">Lees meer</a>
                                    <a href="#" class="col-span-1 text-yellow-400 border hover:text-white border-yellow-400 hover:bg-yellow-400 transition focus:ring-4 focus:outline-none focus:ring-yellow-400 font-medium rounded text-sm px-2 py-2.5 text-center dark:bg-yellow-400 dark:hover:bg-yellow-400 dark:focus:ring-yellow-400">In Winkelwagen</a>
                                </div>
                            </div>
                        </div>
                    </div>

                @endif
            @endforeach
        </div>
        <div class="swiper-pagination"></div>

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
                @if ($product->spotlight == 'uitgelicht')
                    <div tabindex="0" class="focus:outline-none mb-4 swiper-slide cursor-pointer" onclick="location.href='{{ route('producten-show', [$product->category, $product->id]) }}';">
                        <div class="w-full max-w-sm bg-white hover:shadow-inner transition border border-slate-50 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                @if ($product->images != null)
                                    @foreach (json_decode($product->images) as $item)
                                        @if (str_contains($item, '_thumbnail'))
                                            <img alt="person capturing an image"
                                                src="{{ url(env('BRICK_CENTRE_IMAGE_URL') . $item) }}"
                                                tabindex="0"
                                                class="focus:outline-none object-contain w-full h-44 p-1 rounded-t" />
                                        @endif
                                    @endforeach
                                @endif
                            </a>
                            <h1 class="text-3xl px-5 mt-2 font-bold text-gray-900 dark:text-white">€{{ $product->price }}</h1>
                            <div class="flex items-center px-5 mt-2 mb-4">
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Second star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Third star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <span class="bg-yellow-200 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-800 ml-3">5.0</span>
                            </div>
                            <div class="px-5 mb-4">
                                <a href="#">
                                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                        {{ $product->name }}</h5>
                                </a>
                                <div class="flex items-center mt-2 mb-4">
                                    <p tabindex="0"
                                        class="focus:outline-none text-xs text-gray-600 dark:text-gray-200 h-4">
                                        {{ Str::limit($product->description, 40) }}</p>
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <a href="#" class="col-span-1 text-white bg-yellow-400 hover:bg-yellow-500 transition focus:ring-4 focus:outline-none focus:ring-yellow-400 font-medium rounded text-sm px-2 py-2.5 text-center dark:bg-yellow-400 dark:hover:bg-yellow-400 dark:focus:ring-yellow-400">Lees meer</a>
                                    <a href="#" class="col-span-1 text-yellow-400 border hover:text-white border-yellow-400 hover:bg-yellow-400 transition focus:ring-4 focus:outline-none focus:ring-yellow-400 font-medium rounded text-sm px-2 py-2.5 text-center dark:bg-yellow-400 dark:hover:bg-yellow-400 dark:focus:ring-yellow-400">In Winkelwagen</a>
                                </div>
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
                    spaceBetween: 10
                },
                // when window width is >= 480px
                480: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                // when window width is >= 640px
                960: {
                    slidesPerView: 3,
                    spaceBetween: 10
                },
                // when window width is >= 640px
                1340: {
                    slidesPerView: 3,
                    spaceBetween: 10
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
