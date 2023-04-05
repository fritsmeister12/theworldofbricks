@extends('components.master')
@section('title', 'Login')
@section('content')
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        {{-- <div class="max-w-md w-full space-y-8">
            <div>
                <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                    alt="Workflow">
                <h2 class="mt-6 text-center text-3xl font-extrabold text-white">Log in je account</h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Of
                    <a href="{{ route('register') }}" class="font-medium text-yellow-500 hover:text-yellow-600"> maak een
                        account </a>
                </p>
            </div>
            <form class="mt-8 space-y-6" action="#" method="POST">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Email address">
                    </div>
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Password">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox"
                            class="h-4 w-4 text-white focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="remember-me" class="ml-2 block text-sm text-white"> Remember me </label>
                    </div>

                    <div class="text-sm">
                        <a href="#" class="font-medium text-yellow-500 hover:text-yellow-600"> Forgot your password?
                        </a>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-yellow-500 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <!-- Heroicon name: solid/lock-closed -->
                            <svg class="h-5 w-5 text-gray-700 group-hover:text-gray-900" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        Sign in
                    </button>
                </div>
            </form>
        </div> --}}

        <section class="bg-white dark:bg-gray-800">
            <div class="lg:grid lg:min-h-full lg:grid-cols-12">
                <aside class="relative block h-16 lg:order-last lg:col-span-5 lg:h-full xl:col-span-6">
                    <img alt="Pattern"
                        src="https://images.unsplash.com/photo-1609518833016-e36fa49dbd55?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1065&q=80"
                        class="absolute inset-0 h-full w-full rounded object-cover" />
                </aside>

                <main aria-label="Main"
                    class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:py-12 lg:px-16 xl:col-span-6">
                    <div class="max-w-xl lg:max-w-3xl">

                        <img src="{{ url('http://back-lego.test/image/logo.png') }}" class="h-24" alt="">
                        <h1 class="mt-6 text-2xl font-bold text-gray-900 dark:text-white sm:text-3xl md:text-4xl">
                            Welkom bij <span class="text-yellow-400 italic font-semibold">The World of Bricks</span>
                        </h1>

                        <p class="mt-4 leading-relaxed text-gray-500 dark:text-gray-400">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi nam
                            dolorum aliquam, quibusdam aperiam voluptatum.
                        </p>

                        <form action="#" method="POST" class="mt-8 grid grid-cols-6 gap-6">
                            @csrf
                            <input type="hidden" name="remember" value="true">
                            <div class="col-span-6">
                                <label for="Email" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                    Email
                                </label>

                                <input type="email" id="Email" name="email"
                                    class="mt-1 w-full rounded border-gray-200 bg-gray-200 text-sm text-gray-700 shadow-sm  dark:border-gray-700 dark:bg-gray-700/80 p-2 dark:text-gray-200" />
                            </div>

                            <div class="col-span-6 sm:col-span-6">
                                <label for="Password" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                    Password
                                </label>

                                <input type="password" id="Password" name="password"
                                    class="mt-1 w-full rounded border-gray-200 bg-gray-200 text-sm text-gray-700 shadow-sm  dark:border-gray-700 dark:bg-gray-700/80 p-2 dark:text-gray-200" />
                            </div>

                            <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                                <button
                                    class="inline-block shrink-0 rounded-md border border-yellow-400 bg-yellow-400 px-12 py-3 text-sm font-medium text-gray-900 transition hover:bg-transparent hover:text-gray-300 dark:hover:bg-yellow-500 dark:hover:text-white">
                                    Aanmelden
                                </button>

                                <p class="mt-4 text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
                                    Nog geen account?
                                    <a href="{{ route('register') }}"
                                        class="text-gray-700 underline dark:text-gray-200">Registreer
                                        hier</a>.
                                </p>
                            </div>
                        </form>
                    </div>
                </main>
            </div>
        </section>

    </div>
@endsection
