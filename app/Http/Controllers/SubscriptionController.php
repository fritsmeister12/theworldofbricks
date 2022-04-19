<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Plan;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index()
    {
        return view('subscriptions.index');
    }

    public function checkout()
    {
        \Stripe\Stripe::setApiKey('sk_test_51Ko4AEBCYBZIkEQTCzjO4ZFNMvK5tByPD0iOkH0c0JEvFzHXAnuz8nzPt5l1wqbUPlqFxxoM1PEoqzRO1de9t6mh00NbrEU74C');

        header('Content-Type: application/json');

        $plan = $_POST['plan'];

        $checkout_session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['sepa_debit'],
            'line_items' => [[
                # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
                'price' => $plan,
                'quantity' => 1,
            ]],
            'mode' => 'subscription',
            'success_url' => env('APP_URL') . '/succes',
            'cancel_url' => env('APP_URL') . '/annuleren',
        ]);

        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);
    }

    public function succes()
    {
        $stripe = new \Stripe\StripeClient('sk_test_51Ko4AEBCYBZIkEQTCzjO4ZFNMvK5tByPD0iOkH0c0JEvFzHXAnuz8nzPt5l1wqbUPlqFxxoM1PEoqzRO1de9t6mh00NbrEU74C');


        $data = $stripe->checkout->sessions->retrieve(
            'cs_test_a1t3wDcFGdcqGcH7EL4aRwMP09u2r7ZFMWVkz9QP1L850dGP5EYOCYbmtK',
            []
        );
        $stripeData = $stripe->checkout->sessions->all(['limit' => 1]);

        dd($data);



        return view('subscriptions.succes');
    }
}
