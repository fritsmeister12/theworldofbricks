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
                {{ $categorie[0]->categorie_naam }}
            </a>
        </div>

    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <header>
            <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">
                {{ $categorie[0]->categorie_naam }}
            </h2>
    
            <p class="mt-4 max-w-xl text-gray-500">
                {{ $categorie[0]->categorie_beschrijving }}
            </p>
        </header>
    
        <div class="mt-8 block lg:hidden">
            <button
            class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600"
            >
            <span class="text-sm font-medium"> Filters & Sorting </span>
    
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-4 w-4"
            >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M8.25 4.5l7.5 7.5-7.5 7.5"
                />
            </svg>
            </button>
        </div>
    
        <div class="mt-4 lg:mt-8 lg:grid lg:grid-cols-5 lg:items-start lg:gap-4">
            <div class="hidden space-y-4 lg:block">
            <div>
                <label for="SortBy" class="block text-xs font-medium text-gray-700">
                Sort By
                </label>
    
                <select id="SortBy" class="mt-1 p-2 rounded border-gray-300 text-sm">
                <option>Sort By</option>
                <option value="Title, DESC">Title, DESC</option>
                <option value="Title, ASC">Title, ASC</option>
                <option value="Price, DESC">Price, DESC</option>
                <option value="Price, ASC">Price, ASC</option>
                </select>
            </div>
    
            <div>
                <p class="block text-xs font-medium text-gray-700">Filters</p>
    
                <div class="mt-1 space-y-2">
                <details
                    class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden"
                >
                    <summary
                    class="flex cursor-pointer items-center justify-between gap-2 p-4 text-gray-900 transition"
                    >
                    <span class="text-sm font-medium"> Availability </span>
    
                    <span class="transition group-open:-rotate-180">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-4 w-4"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                        />
                        </svg>
                    </span>
                    </summary>
    
                    <div class="border-t border-gray-200 bg-white">
                    <header class="flex items-center justify-between p-4">
                        <span class="text-sm text-gray-700"> 0 Selected </span>
    
                        <button
                        type="button"
                        class="text-sm text-gray-900 underline underline-offset-4"
                        >
                        Reset
                        </button>
                    </header>
    
                    <ul class="space-y-1 border-t border-gray-200 p-4">
                        <li>
                        <label
                            for="FilterInStock"
                            class="inline-flex items-center gap-2"
                        >
                            <input
                            type="checkbox"
                            id="FilterInStock"
                            class="h-5 w-5 rounded border-gray-300"
                            />
    
                            <span class="text-sm font-medium text-gray-700">
                            In Stock (5+)
                            </span>
                        </label>
                        </li>
    
                        <li>
                        <label
                            for="FilterPreOrder"
                            class="inline-flex items-center gap-2"
                        >
                            <input
                            type="checkbox"
                            id="FilterPreOrder"
                            class="h-5 w-5 rounded border-gray-300"
                            />
    
                            <span class="text-sm font-medium text-gray-700">
                            Pre Order (3+)
                            </span>
                        </label>
                        </li>
    
                        <li>
                        <label
                            for="FilterOutOfStock"
                            class="inline-flex items-center gap-2"
                        >
                            <input
                            type="checkbox"
                            id="FilterOutOfStock"
                            class="h-5 w-5 rounded border-gray-300"
                            />
    
                            <span class="text-sm font-medium text-gray-700">
                            Out of Stock (10+)
                            </span>
                        </label>
                        </li>
                    </ul>
                    </div>
                </details>
    
                <details
                    class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden"
                >
                    <summary
                    class="flex cursor-pointer items-center justify-between gap-2 p-4 text-gray-900 transition"
                    >
                    <span class="text-sm font-medium"> Price </span>
    
                    <span class="transition group-open:-rotate-180">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-4 w-4"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                        />
                        </svg>
                    </span>
                    </summary>
    
                    <div class="border-t border-gray-200 bg-white">
                    <header class="flex items-center justify-between p-4">
                        <span class="text-sm text-gray-700">
                        The highest price is $600
                        </span>
    
                        <button
                        type="button"
                        class="text-sm text-gray-900 underline underline-offset-4"
                        >
                        Reset
                        </button>
                    </header>
    
                    <div class="border-t border-gray-200 p-4">
                        <div class="flex justify-between gap-4">
                        <label
                            for="FilterPriceFrom"
                            class="flex items-center gap-2"
                        >
                            <span class="text-sm text-gray-600">$</span>
    
                            <input
                            type="number"
                            id="FilterPriceFrom"
                            placeholder="From"
                            class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                            />
                        </label>
    
                        <label for="FilterPriceTo" class="flex items-center gap-2">
                            <span class="text-sm text-gray-600">$</span>
    
                            <input
                            type="number"
                            id="FilterPriceTo"
                            placeholder="To"
                            class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                            />
                        </label>
                        </div>
                    </div>
                    </div>
                </details>
    
                <details
                    class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden"
                >
                    <summary
                    class="flex cursor-pointer items-center justify-between gap-2 p-4 text-gray-900 transition"
                    >
                    <span class="text-sm font-medium"> Colors </span>
    
                    <span class="transition group-open:-rotate-180">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-4 w-4"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                        />
                        </svg>
                    </span>
                    </summary>
    
                    <div class="border-t border-gray-200 bg-white">
                    <header class="flex items-center justify-between p-4">
                        <span class="text-sm text-gray-700"> 0 Selected </span>
    
                        <button
                        type="button"
                        class="text-sm text-gray-900 underline underline-offset-4"
                        >
                        Reset
                        </button>
                    </header>
    
                    <ul class="space-y-1 border-t border-gray-200 p-4">
                        <li>
                        <label
                            for="FilterRed"
                            class="inline-flex items-center gap-2"
                        >
                            <input
                            type="checkbox"
                            id="FilterRed"
                            class="h-5 w-5 rounded border-gray-300"
                            />
    
                            <span class="text-sm font-medium text-gray-700">
                            Red
                            </span>
                        </label>
                        </li>
    
                        <li>
                        <label
                            for="FilterBlue"
                            class="inline-flex items-center gap-2"
                        >
                            <input
                            type="checkbox"
                            id="FilterBlue"
                            class="h-5 w-5 rounded border-gray-300"
                            />
    
                            <span class="text-sm font-medium text-gray-700">
                            Blue
                            </span>
                        </label>
                        </li>
    
                        <li>
                        <label
                            for="FilterGreen"
                            class="inline-flex items-center gap-2"
                        >
                            <input
                            type="checkbox"
                            id="FilterGreen"
                            class="h-5 w-5 rounded border-gray-300"
                            />
    
                            <span class="text-sm font-medium text-gray-700">
                            Green
                            </span>
                        </label>
                        </li>
    
                        <li>
                        <label
                            for="FilterOrange"
                            class="inline-flex items-center gap-2"
                        >
                            <input
                            type="checkbox"
                            id="FilterOrange"
                            class="h-5 w-5 rounded border-gray-300"
                            />
    
                            <span class="text-sm font-medium text-gray-700">
                            Orange
                            </span>
                        </label>
                        </li>
    
                        <li>
                        <label
                            for="FilterPurple"
                            class="inline-flex items-center gap-2"
                        >
                            <input
                            type="checkbox"
                            id="FilterPurple"
                            class="h-5 w-5 rounded border-gray-300"
                            />
    
                            <span class="text-sm font-medium text-gray-700">
                            Purple
                            </span>
                        </label>
                        </li>
    
                        <li>
                        <label
                            for="FilterTeal"
                            class="inline-flex items-center gap-2"
                        >
                            <input
                            type="checkbox"
                            id="FilterTeal"
                            class="h-5 w-5 rounded border-gray-300"
                            />
    
                            <span class="text-sm font-medium text-gray-700">
                            Teal
                            </span>
                        </label>
                        </li>
                    </ul>
                    </div>
                </details>
                </div>
            </div>
            </div>
    
            <div class="lg:col-span-4">
            <ul class="grid grid-cols-3">
                @foreach ($data as $key => $product)
                    @if ($product == true)
                        <li>
                            <div tabindex="0" class="focus:outline-none mx-2 mb-4 cursor-pointer" onclick="location.href='{{ route('producten-show', [$product->category, $product->id]) }}';">
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
                        </li>
                        @endif
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="mx-6 my-2">
            {{ $data->links() }}
        </div>
    </section>      
</div>
@endsection
