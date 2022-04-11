@extends('components.master')
@section('title', 'Home')
@section('content')

    <div class="mx-auto container px-6 mt-6">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="relative overflow-hidden">
            <div class="pt-16 pb-80 sm:pt-24 sm:pb-40 lg:pt-40 lg:pb-48">
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 sm:static">
                    <div class="sm:max-w-lg">
                        <h1 class="text-4xl font font-extrabold tracking-tight text-white sm:text-6xl">Al jouw favoriete
                            Lego sets</h1>
                        <p class="mt-4 text-xl text-white">De platform om de leukste sets maandelijks te ontvangen. Met meer
                            dan 100+ Lego sets in ons assortiment.</p>
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

                            <a href="{{ route('products.index') }}"
                                class="inline-block text-center bg-yellow-500 border border-transparent rounded-md py-3 px-8 font-medium text-white hover:bg-indigo-700">Bekijk
                                de sets</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container mx-auto md:py-16 px-4 md:px-6">
            <div
                class="flex items-strech justify-center flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6 lg:space-x-8">
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
                        <p class="text-base lg:text-xl text-gray-800 dark:text-white">Meld je nu aan voor onze <span
                                class="font-bold">nieuwsbrief</span></p>
                    </div>
                    <div class="flex justify-end md:absolute md:bottom-4 md:right-4 lg:bottom-0 lg:right-0">
                        <img src="https://i.ibb.co/rGfP7mp/Rectangle-59-1.png" alt=""
                            class="md:w-20 md:h-20 lg:w-full lg:h-full" />
                    </div>
                </div>
            </div>
        </div>

        <div class="px-4 md:px-6 2xl:px-0 2xl:mx-auto 2xl:container flex justify-center items-center">
            <div class="flex justify-between items-center w-full">
                <div class="flex flex-col justify-start items-start">
                    <p class="text-sm leading-none text-gray-600 dark:text-gray-300">Lego - Exclusief</p>
                    <div class="mt-2 flex flex-row justify-end items-center space-x-3">
                        <p class="text-2xl font-semibold leading-normal text-gray-800 dark:text-white">Legosets</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-8 mt-8 container mx-auto px-4 md:px-6">
            @foreach ($data as $key => $product)
                @if ($product->available == true and $product->category == 'Expert')
                    <div tabindex="0" class="focus:outline-none  w-72 xl:mb-0 mb-8">
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
