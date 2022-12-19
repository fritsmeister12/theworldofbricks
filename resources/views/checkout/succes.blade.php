@extends('components.master')
@section('title', 'Product')
@section('content')
    <div class="flex flex-col h-screen bg-white">
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
    </div>

@endsection
