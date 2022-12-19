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
                                class="rounded-full border border-blue-600 bg-gray-100 px-3 py-0.5 text-xs font-medium tracking-wide text-blue-600">
                                Pre Order
                            </strong>

                            <div class="flex justify-between mt-8">
                                <div class="max-w-[35ch]">
                                    <h1 class="text-2xl font-bold">
                                        Fun Product That Does Something Cool
                                    </h1>

                                    <p class="mt-0.5 text-sm">Highest Rated Product</p>

                                    <div class="mt-2 -ml-0.5 flex">
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
                                    </div>
                                </div>

                                <p class="text-lg font-bold">€{{ $product->price }}</p>
                            </div>

                            <details class="group relative mt-4 [&_summary::-webkit-details-marker]:hidden">
                                <summary class="block">
                                    <div>
                                        <div class="prose max-w-none group-open:hidden">
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                                                veniam dicta beatae eos ex error culpa delectus rem tenetur,
                                                architecto quam nesciunt, dolor veritatis nisi minus
                                                inventore, rerum at recusandae?
                                            </p>
                                        </div>

                                        <span
                                            class="mt-4 text-sm font-medium underline cursor-pointer group-open:absolute group-open:bottom-0 group-open:left-0 group-open:mt-0">
                                            Read More
                                        </span>
                                    </div>
                                </summary>

                                <div class="pb-6 prose max-w-none">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                                        veniam dicta beatae eos ex error culpa delectus rem tenetur,
                                        architecto quam nesciunt, dolor veritatis nisi minus inventore,
                                        rerum at recusandae?
                                    </p>

                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat
                                        nam sapiente nobis ea veritatis error consequatur nisi
                                        exercitationem iure laudantium culpa, animi temporibus non! Maxime
                                        et quisquam amet. A, deserunt!
                                    </p>
                                </div>
                            </details>

                            <form class="mt-8">
                                <fieldset>
                                    <legend class="mb-1 text-sm font-medium">Color</legend>

                                    <div class="flow-root">
                                        <div class="-m-0.5 flex flex-wrap">
                                            <label for="color_tt" class="cursor-pointer p-0.5">
                                                <input type="radio" name="color" id="color_tt" class="sr-only peer" />

                                                <span
                                                    class="inline-block px-3 py-1 text-xs font-medium border rounded-full group peer-checked:bg-black peer-checked:text-white">
                                                    Texas Tea
                                                </span>
                                            </label>

                                            <label for="color_fr" class="cursor-pointer p-0.5">
                                                <input type="radio" name="color" id="color_fr"
                                                    class="sr-only peer" />

                                                <span
                                                    class="inline-block px-3 py-1 text-xs font-medium border rounded-full group peer-checked:bg-black peer-checked:text-white">
                                                    Fiesta Red
                                                </span>
                                            </label>

                                            <label for="color_cb" class="cursor-pointer p-0.5">
                                                <input type="radio" name="color" id="color_cb"
                                                    class="sr-only peer" />

                                                <span
                                                    class="inline-block px-3 py-1 text-xs font-medium border rounded-full group peer-checked:bg-black peer-checked:text-white">
                                                    Cobalt Blue
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="mt-4">
                                    <legend class="mb-1 text-sm font-medium">Size</legend>

                                    <div class="flow-root">
                                        <div class="-m-0.5 flex flex-wrap">
                                            <label for="size_xs" class="cursor-pointer p-0.5">
                                                <input type="radio" name="size" id="size_xs"
                                                    class="sr-only peer" />

                                                <span
                                                    class="inline-flex items-center justify-center w-8 h-8 text-xs font-medium border rounded-full group peer-checked:bg-black peer-checked:text-white">
                                                    XS
                                                </span>
                                            </label>

                                            <label for="size_s" class="cursor-pointer p-0.5">
                                                <input type="radio" name="size" id="size_s"
                                                    class="sr-only peer" />

                                                <span
                                                    class="inline-flex items-center justify-center w-8 h-8 text-xs font-medium border rounded-full group peer-checked:bg-black peer-checked:text-white">
                                                    S
                                                </span>
                                            </label>

                                            <label for="size_m" class="cursor-pointer p-0.5">
                                                <input type="radio" name="size" id="size_m"
                                                    class="sr-only peer" />

                                                <span
                                                    class="inline-flex items-center justify-center w-8 h-8 text-xs font-medium border rounded-full group peer-checked:bg-black peer-checked:text-white">
                                                    M
                                                </span>
                                            </label>

                                            <label for="size_l" class="cursor-pointer p-0.5">
                                                <input type="radio" name="size" id="size_l"
                                                    class="sr-only peer" />

                                                <span
                                                    class="inline-flex items-center justify-center w-8 h-8 text-xs font-medium border rounded-full group peer-checked:bg-black peer-checked:text-white">
                                                    L
                                                </span>
                                            </label>

                                            <label for="size_xl" class="cursor-pointer p-0.5">
                                                <input type="radio" name="size" id="size_xl"
                                                    class="sr-only peer" />

                                                <span
                                                    class="inline-flex items-center justify-center w-8 h-8 text-xs font-medium border rounded-full group peer-checked:bg-black peer-checked:text-white">
                                                    XL
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="flex mt-8">
                                    <button type="submit"
                                        class="block px-5 py-3 text-xs font-medium text-white bg-green-600 rounded hover:bg-green-500">
                                        Bestellen
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>


            <div class="w-full px-6 mx-auto pt-6 flex flex-wrap">
                <img alt="ecommerce" class="lg:w-3/4 w-full lg:h-auto h-64 object-cover object-center rounded"
                    src="{{ url('http://back-lego.test/storage/images/products/' . $product->image_thumbnail) }}">
                <div class="lg:w-1/4 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ $product->category }}</h2>
                    <h1 class="text-black text-3xl title-font font-medium mb-1">{{ $product->name }}</h1>
                    {{-- <div class="flex mb-4">
                    <span class="flex items-center">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 text-indigo-400" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 text-indigo-400" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 text-indigo-400" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 text-indigo-400" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 text-indigo-400" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <span class="ml-3">4 Reviews</span>
                    </span>
                    <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-800 text-gray-500 space-x-2">
                        <a>
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a>
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path
                                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                </path>
                            </svg>
                        </a>
                        <a>
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path
                                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                </path>
                            </svg>
                        </a>
                    </span>
                </div> --}}
                    <div class="mt-4">
                        <h3 class="text-sm font-medium text-gray-900">Omschrijving</h3>

                        <p class="leading-relaxed">{{ $product->description }}</p>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sm font-medium text-gray-900">Specificaties</h3>

                        <div class="mt-2">
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
                    <div class="flex items-center pb-5 border-b-2 border-gray-800 mb-5">
                        {{-- <div class="flex items-center">
                        <span class="mr-3">Hoeveelheid</span>
                        <div class="relative">
                            <select
                                class="rounded border border-yellow-400 focus:ring-2  bg-yellow-400 appearance-none py-2 focus:outline-none text-black pl-3 pr-10"
                                style="background-color: #FFCF00; border-color:#FFCF00">
                                <option>1</option>
                                <option>2</option>
                            </select>
                            <span
                                class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </div>
                    </div> --}}
                    </div>
                    <div class="flex">
                        <span class="title-font font-bold text-2xl text-black">€{{ $product->price }}</span>
                        <button type="submit"
                            class="flex ml-auto text-black border-0 py-2 px-12 focus:outline-none rounded"
                            style="background-color: #FFCF00">Kopen</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
