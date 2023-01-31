@extends('components.master')
@section('title', 'Product')
@section('content')
    {{-- <div class="flex flex-col h-screen bg-white">
        <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1548&q=80"
            alt="" class="object-cover w-full h-64" />

        <div class="flex items-center justify-center flex-1">
            <div class="max-w-xl px-4 pb-8 mx-auto text-center">
                <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    Betaling geslaagd!
                </h1>

                <p class="mt-4 text-gray-500">
                    Hier wat data
                </p>


                <div>
                    <a href="{{ route('home') }}"
                        class="inline-block px-5 py-3 mt-6 text-sm font-medium text-white bg-yellow-400 rounded hover:bg-indigo-700 focus:outline-none focus:ring">
                        Terug naar home
                    </a>
                    <a href="{{ route('profile') }}"
                        class="inline-block px-5 py-3 mt-6 text-sm font-medium text-white bg-red-500 rounded hover:bg-indigo-700 focus:outline-none focus:ring">
                        Ga naar profiel
                    </a>
                </div>
            </div>
        </div>
    </div> --}}

    <section class="max-w-screen-2xl px-4 pt-16 pb-8 md:px-8 mx-auto">
        <div class="flex flex-wrap justify-between mb-8 md:mb-16">
            <div class="w-full lg:w-1/3 flex flex-col justify-center lg:pt-48 lg:pb-24 mb-6 sm:mb-12 lg:mb-0">
                <h1 class="text-black-800 dark:text-white text-4xl sm:text-5xl md:text-6xl font-bold mb-4 md:mb-8">Find
                    your<br />style
                    online</h1>

                <p class="max-w-md text-gray-500 dark:text-gray-300  xl:text-lg leading-relaxed">This is a section of some
                    simple filler
                    text, also known as placeholder text. It shares characteristics of real text.</p>
            </div>

            <div class="w-full lg:w-2/3 flex mb-12 md:mb-16">
                <div
                    class="bg-gray-100 rounded-lg shadow-lg overflow-hidden relative z-10 top-12 md:top-16 left-12 md:left-16 -ml-12 lg:ml-0">
                    <img src="https://images.unsplash.com/photo-1542340916-951bb72c8f74?auto=format&q=75&fit=crop&w=550&h=550"
                        loading="lazy" alt="Photo by Kaung Htet" class="w-full h-full object-cover object-center" />
                </div>

                <div class="bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1586295166487-b265f7e83a7f?auto=format&q=75&fit=crop&w=550&h=550"
                        loading="lazy" alt="Photo by Manny Moreno" class="w-full h-full object-cover object-center" />
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="w-64 h-12 flex rounded-lg overflow-hidden divide-gray-900 divide-x">
                <a href="{{ route('home') }}"
                    class="w-1/2 flex justify-center bg-yellow-400 items-center hover:bg-yellow-600 active:bg-yellow-400 text-gray-900 transition duration-100">Naar
                    home</a>
                <a href="{{ route('profile') }}"
                    class="w-1/2 flex justify-center bg-red-600 items-center hover:bg-red-700 active:bg-red-700 text-gray-200 transition duration-100">Ga
                    naar profiel</a>
            </div>
        </div>
    </section>

@endsection
