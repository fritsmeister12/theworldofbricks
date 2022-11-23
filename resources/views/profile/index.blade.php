@extends('components.master')
@section('title', 'Registreren')
@section('content')
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    <section class="text-gray-600 body-font">
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
                        {{-- <a href="/" class="inline-flex items-center" style="color:#d01012">Aanpassen
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a> --}}
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
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
