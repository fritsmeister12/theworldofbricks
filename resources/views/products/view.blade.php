@extends('components.master')
@section('title', 'Product')
@section('content')
    <style>
        html,
        body {
        position: relative;
        height: 100%;
        }

        body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
        }

        .swiper {
        width: 100%;
        height: 100%;
        }

        .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: contain;
        }
    </style>
    
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
                            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                                <div class="swiper-wrapper">
                                    @foreach (json_decode($product->images) as $item)
                                    <div class="swiper-slide">
                                        <img alt="person capturing an image"
                                                src="{{ url('http://back-lego.test/image/' . $item) }}" tabindex="0"
                                                class="object-contain w-full aspect-square rounded-xl" />
                                    </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div thumbsSlider="" class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    @foreach (json_decode($product->images) as $item)
                                    <div class="swiper-slide">
                                        <img alt="person capturing an image"
                                                src="{{ url('http://back-lego.test/image/' . $item) }}" tabindex="0"
                                                class="object-contain w-full aspect-square rounded-xl" />
                                    </div>
                                    @endforeach
                                </div>
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
        </div>
    </form>

    <script>
        var swiper = new Swiper(".mySwiper", {
          spaceBetween: 10,
          slidesPerView: 4,
          freeMode: true,
          watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
          spaceBetween: 10,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          thumbs: {
            swiper: swiper,
          },
        });
      </script>
@endsection
