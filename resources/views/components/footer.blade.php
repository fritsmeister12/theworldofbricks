<div class="p-16" style="background-color: #201D48">
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 md:gap-8 gap-4">
        <div class="flex flex-col flex-shrink-0">
            <div class="dark:text-white">
                <a href="{{ route('home') }}" aria-label="Company" title="Company"
                    class="inline-flex items-center lg:mx-auto">
                    <svg class="w-8 text-red-600" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2"
                        stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                        <rect x="3" y="1" width="7" height="12"></rect>
                        <rect x="3" y="17" width="7" height="6"></rect>
                        <rect x="14" y="1" width="7" height="6"></rect>
                        <rect x="14" y="11" width="7" height="12"></rect>
                    </svg>
                    <span class="ml-2 text-xl font-bold tracking-wide text-white uppercase">The World of Bricks</span>
                </a>
            </div>
            <p class="text-sm leading-none text-gray-300 mt-4 dark:text-gray-300">Copyright © 2022 The World of Bricks
            </p>
            <p class="text-sm leading-none text-gray-300 mt-4 dark:text-gray-300">All rights reserved</p>
        </div>
        <div class="sm:ml-0 ml-8 flex flex-col">
            <h2 class="text-base font-semibold leading-4 text-white uppercase dark:text-gray-300">Link
            </h2>
            <a href="{{ route('producten') }}"
                class="focus:outline-none focus:underline hover:text-gray-500 text-base leading-4 mt-6 text-gray-300 dark:text-gray-300 cursor-pointer">Producten</a>
            <a href="{{ route('over-ons') }}"
                class="focus:outline-none focus:underline hover:text-gray-500 text-base leading-4 mt-6 text-gray-300 dark:text-gray-300 cursor-pointer">Over
                Ons</a>
            <a href="{{ route('bricklink') }}"
                class="focus:outline-none focus:underline hover:text-gray-500 text-base leading-4 mt-6 text-gray-300 dark:text-gray-300 cursor-pointer">Onderdelen</a>
        </div>
        <div class="flex flex-col">
            <h2 class="text-base font-semibold leading-4 text-gray-300 uppercase dark:text-gray-300">Support</h2>
            <a href="{{ route('contact') }}"
                class="focus:outline-none focus:underline hover:text-gray-500 text-base leading-4 mt-6 text-gray-300 dark:text-gray-300 cursor-pointer">Contact</a>
            <a href="{{ route('tos') }}"
                class="focus:outline-none focus:underline hover:text-gray-500 text-base leading-4 mt-6 text-gray-300 dark:text-gray-300 cursor-pointer">Terms
                of service</a>
        </div>
    </div>
</div>
