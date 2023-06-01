@extends('components.master')
@section('title', 'Contact')
@section('content')
<div class="p-32 bg-yellow-500 absolute top-0 left-0 w-full" style="background-color: #FFCF00"></div>

    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-6 mx-auto flex sm:flex-nowrap flex-wrap">
            <div class="lg:w-2/3 md:w-1/2 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                <iframe class="absolute inset-0" title="map"
                    marginheight="0" marginwidth="0" scrolling="no"
                    src="https://www.google.com/maps/embed/v1/place?q=De+Brinio+30,+Hellevoetsluis,+Nederland&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
                    width="100%" height="100%" frameborder="0"></iframe>
                <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                    <div class="lg:w-1/2 px-6">
                        <h2 class="title-font font-semibold text-gray-900 uppercase tracking-widest text-xs">Adres</h2>
                        <p class="mt-1">
                            De Brinio 30, 3224GE, Hellevoetsluis </p>
                    </div>
                    <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                        <a href="mailto:info@theworldofbricks.com" class="text-indigo-500 leading-relaxed">info@theworldofbricks.com </a>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 md:w-1/2  flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                <h2 class="dark:text-white text-slate-800 text-lg mb-1 font-medium title-font">Contact</h2>
                <p class="leading-relaxed mb-5 text-slate-800">Mocht u vragen hebben of problemen ondervinden. Stuur ons
                    gerust een bericht.
                </p>
                <div class="relative mb-4">
                    <label for="name" class="leading-7 text-sm text-gray-400">Name</label>
                    <input type="text" id="name" name="name"
                        class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-400">Message</label>
                    <textarea id="message" name="message"
                        class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button
                    class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Versturen</button>
            </div>
        </div>
    </section>
@endsection
