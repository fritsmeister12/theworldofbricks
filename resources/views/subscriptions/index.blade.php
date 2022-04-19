@extends('components.master')
@section('title', 'Prijzen')
@section('content')
    <div class="lg:flex items-center justify-between p-16 ">
        <div class="lg:w-1/2 w-full">
            <p class="text-base leading-4 text-gray-600 dark:text-gray-200">Choose your plan</p>
            <h1 role="heading" class="md:text-5xl text-3xl font-bold leading-10 mt-3 text-gray-800 dark:text-white">Our
                pricing plan</h1>
            <p role="contentinfo" class="text-base leading-5 mt-5 text-gray-600 dark:text-gray-200">We’re working on a suit
                of tools to make managing complex systems easier, for everyone for free. we can’t wait to hear what you
                think</p>
            <div class="w-56">
                <button onclick="toggleIt()"
                    class="bg-gray-100 dark:bg-gray-800 shadow rounded-full flex items-center mt-10 rounded-full">
                    <div class="bg-gray-100 dark:bg-gray-800 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none text-base leading-none text-gray-600 dark:text-gray-200 rounded-full py-4 px-6 mr-1"
                        id="monthly">Monthly</div>
                    <div class="bg-yellow-500 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none text-base leading-none text-white rounded-full py-4 px-6"
                        id="annually">Annually</div>
                </button>
            </div>
        </div>
        <div class="xl:w-1/2 lg:w-7/12 relative w-full lg:mt-0 mt-12 md:px-8" role="list">
            <img src="https://i.ibb.co/0n6DSS3/bgimg.png" class="absolute w-full -ml-12 mt-24"
                alt="background circle images" />
            <div role="listitem" class="bg-white dark:bg-gray-700 cursor-pointer shadow rounded-lg p-8 relative z-30">
                <div class="md:flex items-center justify-between">
                    <h2 class="text-2xl font-semibold leading-6 text-gray-800 dark:text-white">Starter</h2>
                    <p class="text-2xl font-semibold md:mt-0 mt-4 leading-6 text-gray-800 dark:text-white">FREE</p>
                </div>
                <p class="md:w-80 text-base leading-6 mt-4 text-gray-600 dark:text-gray-200">Full access to all features and
                    no credit card required</p>
                <form action="{{ route('checkout') }}" method="POST">
                    @csrf
                    <input type="hidden" name="plan" value="price_1Ko4hLBCYBZIkEQTSUQEAimK">
                    <button id="checkout-and-portal-button"
                        class="bg-yellow-500  text-base leading-none text-white rounded py-4 mt-4 px-4"
                        type="submit">Checkout</button>
                </form>
            </div>
            <div role="listitem" class="bg-white dark:bg-gray-600 shadow rounded-lg mt-3 flex relative z-30">
                <div class="w-2.5 h-auto bg-yellow-500 rounded-tl-md rounded-bl-md"></div>
                <div class="w-full p-8">
                    <div class="md:flex items-center justify-between">
                        <h2 class="text-2xl font-semibold leading-6 text-gray-800 dark:text-white">Personal</h2>
                        <p class="text-2xl md:mt-0 mt-4 font-semibold leading-6 text-gray-800 dark:text-white">$18<span
                                class="font-normal text-base">/mo</span></p>
                    </div>
                    <p class="md:w-80 text-base leading-6 mt-4 text-gray-600 dark:text-gray-200">Unlimited products features
                        and dedicated support channels</p>
                    <form action="{{ route('checkout') }}" method="POST">
                        @csrf
                        <input type="hidden" name="plan" value="price_1Ko4heBCYBZIkEQTanBuV5Ja">
                        <button id="checkout-and-portal-button"
                            class="bg-yellow-500  text-base leading-none text-white rounded py-4 mt-4 px-4"
                            type="submit">Checkout</button>
                    </form>
                </div>
            </div>
            <div role="listitem" class="bg-white dark:bg-gray-700 cursor-pointer shadow rounded-lg p-8 relative z-30 mt-7">
                <div class="md:flex items-center justify-between">
                    <h2 class="text-2xl font-semibold leading-6 text-gray-800 dark:text-white">Team</h2>
                    <p class="text-2xl md:mt-0 mt-4 font-semibold leading-6 text-gray-800 dark:text-white">$18<span
                            class="font-normal text-base">/mo</span></p>
                </div>
                <p class="md:w-80 text-base leading-6 mt-4 text-gray-600 dark:text-gray-200">Unlimited products features and
                    dedicated support channels</p>
                <form action="{{ route('checkout') }}" method="POST">
                    @csrf
                    <input type="hidden" name="plan" value="price_1Ko4hoBCYBZIkEQTvIuQlFVM">
                    <button id="checkout-and-portal-button"
                        class="bg-yellow-500  text-base leading-none text-white rounded py-4 mt-4 px-4"
                        type="submit">Checkout</button>
                </form>
            </div>
        </div>
    </div>
@endsection
