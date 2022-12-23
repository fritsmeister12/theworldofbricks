@extends('components.master')
@section('title', 'Producten')
@section('content')
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
                Producten
            </a>

            <span class="mx-5 text-gray-500 dark:text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd" />
                </svg>
            </span>

            <a href="#" class="text-gray-600 dark:text-gray-200 hover:underline capitalize">
                {{ $categorie }}
            </a>
        </div>
        <section>
            <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
                <header>
                    <h2 class="text-xl font-bold dark:text-white text-gray-900 sm:text-3xl capitalize">
                        {{ $categorie }}
                    </h2>

                    <p class="max-w-md mt-4 dark:text-gray-200 text-gray-500">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque
                        praesentium cumque iure dicta incidunt est ipsam, officia dolor fugit
                        natus?
                    </p>
                </header>

                <div class="mt-8 sm:flex sm:items-center sm:justify-between">
                    <div class="block sm:hidden">
                        <button
                            class="flex items-center gap-2 pb-1 text-gray-900 transition border-b border-gray-400 cursor-pointer hover:border-gray-600">
                            <span class="text-sm font-medium"> Filters & Sorting </span>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>
                    </div>

                    <div class="hidden sm:flex sm:gap-4">
                        <div class="relative">
                            <details class="group [&_summary::-webkit-details-marker]:hidden">
                                <summary
                                    class="flex items-center gap-2 pb-1 text-gray-900 dark:text-white transition border-b border-gray-400 cursor-pointer hover:border-gray-600">
                                    <span class="text-sm font-medium"> Beschikbaarheid </span>

                                    <span class="transition group-open:-rotate-180">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </summary>

                                <div class="z-50 group-open:absolute group-open:top-auto group-open:left-0 group-open:mt-2">
                                    <div class="bg-white border border-gray-200 rounded w-96">
                                        <header class="flex items-center justify-between p-4">
                                            <span class="text-sm text-gray-700"> 0 Selected </span>

                                            <button type="button"
                                                class="text-sm text-gray-900 underline underline-offset-4">
                                                Reset
                                            </button>
                                        </header>

                                        <ul class="p-4 space-y-1 border-t border-gray-200">
                                            <li>
                                                <label for="FilterInStock" class="inline-flex items-center gap-2">
                                                    <input type="checkbox" id="FilterInStock"
                                                        class="w-5 h-5 border-gray-300 rounded" />

                                                    <span class="text-sm font-medium text-gray-700">
                                                        In Stock (5+)
                                                    </span>
                                                </label>
                                            </li>

                                            <li>
                                                <label for="FilterPreOrder" class="inline-flex items-center gap-2">
                                                    <input type="checkbox" id="FilterPreOrder"
                                                        class="w-5 h-5 border-gray-300 rounded" />

                                                    <span class="text-sm font-medium text-gray-700">
                                                        Pre Order (3+)
                                                    </span>
                                                </label>
                                            </li>

                                            <li>
                                                <label for="FilterOutOfStock" class="inline-flex items-center gap-2">
                                                    <input type="checkbox" id="FilterOutOfStock"
                                                        class="w-5 h-5 border-gray-300 rounded" />

                                                    <span class="text-sm font-medium text-gray-700">
                                                        Out of Stock (10+)
                                                    </span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </details>
                        </div>

                        <div class="relative">
                            <details class="group [&_summary::-webkit-details-marker]:hidden">
                                <summary
                                    class="flex items-center gap-2 pb-1 text-gray-900 dark:text-white transition border-b border-gray-400 cursor-pointer hover:border-gray-600">
                                    <span class="text-sm font-medium"> Prijs </span>

                                    <span class="transition group-open:-rotate-180">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </summary>

                                <div class="z-50 group-open:absolute group-open:top-auto group-open:left-0 group-open:mt-2">
                                    <div class="bg-white border border-gray-200 rounded w-96">
                                        <header class="flex items-center justify-between p-4">
                                            <span class="text-sm text-gray-700">
                                                The highest price is $600
                                            </span>

                                            <button type="button"
                                                class="text-sm text-gray-900 underline underline-offset-4">
                                                Reset
                                            </button>
                                        </header>

                                        <div class="p-4 border-t border-gray-200">
                                            <div class="flex justify-between gap-4">
                                                <label for="FilterPriceFrom" class="flex items-center gap-2">
                                                    <span class="text-sm text-gray-600">$</span>

                                                    <input type="number" id="FilterPriceFrom" placeholder="From"
                                                        class="w-full border-gray-200 rounded-md shadow-sm sm:text-sm" />
                                                </label>

                                                <label for="FilterPriceTo" class="flex items-center gap-2">
                                                    <span class="text-sm text-gray-600">$</span>

                                                    <input type="number" id="FilterPriceTo" placeholder="To"
                                                        class="w-full border-gray-200 rounded-md shadow-sm sm:text-sm" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </details>
                        </div>

                        <div class="relative">
                            <details class="group [&_summary::-webkit-details-marker]:hidden">
                                <summary
                                    class="flex items-center gap-2 pb-1 text-gray-900 dark:text-white transition border-b border-gray-400 cursor-pointer hover:border-gray-600">
                                    <span class="text-sm font-medium"> Categorie </span>

                                    <span class="transition group-open:-rotate-180">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </summary>

                                <div
                                    class="z-50 group-open:absolute group-open:top-auto group-open:left-0 group-open:mt-2">
                                    <div class="bg-white border border-gray-200 rounded w-96">
                                        <header class="flex items-center justify-between p-4">
                                            <span class="text-sm text-gray-700"> 0 Selected </span>

                                            <button type="button"
                                                class="text-sm text-gray-900 underline underline-offset-4">
                                                Reset
                                            </button>
                                        </header>

                                        <ul class="p-4 space-y-1 border-t border-gray-200">
                                            <li>
                                                <label for="FilterRed" class="inline-flex items-center gap-2">
                                                    <input type="checkbox" id="FilterRed"
                                                        class="w-5 h-5 border-gray-300 rounded" />

                                                    <span class="text-sm font-medium text-gray-700">
                                                        Red
                                                    </span>
                                                </label>
                                            </li>

                                            <li>
                                                <label for="FilterBlue" class="inline-flex items-center gap-2">
                                                    <input type="checkbox" id="FilterBlue"
                                                        class="w-5 h-5 border-gray-300 rounded" />

                                                    <span class="text-sm font-medium text-gray-700">
                                                        Blue
                                                    </span>
                                                </label>
                                            </li>

                                            <li>
                                                <label for="FilterGreen" class="inline-flex items-center gap-2">
                                                    <input type="checkbox" id="FilterGreen"
                                                        class="w-5 h-5 border-gray-300 rounded" />

                                                    <span class="text-sm font-medium text-gray-700">
                                                        Green
                                                    </span>
                                                </label>
                                            </li>

                                            <li>
                                                <label for="FilterOrange" class="inline-flex items-center gap-2">
                                                    <input type="checkbox" id="FilterOrange"
                                                        class="w-5 h-5 border-gray-300 rounded" />

                                                    <span class="text-sm font-medium text-gray-700">
                                                        Orange
                                                    </span>
                                                </label>
                                            </li>

                                            <li>
                                                <label for="FilterPurple" class="inline-flex items-center gap-2">
                                                    <input type="checkbox" id="FilterPurple"
                                                        class="w-5 h-5 border-gray-300 rounded" />

                                                    <span class="text-sm font-medium text-gray-700">
                                                        Purple
                                                    </span>
                                                </label>
                                            </li>

                                            <li>
                                                <label for="FilterTeal" class="inline-flex items-center gap-2">
                                                    <input type="checkbox" id="FilterTeal"
                                                        class="w-5 h-5 border-gray-300 rounded" />

                                                    <span class="text-sm font-medium text-gray-700">
                                                        Teal
                                                    </span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </details>
                        </div>
                    </div>

                    <div class="hidden sm:block">
                        <label for="SortBy" class="sr-only">SortBy</label>

                        <select id="SortBy" class="h-10 text-sm border-gray-300 px-2 rounded">
                            <option>Sort By</option>
                            <option value="Title, DESC">Title, DESC</option>
                            <option value="Title, ASC">Title, ASC</option>
                            <option value="Price, DESC">Price, DESC</option>
                            <option value="Price, ASC">Price, ASC</option>
                        </select>
                    </div>
                </div>

                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8">
                    @foreach ($data as $key => $product)
                        @if ($product->available == true)
                            <div tabindex="0" class="focus:outline-none mx-2 mb-4 cursor-pointer"
                                onclick="location.href='{{ route('producten-show', [$product->category, $product->id]) }}';">
                                <div>
                                    <img alt="person capturing an image"
                                        src="{{ url('http://back-lego.test/storage/images/products/' . $product->image_thumbnail) }}"
                                        tabindex="0" class="focus:outline-none object-cover rounded-t w-full h-44" />
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
                                            class="focus:outline-none text-xs text-gray-600 dark:text-gray-200 mt-2 h-16">
                                            {{ Str::limit($product->description, 135) }}</p>
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
                                            <h2 tabindex="0"
                                                class="focus:outline-none text-yellow-500 text-xs font-semibold">
                                                @if ($product->voorraad == 'op_voorraad')
                                                    Direct Leverbaar
                                                @else
                                                    Tijdelijk Niet Leverbaar
                                                @endif
                                            </h2>
                                            <h3 tabindex="0"
                                                class="focus:outline-none text-yellow-500 text-xl font-semibold">
                                                €{{ $product->price }}
                                            </h3>
                                        </div>
                                        @if ($product->sellable == '1')
                                            <a href="{{ route('producten-show', [$product->category, $product->id]) }}"
                                                class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-yellow-500 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                                    <!-- Heroicon name: solid/lock-closed -->
                                                    <i class="fas fa-cash-register dark:text-gray-700"></i>
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
            </div>
            <div class="mx-6 my-2">
                {{ $data->links() }}
            </div>
        </section>

    </div>
@endsection
