<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use App\Models\SellProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required',
        ]);

        $product = SellProduct::find($request->product_id);

        return view('checkout.show', compact('product'));
    }

    public function __construct()
    {
        $this->middleware(['auth']);
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

        $prod = $stripe->products->retrieve(
            $request->prod_id,
        );



        $price = $stripe->prices->retrieve(
            $prod->default_price,
        );

        $checkout_session = \Stripe\Checkout\Session::create([
            'billing_address_collection' => 'required',
            'shipping_address_collection' => [
                'allowed_countries' => ['NL'],
            ],
            'line_items' => [[
                # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
                'price' => $price->id,
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'customer' => $data[0]->cus_id,
            'success_url' => 'http://front-lego.test' . '/success.html',
            'cancel_url' => 'http://front-lego.test' . '/cancel.html',
        ]);

        $orderProd = DB::select('select name, prod_id, price_id from products where price_id ="' . $price->id . '"');

        // dd($orderProd[0]->name);

        // DB::table('orders')->insert($orderProds[0]);

        $order = Order::create([
            'product_name' =>  $orderProd[0]->name,
            'payment_status' => 'Pending',
            'order_status' => 'Geen bevestiging ontvangen',
            'prod_id' => $orderProd[0]->prod_id,
            'price_id' => $orderProd[0]->price_id,
            'user_id' => auth()->user()->id,
        ]);

        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);
    }
}
