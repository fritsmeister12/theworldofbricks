@extends('components.master')
@section('title', 'Registreren')
@section('content')
    {{-- <section class="text-gray-600 body-font">
        <div class="container px-5 py-12 mx-auto flex flex-col">
            <div class="lg:w-4/6 mx-auto">
                <div class="flex flex-col sm:flex-row mt-10">
                    <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                        <div
                            class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div class="flex flex-col items-center text-center justify-center">
                            <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">{{ auth()->user()->name }}</h2>
                            <h2 class="font-medium title-font text-gray-500 text-xs">{{ auth()->user()->email }}</h2>
                            <div class="w-12 h-1 rounded mt-2 mb-4" style="background-color: #d01012"></div>
                            <p class="text-base"></p>
                        </div>
                    </div>
                    <div
                        class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                        @if ($customer->shipping != null)
                            <h3 class="text-black text-lg font-bold">Stad</h3>
                            <p class="leading-relaxed text-lg mb-4">{{ $customer->shipping->address->city }}</p>
                            <h3 class="text-black text-lg font-bold">Adres</h3>
                            <p class="leading-relaxed text-lg mb-4">{{ $customer->shipping->address->line1 }}</p>
                            <h3 class="text-black text-lg font-bold">Postcode</h3>
                            <p class="leading-relaxed text-lg mb-4">{{ $customer->shipping->address->postal_code }}</p>
                        @else
                            <h3 class="text-black text-lg font-bold">Stad</h3>
                            <p class="leading-relaxed text-lg mb-4">Niet bekend!</p>
                            <h3 class="text-black text-lg font-bold">Adres</h3>
                            <p class="leading-relaxed text-lg mb-4">Niet bekend!</p>
                            <h3 class="text-black text-lg font-bold">Postcode</h3>
                            <p class="leading-relaxed text-lg mb-4">Niet bekend!</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col">
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                    <div class="w-24 h-full" style="background-color: #d01012"></div>
                </div>
                <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                    <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">Recente Orders
                    </h1>
                    <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">Hier vind je al jouw laatste bestellingen.
                        Heb jij geen bestellingen gemaakt? Ga dan naar webshop om een bestelling te plaatsen.</p>
                </div>
            </div>
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                @foreach ($orders as $order)
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div>
                            <div class="flex">
                                <h6 class="mr-2 text-4xl font-bold md:text-5xl">
                                    €{{ $order->amount / 100 }}
                                </h6>
                            </div>
                            <p class="mb-2 font-bold md:text-lg">
                                @if ($order->status == 'succeeded')
                                    <span class="text-emerald-500">Afgerond</span>
                                @elseif ($order->status == 'pending')
                                    <span class="text-orange-500">Bezig</span>
                                @endif
                            </p>
                            <p class="text-gray-700">
                                {{ $order->description }}
                            </p>
                        </div>
                        <a href="{{ $order->receipt_url }}" class="inline-flex font-bold items-center mt-3">Klik hier voor
                            de bon
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div> @endforeach
            </div>
        </div>
    </section> --}}
    <div class="p-40 bg-yellow-500 absolute top-0 left-0 w-full" style="background-color: #FFCF00"></div>
    <div class="relative rounded-2xl col-span-4 lg:h-64 h-56 w-full my-4 flex items-end justify-start text-left bg-cover bg-center"
                style="background-image:url(https://manly.bladecdn.net/wp-content/uploads/2022/11/LEGO-Architecture-Taj-Mahal-21056-uren-bouwplezier-met-fantastich-resultaat.jpg);">
                <div
                    class="absolute rounded-b-2xl top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                </div>

                <main class="p-5 z-10">
                    <h1 class="text-3xl font-semibold text-white lg:text-4xl">Mijn Profiel
                    </h1>
                    <p class="mt-2 text-gray-300">Bekijk hier jou gegevens en je recente bestellingen.</p>
                </main>
    </div>
    <div class="w-full
        mx-auto py-12">
        <div class="flex flex-wrap -mx-3">


            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 lg:1/3 md:flex-0">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-gray-50 rounded-2xl shadow-xl dark:bg-slate-700 border-2 border-gray-200 dark:bg-slate-850 bg-clip-border">
                    <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid py-4 px-6 pb-0">
                        <div class="flex items-center">
                            <p class="mb-0 dark:text-white/80">Klant Gegevens</p>
                            <button type="button"
                                class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-yellow-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Wijzig</button>
                        </div>
                    </div>
                    <div class="flex-auto px-6 pb-6 pt-2">
                        <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Klant
                            Informatie</p>
                        <div class="flex flex-wrap -mx-3">

                            <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                                <div class="mb-4">
                                    <label for="first name"
                                        class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Naam</label>
                                    <input type="text" name="first name" value="{{ $customer->name }}" disabled
                                        class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm dark:bg-slate-600 leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-yellow-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                                <div class="mb-4">
                                    <label for="email"
                                        class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Email
                                        adres</label>
                                    <input type="email" name="email" value="{{ $customer->email }}" disabled
                                        class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white dark:bg-slate-600 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-yellow-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                                <div class="mb-4">
                                    <label for="last name"
                                        class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Telefoonnummer</label>
                                    <input type="text" name="last name" value="Lucky" disabled
                                        class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm dark:bg-slate-600 leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-yellow-500 focus:outline-none" />
                                </div>
                            </div>
                        </div>
                        <hr
                            class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />

                        <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Verzend
                            Informatie</p>
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                                <div class="mb-4">
                                    <label for="address"
                                        class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Address</label>
                                    <input type="text" name="address" disabled
                                        value="{{ $customer->shipping->address->line1g }}"
                                        class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm dark:bg-slate-600 leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-yellow-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-1/2 md:flex-0">
                                <div class="mb-4">
                                    <label for="city"
                                        class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">City</label>
                                    <input type="text" name="city" value="{{ $customer->shipping->address->city }}"
                                        disabled
                                        class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm dark:bg-slate-600 leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-yellow-500 focus:outline-none" />
                                </div>
                            </div>

                            <div class="w-full max-w-full px-3 shrink-0 md:w-1/2 md:flex-0">
                                <div class="mb-4">
                                    <label for="postal code"
                                        class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Postal
                                        code</label>
                                    <input type="text" name="postal code"
                                        value="{{ $customer->shipping->address->postal_code }}"
                                        class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm dark:bg-slate-600 leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-yellow-500 focus:outline-none" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-full px-3 lg:w-2/3 md:8/12 lg:flex-none">
                <div
                    class="relative flex flex-col pb-2 h-content min-w-0 break-words bg-gray-50 shadow-xl dark:bg-slate-700 border-2 border-gray-200 border-solid dark:bg-slate-850 rounded-2xl bg-clip-border">
                    <div class="p-4 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <div class="flex flex-wrap -mx-3">
                            <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                                <h6 class="mb-0 dark:text-white">Orders</h6>
                            </div>
                            <div class="flex-none w-1/2 max-w-full px-3 text-right">
                                <p
                                    class="inline-block px-8 py-2 mb-0 text-xs font-bold leading-normal text-center text-yellow-500 align-middle transition-all ease-in bg-transparent border border-yellow-500 border-solid rounded-lg shadow-none cursor-default bg-150 active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 hover:opacity-75">
                                    {{ Count($orders) }}
                                    Orders</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-auto p-4 pb-0">
                        <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                            @foreach ($orders as $order)
                                <li
                                    class="relative flex justify-between px-4 py-2 pl-0 mb-2 border-0 rounded-t-inherit text-inherit rounded-xl">
                                    <div class="flex flex-col">
                                        <h6 class="mb-1 text-sm font-semibold leading-normal dark:text-white text-slate-700">
                                            {{ $order->product_name }}</h6>
                                        <span class="text-xs leading-tight dark:text-white dark:opacity-80">
                                            @if ($order->status == 'succeeded')
                                                <span class="text-emerald-500">Afgerond</span>
                                            @elseif ($order->status == 'pending')
                                                <span class="text-orange-500">Bezig</span>
                                            @endif</span>
                                    </div>
                                    <div class="flex items-center text-sm leading-normal dark:text-white/80">
                                        €{{ $order->amount / 100 }}
                                        <a href="{{ $order->receipt_url }}"
                                            class="dark:text-white inline-block px-0 py-2.5 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-in bg-150 text-xs active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 text-slate-700">
                                            <i class="fas fa-link mr-1"></i>Bekijk</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
