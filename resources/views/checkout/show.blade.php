@extends('components.master')
@section('title', 'Product')
@section('content')
    <form action="{{ route('order') }}" method="post">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">

        <div class="">
            <div class="pt-6">
                <div class="px-4 md:px-6 2xl:px-0 2xl:mx-auto 2xl:container flex justify-center items-center">
                    <div class="flex justify-between items-center w-full">
                        <div class="flex flex-col justify-start items-start">
                            <p class="text-sm leading-none text-gray-600 dark:text-gray-300"><span
                                    class="text-yellow-500">Lego</span> -
                                {{ $product->category }}</p>
                            <div class="mt-2 flex flex-row justify-end items-center space-x-3">
                                <p class="text-2xl font-semibold leading-normal text-gray-800 dark:text-white">
                                    {{ $product->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>


                <section class="text-gray-600 body-font overflow-hidden">
                    <div class="container px-5 py-24 mx-auto">
                        <div class="lg:w-4/5 mx-auto flex flex-wrap">
                            <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded"
                                src="https://dummyimage.com/400x400">
                            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                                <h2 class="text-sm title-font text-gray-500 tracking-widest uppercase">
                                    {{ $product->category }}</h2>
                                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $product->name }}</h1>
                                <div class="flex mb-4">
                                    <span class="flex items-center">
                                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                            </path>
                                        </svg>
                                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                            </path>
                                        </svg>
                                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                            </path>
                                        </svg>
                                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                            </path>
                                        </svg>
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                            </path>
                                        </svg>
                                        <span class="text-gray-600 ml-3">4 Reviews</span>
                                    </span>
                                    <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 space-x-2s">
                                        <a class="text-gray-500">
                                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a class="text-gray-500">
                                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                                <path
                                                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a class="text-gray-500">
                                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                                <path
                                                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                </path>
                                            </svg>
                                        </a>
                                    </span>
                                </div>
                                <p class="leading-relaxed">Fam locavore kickstarter distillery. Mixtape chillwave tumeric
                                    sriracha taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw
                                    denim forage brooklyn. Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle
                                    austin listicle pour-over, neutra jean shorts keytar banjo tattooed umami cardigan.</p>
                                <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                                    <div class="flex">
                                        <span class="mr-3">Color</span>
                                        <button
                                            class="border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none"></button>
                                        <button
                                            class="border-2 border-gray-300 ml-1 bg-gray-700 rounded-full w-6 h-6 focus:outline-none"></button>
                                        <button
                                            class="border-2 border-gray-300 ml-1 bg-indigo-500 rounded-full w-6 h-6 focus:outline-none"></button>
                                    </div>
                                    <div class="flex ml-6 items-center">
                                        <span class="mr-3">Size</span>
                                        <div class="relative">
                                            <select
                                                class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10">
                                                <option>SM</option>
                                                <option>M</option>
                                                <option>L</option>
                                                <option>XL</option>
                                            </select>
                                            <span
                                                class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" class="w-4 h-4"
                                                    viewBox="0 0 24 24">
                                                    <path d="M6 9l6 6 6-6"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex">
                                    <span class="title-font font-medium text-2xl text-gray-900">$58.00</span>
                                    <button
                                        class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Button</button>
                                    <button
                                        class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                            <path
                                                d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Image gallery -->
                <div class="mt-6 max-w-2xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-x-8">
                    <div class="hidden aspect-w-3 aspect-h-4 rounded-lg overflow-hidden lg:block">
                        <img src="{{ url('http://back-lego.test/storage/images/products/' . $product->image_thumbnail) }}"
                            alt="Two each of gray, white, and black shirts laying flat."
                            class="w-full h-full object-center object-cover">
                    </div>
                    <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                        <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-01.jpg"
                                alt="Model wearing plain black basic tee."
                                class="w-full h-full object-center object-cover">
                        </div>
                        <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-02.jpg"
                                alt="Model wearing plain gray basic tee."
                                class="w-full h-full object-center object-cover">
                        </div>
                    </div>
                    <div class="aspect-w-4 aspect-h-5 sm:rounded-lg sm:overflow-hidden lg:aspect-w-3 lg:aspect-h-4">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-featured-product-shot.jpg"
                            alt="Model wearing plain white basic tee." class="w-full h-full object-center object-cover">
                    </div>
                </div>

                <!-- Product info -->
                <div
                    class="max-w-2xl mx-auto pt-10 pb-16 px-4 sm:px-6 lg:max-w-7xl lg:pt-16 lg:pb-24 lg:px-8 lg:grid lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8">
                    <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                        <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">{{ $product->name }}
                        </h1>
                    </div>

                    <!-- Options -->
                    <div class="mt-4 lg:mt-0 lg:row-span-3">
                        <h2 class="sr-only">Product informatie</h2>
                        <p class="text-3xl text-gray-900">€{{ $product->price }}</p>

                        <!-- Reviews -->
                        <div class="mt-6">
                            <div class="items-center w-full">
                                <h2 for="aantal_weken">Maak een keuze: *
                                </h2>
                                <select class="w-full p-2 mt-2" name="aantal_weken" id="aantal_weken">
                                    <option value="1">1 Week</option>
                                    <option value="2">2 Weken</option>
                                    <option value="3">3 Weken</option>
                                </select>
                            </div>
                        </div>

                        <form class="mt-10">
                            <!-- Colors -->
                            <div>
                                <h3 class="text-sm text-gray-900 font-medium">Color</h3>

                                <fieldset class="mt-4">
                                    <legend class="sr-only">Choose a color</legend>
                                    <div class="flex items-center space-x-3">
                                        <label
                                            class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400">
                                            <input type="radio" name="color-choice" value="White" class="sr-only"
                                                aria-labelledby="color-choice-0-label">
                                            <p id="color-choice-0-label" class="sr-only">White</p>
                                            <span aria-hidden="true"
                                                class="h-8 w-8 bg-white border border-black border-opacity-10 rounded-full"></span>
                                        </label>

                                        <!--
                                                                                                                                                                                                                                                                                                                                    Active and Checked: "ring ring-offset-1"
                                                                                                                                                                                                                                                                                                                                    Not Active and Checked: "ring-2"
                                                                                                                                                                                                                                                                                                                                  -->
                                        <label
                                            class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400">
                                            <input type="radio" name="color-choice" value="Gray" class="sr-only"
                                                aria-labelledby="color-choice-1-label">
                                            <p id="color-choice-1-label" class="sr-only">Gray</p>
                                            <span aria-hidden="true"
                                                class="h-8 w-8 bg-gray-200 border border-black border-opacity-10 rounded-full"></span>
                                        </label>
                                        <label
                                            class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-900">
                                            <input type="radio" name="color-choice" value="Black" class="sr-only"
                                                aria-labelledby="color-choice-2-label">
                                            <p id="color-choice-2-label" class="sr-only">Black</p>
                                            <span aria-hidden="true"
                                                class="h-8 w-8 bg-gray-900 border border-black border-opacity-10 rounded-full"></span>
                                        </label>
                                    </div>
                                </fieldset>
                            </div>

                            <!-- Sizes -->
                            <div class="mt-10">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-sm text-gray-900 font-medium">Size</h3>
                                    <a href="#"
                                        class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Size
                                        guide</a>
                                </div>

                                <fieldset class="mt-4">
                                    <legend class="sr-only">Choose a size</legend>
                                    <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label
                                            class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-gray-50 text-gray-200 cursor-not-allowed">
                                            <input type="radio" name="size-choice" value="XXS" disabled
                                                class="sr-only" aria-labelledby="size-choice-0-label">
                                            <p id="size-choice-0-label">XXS</p>

                                            <div aria-hidden="true"
                                                class="absolute -inset-px rounded-md border-2 border-gray-200 pointer-events-none">
                                                <svg class="absolute inset-0 w-full h-full text-gray-200 stroke-2"
                                                    viewBox="0 0 100 100" preserveAspectRatio="none"
                                                    stroke="currentColor">
                                                    <line x1="0" y1="100" x2="100" y2="0"
                                                        vector-effect="non-scaling-stroke" />
                                                </svg>
                                            </div>
                                        </label>

                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label
                                            class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                            <input type="radio" name="size-choice" value="XS" class="sr-only"
                                                aria-labelledby="size-choice-1-label">
                                            <p id="size-choice-1-label">XS</p> -->
                                            <div class="absolute -inset-px rounded-md pointer-events-none"
                                                aria-hidden="true">
                                            </div>
                                        </label>

                                        <label
                                            class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                            <input type="radio" name="size-choice" value="S" class="sr-only"
                                                aria-labelledby="size-choice-2-label">
                                            <p id="size-choice-2-label">S</p> -->
                                            <div class="absolute -inset-px rounded-md pointer-events-none"
                                                aria-hidden="true">
                                            </div>
                                        </label>

                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label
                                            class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                            <input type="radio" name="size-choice" value="M" class="sr-only"
                                                aria-labelledby="size-choice-3-label">
                                            <p id="size-choice-3-label">M</p>

                                            <!--
                                                                                                                                                                                                                                                                                                                                      Active: "border", Not Active: "border-2"
                                                                                                                                                                                                                                                                                                                                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                                                                                                                                                                                                                                                                                                                                    -->
                                            <div class="absolute -inset-px rounded-md pointer-events-none"
                                                aria-hidden="true">
                                            </div>
                                        </label>

                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label
                                            class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                            <input type="radio" name="size-choice" value="L" class="sr-only"
                                                aria-labelledby="size-choice-4-label">
                                            <p id="size-choice-4-label">L</p>

                                            <!--
                                                                                                                                                                                                                                                                                                                                      Active: "border", Not Active: "border-2"
                                                                                                                                                                                                                                                                                                                                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                                                                                                                                                                                                                                                                                                                                    -->
                                            <div class="absolute -inset-px rounded-md pointer-events-none"
                                                aria-hidden="true">
                                            </div>
                                        </label>

                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label
                                            class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                            <input type="radio" name="size-choice" value="XL" class="sr-only"
                                                aria-labelledby="size-choice-5-label">
                                            <p id="size-choice-5-label">XL</p>

                                            <!--
                                                                                                                                                                                                                                                                                                                                      Active: "border", Not Active: "border-2"
                                                                                                                                                                                                                                                                                                                                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                                                                                                                                                                                                                                                                                                                                    -->
                                            <div class="absolute -inset-px rounded-md pointer-events-none"
                                                aria-hidden="true">
                                            </div>
                                        </label>

                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label
                                            class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                            <input type="radio" name="size-choice" value="2XL" class="sr-only"
                                                aria-labelledby="size-choice-6-label">
                                            <p id="size-choice-6-label">2XL</p>

                                            <!--
                                                                                                                                                                                                                                                                                                                                      Active: "border", Not Active: "border-2"
                                                                                                                                                                                                                                                                                                                                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                                                                                                                                                                                                                                                                                                                                    -->
                                            <div class="absolute -inset-px rounded-md pointer-events-none"
                                                aria-hidden="true">
                                            </div>
                                        </label>

                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label
                                            class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                            <input type="radio" name="size-choice" value="3XL" class="sr-only"
                                                aria-labelledby="size-choice-7-label">
                                            <p id="size-choice-7-label">3XL</p>

                                            <!--
                                                                                                                                                                                                                                                                                                                                      Active: "border", Not Active: "border-2"
                                                                                                                                                                                                                                                                                                                                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                                                                                                                                                                                                                                                                                                                                    -->
                                            <div class="absolute -inset-px rounded-md pointer-events-none"
                                                aria-hidden="true">
                                            </div>
                                        </label>
                                    </div>
                                </fieldset>
                            </div>

                            <button type="submit"
                                class="mt-10 w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Huren</button>
                        </form>
                    </div>

                    <div
                        class="py-10 lg:pt-6 lg:pb-16 lg:col-start-1 lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                        <!-- Description and details -->
                        <div>
                            <h3 class="sr-only">Omschrijving</h3>

                            <div class="space-y-6">
                                <p class="text-base text-gray-900">{{ $product->description }}</p>
                            </div>
                        </div>

                        <div class="mt-10">
                            <h3 class="text-sm font-medium text-gray-900">Specificaties</h3>

                            <div class="mt-4">
                                <ul role="list" class="pl-4 list-disc text-sm space-y-2">
                                    <li class="text-gray-400"><span class="text-gray-600">Productcode:
                                            #{{ $product->set_number }}</span>
                                    </li>

                                    <li class="text-gray-400"><span class="text-gray-600">Aantal blokjes:
                                            {{ $product->bricks_amount }}</span>
                                    </li>

                                    <li class="text-gray-400"><span class="text-gray-600">Lengte:
                                            {{ $product->length }}
                                            cm,
                                            Breedte: {{ $product->width }} cm, Hoogte: {{ $product->height }}
                                            cm</span>
                                    </li>

                                    <li class="text-gray-400"><span class="text-gray-600">{{ $product->category }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-10">
                            <h2 class="text-sm font-medium text-gray-900">Details</h2>

                            <div class="mt-4 space-y-6">
                                <p class="text-sm text-gray-600">The 6-Pack includes two black, two white, and two heather
                                    gray
                                    Basic Tees. Sign up for our subscription service and be the first to get new, exciting
                                    colors, like our upcoming &quot;Charcoal Gray&quot; limited release.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
@endsection
