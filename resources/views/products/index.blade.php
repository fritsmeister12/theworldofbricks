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
                Alles
            </a>
        </div>

        <section class="bg-white dark:bg-gray-800">
            <div class="container px-6 py-8 mx-auto">
                <div class="lg:flex lg:-mx-2">
                    <div class="space-y-3 lg:w-1/5 lg:px-2 lg:space-y-4">
                        <a href="#"
                            class="block font-medium text-blue-600 dark:text-blue-500 hover:underline">Alles</a>
                        <a href="#"
                            class="block font-medium text-blue-600 dark:text-blue-500 hover:underline">Alles</a>
                        <a href="#"
                            class="block font-medium text-blue-600 dark:text-blue-500 hover:underline">Alles</a>
                        <a href="#"
                            class="block font-medium text-blue-600 dark:text-blue-500 hover:underline">Alles</a>

                    </div>

                    <div class="mt-6 lg:mt-0 lg:px-2 lg:w-4/5 ">
                        <div class="flex items-center justify-between text-sm tracking-widest uppercase ">
                            <p class="text-gray-500 dark:text-gray-300">Alle Items</p>
                            <div class="flex items-center">
                                <p class="text-gray-500 dark:text-gray-300">Sort</p>
                                <select
                                    class="font-medium text-gray-700 bg-transparent dark:text-gray-500 focus:outline-none">
                                    <option value="#">Recommended</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8 mt-8">
                            @foreach ($data as $key => $product)
                                @if ($product->available == true)
                                    <div tabindex="0" class="focus:outline-none mx-2  xl:mb-0 mb-8">
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
                                                    <div class="bg-yellow-500 py-1.5 ml-5 px-6 rounded-full">
                                                        <p tabindex="0" class="focus:outline-none text-xs text-gray-700">
                                                            Exclusive</p>
                                                    </div>

                                                </div>
                                                <p tabindex="0"
                                                    class="focus:outline-none text-xs text-gray-600 dark:text-gray-200 mt-2">
                                                    {{ Str::limit($product->description, 150) }}</p>
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
                                                        3
                                                        Beschikbaar</h2>
                                                    <h3 tabindex="0"
                                                        class="focus:outline-none text-yellow-500 text-xl font-semibold">
                                                        €{{ $product->price }}
                                                        Per Week
                                                    </h3>
                                                </div>
                                                @if ($product->sellable == '1')
                                                    <a href="{{ route('verkoop.show', $product->id) }}"
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
                </div>
                <div class="mt-4">
                    {{ $data->links() }}
                </div>
            </div>
        </section>
    </div>
@endsection
