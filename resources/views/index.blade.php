@extends('components.master')
@section('title', 'Home')
@section('content')

    <div class="mx-auto container px-6 mt-6">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="relative overflow-hidden">
            <div class="pt-16 pb-80 sm:pt-24 sm:pb-40 lg:pt-40 lg:pb-48">
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 sm:static">
                    <div class="sm:max-w-lg">
                        <h1 class="text-4xl font font-extrabold tracking-tight text-white sm:text-6xl">Summer styles are
                            finally here</h1>
                        <p class="mt-4 text-xl text-white">This year, our new summer collection will shelter you from the
                            harsh elements of a world that doesn't care if you live or die.</p>
                    </div>
                    <div>
                        <div class="mt-10">
                            <!-- Decorative image grid -->
                            <div aria-hidden="true"
                                class="pointer-events-none lg:absolute lg:inset-y-0 lg:max-w-7xl lg:mx-auto lg:w-full">
                                <div
                                    class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                                    <div class="flex items-center space-x-6 lg:space-x-8">
                                        <div class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
                                            <div class="w-44 h-64 rounded-lg overflow-hidden sm:opacity-0 lg:opacity-100">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-01.jpg"
                                                    alt="" class="w-full h-full object-center object-cover">
                                            </div>
                                            <div class="w-44 h-64 rounded-lg overflow-hidden">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-02.jpg"
                                                    alt="" class="w-full h-full object-center object-cover">
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
                                            <div class="w-44 h-64 rounded-lg overflow-hidden">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-03.jpg"
                                                    alt="" class="w-full h-full object-center object-cover">
                                            </div>
                                            <div class="w-44 h-64 rounded-lg overflow-hidden">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-04.jpg"
                                                    alt="" class="w-full h-full object-center object-cover">
                                            </div>
                                            <div class="w-44 h-64 rounded-lg overflow-hidden">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-05.jpg"
                                                    alt="" class="w-full h-full object-center object-cover">
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
                                            <div class="w-44 h-64 rounded-lg overflow-hidden">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-06.jpg"
                                                    alt="" class="w-full h-full object-center object-cover">
                                            </div>
                                            <div class="w-44 h-64 rounded-lg overflow-hidden">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-07.jpg"
                                                    alt="" class="w-full h-full object-center object-cover">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#"
                                class="inline-block text-center bg-yellow-500 border border-transparent rounded-md py-3 px-8 font-medium text-white hover:bg-indigo-700">Shop
                                Collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-3 gap-8 mt-16">
            @foreach ($data as $key => $product)
                @if ($product->available == true and $product->category == 'Expert')
                    <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                        <div>
                            <img alt="person capturing an image"
                                src="{{ url('http://back-lego.test/storage/images/products/' . $product->image_thumbnail) }}"
                                tabindex="0" class="focus:outline-none object-cover rounded-t w-full h-44" />
                        </div>
                        <div class="bg-white rounded-b dark:bg-slate-700">
                            <div class="p-4">
                                <div class="flex items-center">
                                    <h2 tabindex="0" class="focus:outline-none text-lg dark:text-white font-semibold">
                                        {{ $product->name }}
                                    </h2>
                                    <div class="bg-yellow-500 py-1.5 ml-5 px-6 rounded-full">
                                        <p tabindex="0" class="focus:outline-none text-xs text-gray-700">Exclusive</p>
                                    </div>

                                </div>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 dark:text-gray-200 mt-2">
                                    {{ $product->description }}</p>
                                <div class="flex mt-4">
                                    <div>
                                        <p tabindex="0"
                                            class="focus:outline-none text-xs text-gray-600 dark:text-gray-200 px-2 bg-gray-200 dark:bg-slate-600 py-1">
                                            {{ $product->category }}</p>
                                    </div>
                                    <div class="pl-2">
                                        <p tabindex="0"
                                            class="focus:outline-none text-xs text-gray-600 dark:text-gray-200 px-2 bg-gray-200 dark:bg-slate-600 py-1">
                                            {{ $product->bricks_amount }} Blokjes</p>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between py-4">
                                    <h2 tabindex="0" class="focus:outline-none text-yellow-500 text-xs font-semibold">3
                                        Beschikbaar</h2>
                                    <h3 tabindex="0" class="focus:outline-none text-yellow-500 text-xl font-semibold">
                                        €{{ $product->price }}
                                        Per Week
                                    </h3>
                                </div>
                                <a href="{{ route('products.show', $product->id) }}"
                                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-yellow-500 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                        <!-- Heroicon name: solid/lock-closed -->
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
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
