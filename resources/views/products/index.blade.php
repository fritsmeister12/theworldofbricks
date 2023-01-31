@extends('components.master')
@section('title', 'Alle Producten')
@section('content')
    <section>
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
            <header>
                <h2 class="text-xl font-bold text-gray-900 dark:text-white sm:text-3xl">
                    Thema's
                </h2>

                <p class="max-w-md mt-4 text-gray-500 dark:text-gray-300">
                    Ben jij opzoek naar een specifieke categorie voor een Lego set? Klik dan hier op je gewenste categorie
                    om alle Lego sets van deze categorie te zien.
                </p>
            </header>

            <ul class="grid gap-4 mt-8 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($data as $categorie)
                    <li>
                        <a href="{{ route('producten-categorie', $categorie->categorie_slug) }}" class="block group">
                            <img src="https://www.lego.com/cdn/cs/set/assets/blt4358b3e85c8e2f41/Architecture-AllThemes-202206-Theme-Preview.jpg?fit=bounds&format=webply&quality=80&width=420&height=200&dpr=2"
                                alt="" class="h-[200px] rounded w-full object-cover sm:h-[200px]" />

                            <div class="mt-3">
                                <h3
                                    class="text-sm text-gray-700 dark:text-white group-hover:underline group-hover:underline-offset-4">
                                    {{ $categorie->categorie_naam }}
                                </h3>

                                <p class="mt-1.5 max-w-[40ch] text-xs text-gray-500 dark:text-gray-300">
                                    {{ $categorie->categorie_beschrijving }}
                                </p>
                            </div>
                        </a>

                    </li>
                @endforeach


                {{-- <li>
                    <a href="{{ route('producten-categorie', 'architecture') }}" class="block group">
                        <img src="https://www.lego.com/cdn/cs/set/assets/blt4358b3e85c8e2f41/Architecture-AllThemes-202206-Theme-Preview.jpg?fit=bounds&format=webply&quality=80&width=420&height=200&dpr=2"
                            alt="" class="h-[200px] rounded w-full object-cover sm:h-[200px]" />

                        <div class="mt-3">
                            <h3 class="text-sm text-gray-700 group-hover:underline group-hover:underline-offset-4">
                                Architecture
                            </h3>

                            <p class="mt-1.5 max-w-[40ch] text-xs text-gray-500">
                                Ontdek de wereld vanuit je luie stoel. LEGO® Architecture-sets bieden bouwers de kans om
                                prachtige monumenten, iconische skylines en beroemde historische gebouwen na te bouwen. Deze
                                indrukwekkende sets zijn een prachtig cadeau voor iedereen met een interesse in reizen,
                                geschiedenis en design.
                            </p>
                        </div>
                    </a>

                </li>

                <li>
                    <a href="#" class="block group">
                        <img src="https://www.lego.com/cdn/cs/set/assets/blt9f63553a9abcd404/ThemeImage-202201-Batman.jpg?fit=bounds&format=webply&quality=80&width=420&height=200&dpr=2"
                            alt="" class="h-[200px] rounded w-full object-cover sm:h-[200px]" />

                        <div class="mt-3">
                            <h3 class="text-sm text-gray-700 group-hover:underline group-hover:underline-offset-4">
                                Batman™
                            </h3>

                            <p class="mt-1.5 max-w-[40ch] text-xs text-gray-500">
                                Van de klassieke tv-serie tot aan de actiefilms, LEGO® Batman™ heeft sets voor kinderen en
                                volwassenen van elke leeftijd. Speel spannende scènes na of bouw authentieke voertuigen om
                                de misdaad te bestrijden.
                            </p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#" class="block group">
                        <img src="https://www.lego.com/cdn/cs/set/assets/bltfaab26fbb2b1f308/ThemeImage-202107-Boost.jpg?fit=bounds&format=webply&quality=80&width=420&height=200&dpr=2"
                            alt="" class="h-[200px] rounded w-full object-cover sm:h-[200px]" />

                        <div class="mt-3">
                            <h3 class="text-sm text-gray-700 group-hover:underline group-hover:underline-offset-4">
                                BOOST
                            </h3>

                            <p class="mt-1.5 max-w-[40ch] text-xs text-gray-500">
                                Met LEGO® BOOST kunnen kinderen modellen maken met motoren en sensoren. Hun creaties komen
                                tot leven via eenvoudige, programmeeropdrachten met pictogrammen.
                            </p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#" class="block group">
                        <img src="https://www.lego.com/cdn/cs/set/assets/blt8159600e72a93537/Brickheadz-202208-Theme-Preview.jpg?fit=bounds&format=webply&quality=80&width=420&height=200&dpr=2"
                            alt="" class="h-[200px] rounded w-full object-cover sm:h-[200px]" />

                        <div class="mt-3">
                            <h3 class="text-sm text-gray-700 group-hover:underline group-hover:underline-offset-4">
                                BrickHeadz
                            </h3>

                            <p class="mt-1.5 max-w-[40ch] text-xs text-gray-500">
                                LEGO® BrickHeadz™ zijn verzamelfiguren die je kunt bouwen en neerzetten om je huis of
                                persoonlijke ruimte wat karakter te geven. Deze figuren van stenen zijn er van schattige
                                dieren, van personages uit stripverhalen, favoriete tv-series en films en er zijn speciale
                                special sets voor de feestdagen.
                            </p>
                        </div>
                    </a>
                </li> --}}
            </ul>
        </div>
    </section>

@endsection
