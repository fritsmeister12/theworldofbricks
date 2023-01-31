@extends('components.master')
@section('title', 'Product')
@section('content')
    <form action="{{ route('pay') }}">
        @csrf
        <input type="hidden" name="prod_id" value="{{ $product->prod_id }}">
        <div class="pt-12">
            <div class="flex items-center px-6 overflow-y-auto whitespace-nowrap">
                <a href="#" class="text-gray-600 dark:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                </a>

                <span class="mx-5 text-gray-500 dark:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </span>

                <a href="#" class="text-gray-600 dark:text-gray-200 hover:underline">
                    Verkoop
                </a>

                <span class="mx-5 text-gray-500 dark:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </span>

                <a href="#" class="text-gray-600 dark:text-gray-200 hover:underline">
                    {{ $product->name }}
                </a>
            </div>

            <section>
                <div class="relative max-w-screen-xl px-4 py-8 mx-auto">
                    <div class="grid items-start grid-cols-1 gap-8 md:grid-cols-2">
                        <div class="grid grid-cols-2 gap-4 md:grid-cols-1">
                            @foreach (json_decode($product->images) as $item)
                                @if (str_contains($item, '_thumbnail'))
                                    <img alt="person capturing an image"
                                        src="{{ url('http://back-lego.test/image/' . $item) }}" tabindex="0"
                                        class="object-contain w-full aspect-square rounded-xl" />
                                @endif
                            @endforeach


                            <div class="grid grid-cols-2 gap-4 lg:mt-4">
                                @php
                                    $i = 0;
                                @endphp
                                @foreach (json_decode($product->images) as $item)
                                    @if (!str_contains($item, '_thumbnail'))
                                        @php
                                            if ($i == 2) {
                                                break;
                                            }
                                            
                                        @endphp
                                        <img alt="person capturing an image"
                                            src="{{ url('http://back-lego.test/image/' . $item) }}" tabindex="0"
                                            class="object-contain w-full aspect-square rounded-xl" />
                                        @php
                                            $i++;
                                        @endphp
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        <div class="sticky top-36">
                            <strong
                                class="rounded-full border border-green-600 bg-green-600 px-3 py-0.5 text-xs font-medium tracking-wide text-white">
                                {{ $product->voorraad }}
                            </strong>
                            <div class="flex justify-between mt-8">
                                <div class="max-w-[35ch]">
                                    <h1 class="text-2xl dark:text-white font-bold">
                                        {{ $product->name }}
                                    </h1>

                                    <p class="mt-0.5 dark:text-gray-200 text-sm">{{ $product->category }}</p>

                                    {{-- <div class="mt-2 -ml-0.5 flex">
                                        <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <svg class="w-5 h-5 text-gray-200" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div> --}}
                                </div>

                                <p class="text-5xl text-yellow-400 font-bold">€{{ $product->price }}</p>
                            </div>

                            <details class="group relative my-4">
                                <summary class="block">
                                    <div>
                                        <div class="max-w-none dark:text-gray-300">
                                            <p>
                                                {{ $product->description }}
                                            </p>
                                        </div>
                                    </div>
                                </summary>
                            </details>

                            <form class="mt-8">
                                <fieldset>
                                    <legend class="mb-1 text-sm dark:text-white font-medium">Specificaties</legend>
                                    <div class="flow-root lg:w-3/4">
                                        <div class="-m-0.5 flex flex-wrap">
                                            <label for="color_tt" class="p-0.5">
                                                <input type="radio" name="color" id="color_tt" class="sr-only" />

                                                <span
                                                    class="inline-block px-3 py-1 text-white text-xs bg-red-600 border-red-600 font-medium border rounded group">
                                                    Productnummer: #{{ $product->set_number }}
                                                </span>
                                            </label>

                                            <label for="color_fr" class="p-0.5">
                                                <input type="radio" name="color" id="color_fr" class="sr-only" />

                                                <span
                                                    class="inline-block px-3 py-1 text-xs font-medium border text-white bg-red-600 border-red-600 rounded group">
                                                    Aantal Blokjes: {{ $product->bricks_amount }}
                                                </span>
                                            </label>

                                            <div class="p-0.5">
                                                <span
                                                    class="inline-block px-3 py-1 text-xs font-medium text-white border-red-600 bg-red-600 border rounded group">
                                                    Lengte:
                                                    {{ $product->length }}
                                                    cm
                                                </span>
                                            </div>
                                            <div class="p-0.5">
                                                <span
                                                    class="inline-block px-3 py-1 text-xs text-white border-red-600 bg-red-600 font-medium border rounded group">
                                                    Breedte: {{ $product->width }} cm
                                                </span>
                                            </div>
                                            <div class="p-0.5">
                                                <span
                                                    class="inline-block px-3 py-1 text-xs text-white bg-red-600 border-red-600 font-medium border rounded group">
                                                    Hoogte: {{ $product->height }}
                                                    cm
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>

                            <div class="flex mt-6 space-x-2 text-center border-b border-gray-200 pb-6">
                                <a href="{{ url('winkelmandje/' . $product->id) }}"
                                    class="block px-5 py-3 w-full text-xs font-medium text-white bg-yellow-500 rounded hover:bg-yellow-600">
                                    In Winkelmand</a>
                            </div>

                            <div class="mt-4">
                                <ul>
                                    <li class="mb-2 dark:text-white">
                                        <i class="fas fa-check-circle text-red-600"></i>
                                        <span class="font-bold text-red-600">Gratis verzending</span> in Nederland en
                                        België.
                                    </li>
                                    <li class="mb-2 dark:text-white">
                                        <i class="fas fa-check-circle text-red-600"></i>
                                        Bezorging waar en wanneer je wilt.
                                        Thuisbezorgd of afhalen op 2400 locaties.
                                    </li>
                                    <li class="mb-2 dark:text-white">
                                        <i class="fas fa-check-circle text-red-600"></i>
                                        Gemakkelijk betalen met iDeal.
                                    </li>
                                    <li class="mb-2 dark:text-white">
                                        <i class="fas fa-check-circle text-red-600"></i>
                                        Klanten waarderen ons met een 9.5
                                        op basis van 3915 onafhankelijke reviews.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-white dark:bg-gray-900">
                <div class="pt-2 pb-8 px-4 mx-auto max-w-screen-xl lg:px-6">
                    <div class="mx-auto lg:mb-4 mb-2">
                        <h2 class="mb-1 text-xl lg:text-2xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                            Bekijk Ook</h2>
                        <p class="font-light text-gray-500 sm:text-md dark:text-gray-400">Bekijk hier andere populaire
                            sets!</p>
                    </div>
                    <div class="swiper mx-auto w-full px-2 py-4">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            @foreach ($data as $key => $product)
                                {{-- <div tabindex="0" class="focus:outline-none w-72 swiper-slide xl:mb-0 mb-8">
                                        <div>
                                            <img alt="person capturing an image"
                                                src="{{ url('http://back-lego.test/storage/images/products/' . $product->image_thumbnail) }}"
                                                tabindex="0"
                                                class="focus:outline-none object-cover rounded-t w-full h-44" />
                                        </div>
                                        <div class="bg-gray-100 shadow-lg rounded-b dark:bg-slate-700">
                                            <div class="p-4">
                                                <div class="flex items-center">
                                                    <h2 tabindex="0"
                                                        class="focus:outline-none text-lg dark:text-white font-semibold">
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
                                                    <h2 tabindex="0"
                                                        class="focus:outline-none text-yellow-500 text-xs font-semibold">3
                                                        Beschikbaar</h2>
                                                    <h3 tabindex="0"
                                                        class="focus:outline-none text-yellow-500 text-xl font-semibold">
                                                        €{{ $product->price }}
                                                    </h3>
                                                </div>
                                                @if ($product->sellable = 1)
                                                    <a href="{{ route('producten-show', [$product->category, $product->id]) }}"
                                                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-black bg-yellow-500 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" class="w-4">
                                                                <polyline fill="none" stroke="currentColor"
                                                                    stroke-miterlimit="10" points="4,4 22,4 19,14 4,14 ">
                                                                </polyline>
                                                                <circle cx="4" cy="22" r="2"
                                                                    stroke-linejoin="miter" stroke-linecap="square"
                                                                    stroke="none" fill="currentColor"></circle>
                                                                <circle cx="20" cy="22" r="2"
                                                                    stroke-linejoin="miter" stroke-linecap="square"
                                                                    stroke="none" fill="currentColor"></circle>
                                                                <polyline fill="none" stroke="currentColor"
                                                                    stroke-miterlimit="10"
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
                                    </div> --}}


                                <div
                                    class="w-full max-w-sm swiper-slide  bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#">
                                        @foreach (json_decode($product->images) as $item)
                                            @if (str_contains($item, '_thumbnail'))
                                                <img alt="person capturing an image"
                                                    src="{{ url('http://back-lego.test/image/' . $item) }}"
                                                    tabindex="0"
                                                    class="focus:outline-none object-contain rounded-t w-full h-44" />
                                            @endif
                                        @endforeach
                                    </a>
                                    <div class="px-5 pt-4 pb-5 ">
                                        <a href="#">
                                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                                {{ $product->name }}</h5>
                                        </a>
                                        <p class="text-sm h-16 text-gray-700">
                                            {{ Str::limit($product->description, 100) }}
                                        </p>
                                        <div class="flex items-center mt-2.5 mb-5">
                                            <span
                                                class="bg-yellow-400 text-red-600 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-400 dark:text-yellow-400">{{ $product->voorraad }}
                                                jaa</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <span
                                                class="text-3xl font-bold text-gray-900 dark:text-white">€{{ $product->price }}</span>
                                            <a href="#"
                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Bekijk
                                                hier</a>
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
                            @endforeach
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev text-gray-500 opacity-20 hover:opacity-100 ml-2"></div>
                        <div class="swiper-button-next text-gray-500 opacity-20 hover:opacity-100 mr-2"></div>
                    </div>
                </div>
            </section>
        </div>
    </form>
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

        const swiper2 = new Swiper('.swiper2', {
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
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                // when window width is >= 640px
                1340: {
                    slidesPerView: 2,
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
