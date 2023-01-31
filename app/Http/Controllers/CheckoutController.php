<?php

namespace App\Http\Controllers;

use App\Mail\PaymentConfirm;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        // $this->validate($request, [
        //     'product_id' => 'required',
        // ]);

        // $product = SellProduct::find($request->product_id);

        // return view('checkout.show', compact('product'));
    }

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function succes()
    {
        $email = auth()->user()->email;

        $order = Order::where('user_id', auth()->user()->id)->first();

        // $orderitems = json_decode($order->product_name);

        $maildata = [
            'title' => 'Laravel Mail Sending Example with Markdown',
            'url' => 'http://www.theworldofbricks.nl',
            'orderID' => $order->id,
            'username' => auth()->user()->name,
            'orderItems' => json_decode($order->product_name),
        ];

        // Mail::to($email)->send(new PaymentConfirm($maildata));
        return (new PaymentConfirm($maildata))->render();



        return view('checkout.succes');
    }


    public function pay(Request $request)
    {
        \Stripe\Stripe::setApiKey('sk_test_51Ko4AEBCYBZIkEQTCzjO4ZFNMvK5tByPD0iOkH0c0JEvFzHXAnuz8nzPt5l1wqbUPlqFxxoM1PEoqzRO1de9t6mh00NbrEU74C');

        $stripe = new \Stripe\StripeClient(
            'sk_test_51Ko4AEBCYBZIkEQTCzjO4ZFNMvK5tByPD0iOkH0c0JEvFzHXAnuz8nzPt5l1wqbUPlqFxxoM1PEoqzRO1de9t6mh00NbrEU74C'
        );

        $data = DB::select('select * from users where id =' . auth()->user()->id . '');

        if ($data[0]->cus_id == null) {
            $stripe = new \Stripe\StripeClient(
                'sk_test_51Ko4AEBCYBZIkEQTCzjO4ZFNMvK5tByPD0iOkH0c0JEvFzHXAnuz8nzPt5l1wqbUPlqFxxoM1PEoqzRO1de9t6mh00NbrEU74C'
            );

            $customer = $stripe->customers->search([
                'query' => 'email:"' . auth()->user()->email . '"',
            ]);

            DB::table('users')
                ->where('id', auth()->user()->id)
                ->update(['cus_id' => $customer->data[0]->id]);
        }

        $line_items_array = array();
        $prods_id = array();
        $prices_id = array();
        $prods_name = array();
        $prod_prices = array();
        $prod_quantity = array();

        $totalprice = 0;

        if (session('cart')) {
            foreach (session('cart') as $id => $details) {
                array_push($line_items_array, ['price' => $details['price_id'], 'quantity' => $details['quantity']]);
                array_push($prods_id, $details['prod_id']);
                array_push($prod_prices, $details['price']);
                array_push($prices_id, $details['price_id']);
                array_push($prods_name, $details['name']);
                array_push($prod_quantity, $details['quantity']);
                $totalprice += $details['price'] * $details['quantity'];
            }
        }

        // dd($totalprice);

        // dd($prods_name);

        // $prod = $stripe->products->retrieve(
        //     $request->prod_id,
        // );



        // $price = $stripe->prices->retrieve(
        //     $prod->default_price,
        // );

        $checkout_session = \Stripe\Checkout\Session::create([
            'billing_address_collection' => 'required',
            'shipping_address_collection' => [
                'allowed_countries' => ['NL'],
            ],
            'line_items' => [[$line_items_array]],
            'mode' => 'payment',
            'customer' => $data[0]->cus_id,
            'success_url' => $_ENV['APP_URL'] . '/succes',
            'cancel_url' => $_ENV['APP_URL'] . '/winkelmandje',
        ]);


        // dd($orderProd[0]->name);

        // DB::table('orders')->insert($orderProds[0]);

        $order = Order::create([
            'product_name' =>  json_encode($prods_name),
            'payment_status' => 'Pending',
            'order_status' => 'Geen bevestiging ontvangen',
            'prod_id' => json_encode($prods_id),
            'price_id' => json_encode($prices_id),
            'product_prices' => json_encode($prod_prices),
            'product_quantity' => json_encode($prod_quantity),
            'total_price' => $totalprice,
            'user_id' => auth()->user()->id,

        ]);

        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);
    }
}
