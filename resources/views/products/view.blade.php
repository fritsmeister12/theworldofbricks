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
                            <img alt="Les Paul"
                                src="{{ url('http://back-lego.test/storage/images/products/' . $product->image_thumbnail) }}"
                                class="object-cover w-full aspect-square rounded-xl" />

                            <div class="grid grid-cols-2 gap-4 lg:mt-4">
                                <img alt="Les Paul"
                                    src="https://images.unsplash.com/photo-1456948927036-ad533e53865c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                    class="object-cover w-full aspect-square rounded-xl" />

                                <img alt="Les Paul"
                                    src="https://images.unsplash.com/photo-1456948927036-ad533e53865c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                    class="object-cover w-full aspect-square rounded-xl" />

                                <img alt="Les Paul"
                                    src="https://images.unsplash.com/photo-1456948927036-ad533e53865c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                    class="object-cover w-full aspect-square rounded-xl" />

                                <img alt="Les Paul"
                                    src="https://images.unsplash.com/photo-1456948927036-ad533e53865c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                    class="object-cover w-full aspect-square rounded-xl" />
                            </div>
                        </div>

                        <div class="sticky top-36">
                            <strong
                                class="rounded-full border border-green-600 bg-gray-100 px-3 py-0.5 text-xs font-medium tracking-wide text-green-600">
                                {{ $product->voorraad }}
                            </strong>
                            <div class="flex justify-between mt-8">
                                <div class="max-w-[35ch]">
                                    <h1 class="text-2xl font-bold">
                                        {{ $product->name }}
                                    </h1>

                                    <p class="mt-0.5 text-sm">{{ $product->category }}</p>

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
                                        <div class="prose max-w-none group-open:hidden">
                                            <p>
                                                {{ $product->description }}
                                            </p>
                                        </div>
                                    </div>
                                </summary>
                            </details>

                            <form class="mt-8">
                                <fieldset>
                                    <legend class="mb-1 text-sm font-medium">Specificaties</legend>
                                    <div class="flow-root lg:w-3/4">
                                        <div class="-m-0.5 flex flex-wrap">
                                            <label for="color_tt" class="p-0.5">
                                                <input type="radio" name="color" id="color_tt" class="sr-only" />

                                                <span
                                                    class="inline-block px-3 py-1 text-xs font-medium border rounded group">
                                                    Productnummer: #{{ $product->set_number }}
                                                </span>
                                            </label>

                                            <label for="color_fr" class="p-0.5">
                                                <input type="radio" name="color" id="color_fr" class="sr-only" />

                                                <span
                                                    class="inline-block px-3 py-1 text-xs font-medium border rounded group">
                                                    Aantal Blokjes: {{ $product->bricks_amount }}
                                                </span>
                                            </label>

                                            <div class="p-0.5">
                                                <span
                                                    class="inline-block px-3 py-1 text-xs font-medium border rounded group">
                                                    Lengte:
                                                    {{ $product->length }}
                                                    cm
                                                </span>
                                            </div>
                                            <div class="p-0.5">
                                                <span
                                                    class="inline-block px-3 py-1 text-xs font-medium border rounded group">
                                                    Breedte: {{ $product->width }} cm
                                                </span>
                                            </div>
                                            <div class="p-0.5">
                                                <span
                                                    class="inline-block px-3 py-1 text-xs font-medium border rounded group">
                                                    Hoogte: {{ $product->height }}
                                                    cm
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>

                            <div class="flex mt-6 space-x-2 text-center border-b border-gray-200 pb-6">
                                <button type="submit"
                                    class="block px-5 w-full py-3 text-xs font-medium text-white bg-red-600 rounded hover:bg-red-700">
                                    Direct Kopen
                                </button>
                                <a href="{{ url('winkelmandje/' . $product->id) }}"
                                    class="block px-5 py-3 w-full text-xs font-medium text-white bg-yellow-500 rounded hover:bg-yellow-600">
                                    In Winkelmand</a>
                            </div>

                            <div class="mt-4">
                                <ul>
                                    <li class="mb-2 ">
                                        <i class="fas fa-check-circle text-red-600"></i>
                                        <span class="font-bold">Gratis verzending</span> in Nederland en België.
                                    </li>
                                    <li class="mb-2 ">
                                        <i class="fas fa-check-circle text-red-600"></i>
                                        Bezorging waar en wanneer je wilt.
                                        Thuisbezorgd of afhalen op 2400 locaties.
                                    </li>
                                    <li class="mb-2 ">
                                        <i class="fas fa-check-circle text-red-600"></i>
                                        Gemakkelijk betalen met iDeal.
                                    </li>
                                    <li class="mb-2 ">
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
                        <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                            Bekijk Ook</h2>
                        <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Bekijk hier andere populaire
                            sets!</p>
                    </div>
                    <div class="grid gap-8 lg:grid-cols-2">
                        <article
                            class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex justify-between items-center mb-5 text-gray-500">
                                <span
                                    class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                    <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                        </path>
                                    </svg>
                                    Tutorial
                                </span>
                                <span class="text-sm">14 days ago</span>
                            </div>
                            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a
                                    href="#">How to quickly deploy a static website</a></h2>
                            <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Static websites are now used to
                                bootstrap lots of websites and are becoming the basis for a variety of tools that even
                                influence both web designers and developers influence both web designers and developers.</p>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center space-x-4">
                                    <img class="w-7 h-7 rounded-full"
                                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                        alt="Jese Leos avatar" />
                                    <span class="font-medium dark:text-white">
                                        Jese Leos
                                    </span>
                                </div>
                                <a href="#"
                                    class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                    Read more
                                    <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                        <article
                            class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex justify-between items-center mb-5 text-gray-500">
                                <span
                                    class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                    <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                            clip-rule="evenodd"></path>
                                        <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                                    </svg>
                                    Article
                                </span>
                                <span class="text-sm">14 days ago</span>
                            </div>
                            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a
                                    href="#">Our first project with React</a></h2>
                            <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Static websites are now used to
                                bootstrap lots of websites and are becoming the basis for a variety of tools that even
                                influence both web designers and developers influence both web designers and developers.</p>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center space-x-4">
                                    <img class="w-7 h-7 rounded-full"
                                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                                        alt="Bonnie Green avatar" />
                                    <span class="font-medium dark:text-white">
                                        Bonnie Green
                                    </span>
                                </div>
                                <a href="#"
                                    class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                    Read more
                                    <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </div>
    </form>
@endsection
