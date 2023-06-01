@extends('components.master')
@section('title', 'Product')
@section('content')
<div class="p-24 bg-yellow-500 absolute top-0 left-0 w-full" style="background-color: #FFCF00"></div>
    <form action="{{ route('pay') }}">
        @csrf
        <div class="container relative mx-auto">
            <?php $total = 0; ?>
            <section>
                <div class="px-4 py-6 mx-auto sm:px-6 sm:py-6 lg:px-8">
                    <div class="max-w-5xl mx-auto">
                        <header class="text-slate-800">
                            <h1 class="text-xl font-bold sm:text-3xl dark:text-white">Mijn Winkelmandje</h1>
                            <p>Vind hier jou items in je winkelmandje.</p>
                        </header>

                        <div class="mt-8">
                            <ul class="space-y-4">
                                @if (session('cart'))
                                    @foreach (session('cart') as $id => $details)
                                    @php
                                        $images = json_decode($details['photo']);
                                    @endphp
                                        <?php $total += $details['price'] * $details['quantity']; ?>
                                        <li class="flex items-center">
                                            {{-- <img src="{{ url('http://back-lego.test/storage/images/products/' . $images[0]) }}"
                                                alt="" class="object-contain lg:w-36 lg:h-36 w-24 h-24" /> --}}
                                                
                                            <div class="ml-4">
                                                <h3 class="text-sm text-gray-900 dark:text-white">{{ $details['name'] }}
                                                </h3>

                                                <dl class="mt-0.5 space-y-px text-[10px] text-gray-600 dark:text-gray-300">
                                                    <div class="text-xs">
                                                        <dt class="inline">Prijs:</dt>
                                                        <dd class="inline font-bold dark:text-white">
                                                            €{{ $details['price'] }}</dd>
                                                </dl>
                                            </div>


                                            <div class="flex items-center justify-end flex-1 gap-2">
                                                <form>
                                                    <label for="Line1Qty" class="sr-only"> Quantity </label>

                                                    <input type="number" min="1" value="{{ $details['quantity'] }}"
                                                        id="quantity" onkeyup="enforceMinMax(this)"
                                                        class="h-8 w-12 quantity rounded border-gray-200 border-2 bg-gray-50 dark:bg-gray-50 p-0 text-center text-xs text-gray-600 [-moz-appearance:_textfield] focus:outline-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none" />
                                                </form>

                                                <button
                                                    class="text-emerald-500 transition update-cart hover:text-emerald-600"
                                                    data-id="{{ $id }}">
                                                    <span class="sr-only">Edit item</span>

                                                    <i class="fas fa-sync-alt"></i>
                                                </button>

                                                <button class="text-red-600 transition remove-from-cart hover:text-red-700"
                                                    data-id="{{ $id }}">
                                                    <span class="sr-only">Remove item</span>

                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </li>
                                    @endforeach
                                @else
                                    <h1 class="dark:text-white text-gray-900 italic">Je hebt nog niks toegevoegd aan je
                                        mandje...
                                    </h1>
                                @endif
                            </ul>

                            @php
                                $btw = ($total / 121) * 100;
                            @endphp
                            <div class="flex justify-end pt-8 mt-8 border-t border-gray-200">
                                <div
                                    class="w-screen dark:bg-gray-600 shadow-xl bg-gray-50 border-2 border-gray-200 rounded-lg p-6 max-w-xl space-y-4">
                                    <dl class="space-y-0.5 text-sm text-gray-700 dark:text-white">
                                        <div class="flex justify-between">
                                            <dt>Subtotal</dt>
                                            <dd>€{{ number_format($btw, 2) }}</dd>
                                        </div>

                                        <div class="flex justify-between">

                                            <dt>BTW</dt>
                                            <dd>
                                                €{{ number_format($total - $btw, 2) }}
                                            </dd>
                                        </div>

                                        {{-- <div class="flex justify-between">
                                        <dt>Discount</dt>
                                        <dd>-£20</dd>
                                    </div> --}}

                                        <div class="flex justify-between !text-base font-medium">
                                            <dt>Total</dt>
                                            <dd>€{{ $total }}</dd>
                                        </div>
                                    </dl>

                                    {{-- <div class="flex justify-end">
                                    <span
                                        class="inline-flex items-center justify-center rounded-full bg-indigo-100 px-2.5 py-0.5 text-indigo-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="-ml-1 mr-1.5 h-4 w-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 010 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 010-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375z" />
                                        </svg>

                                        <p class="text-xs whitespace-nowrap">2 Discounts Applied</p>
                                    </span>
                                </div> --}}

                                    <div class="flex justify-end">
                                        <button type="submit"
                                            class="block px-5 py-3 text-sm w-full text-gray-900 transition bg-yellow-400 rounded hover:bg-yellow-500">
                                            Afrekenen
                                        </button>

                                    </div>
                                    <p class="px-4 w-full flex items-center justify-center dark:text-gray-200">of<a
                                            href="#" class="ml-1 text-indigo-900 dark:text-yellow-400 font-semibold">
                                            Verder winkelen
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </form>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"
        integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $(".update-cart").click(function(e) {
            e.preventDefault();
            var ele = $(this);
            $.ajax({
                url: '{{ url('winkelmandje-update') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.attr("data-id"),
                    quantity: ele.parents("li").find(".quantity").val()
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });
        $(".remove-from-cart").click(function(e) {
            e.preventDefault();
            var ele = $(this);
            if (confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('winkelmandje-verwijder') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });

        function enforceMinMax(el) {
            if (el.value != "") {
                if (parseInt(el.value) < parseInt(el.min)) {
                    el.value = el.min;
                }
                if (parseInt(el.value) > parseInt(el.max)) {
                    el.value = el.max;
                }
            }
        }
    </script>
@endsection
