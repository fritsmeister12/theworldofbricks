@extends('components.master')
@section('title', 'Registreren')
@section('content')
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                    alt="Workflow">
                <h2 class="mt-6 text-center text-3xl font-extrabold text-white">Maak je account</h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Of
                    <a href="#" class="font-medium text-yellow-500 hover:text-yellow-600"> log in op je account</a>
                </p>
            </div>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="relative w-full mb-3">
                    <label class="block uppercase text-white text-xs font-bold mb-2" htmlfor="grid-password">
                        Name</label>
                    <input type="text"
                        class="border-0 px-3 py-3 placeholder-gray-700 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Name" name="name" id="name" value="{{ old('name') }}">
                    @error('name')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative w-full mb-3">
                    <label class="block uppercase text-white text-xs font-bold mb-2" htmlfor="grid-password">Email</label>
                    <input type="email"
                        class="border-0 px-3 py-3 placeholder-gray-700 text-gray-700  bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Email" value="{{ old('email') }}" name="email" id="email">
                </div>

                <div class="relative w-full mb-3">
                    <label class="block uppercase text-white text-xs font-bold mb-2"
                        htmlfor="grid-password">Password</label>
                    <input type="password"
                        class="border-0 px-3 py-3 placeholder-gray-700 text-gray-700  bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Password" name="password" id="password">
                </div>

                <div class="relative w-full mb-3">
                    <label class="block uppercase text-white text-xs font-bold mb-2" htmlfor="grid-password">Repeat
                        Password</label>
                    <input type="password"
                        class="border-0 px-3 py-3 placeholder-gray-700 text-gray-700  bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Repeat Password" name="password_confirmation" id="password_confirmation">
                </div>

                <div>
                    <label class="inline-flex items-center cursor-pointer">
                        <input id="customCheckLogin" type="checkbox" required
                            class="form-checkbox border-0 rounded text-white- ml-1 w-5 h-5 ease-linear transition-all duration-150">
                        <span class="ml-2 text-sm font-semibold text-white">
                            I agree with the
                            <a href="javascript:void(0)" class="text-yellow-500">
                                Privacy Policy
                            </a>
                        </span>
                    </label>
                </div>

                <div class="text-center mt-6">
                    <button
                        class="bg-yellow-500 text-white active:bg-white text-sm font-bold px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                        type="submit">
                        Maak account
                    </button>
                </div>
            </form>

        </div>
    </div>
@endsection
