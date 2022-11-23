<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

        $plan = $_POST['product_stripe'];

        $checkout_session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['ideal'],
            'line_items' => [[
                # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
                'price' => $plan,
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => env('APP_URL') . '/succes',
            'cancel_url' => env('APP_URL') . '/annuleren',
        ]);

    }

    public function succes()
    {
        $stripe = new \Stripe\StripeClient('sk_test_51Ko4AEBCYBZIkEQTCzjO4ZFNMvK5tByPD0iOkH0c0JEvFzHXAnuz8nzPt5l1wqbUPlqFxxoM1PEoqzRO1de9t6mh00NbrEU74C');

        $stripeData = $stripe->checkout->sessions->all(['limit' => 1]);

        if ($stripeData->data[0]->status == 'complete') {

            $cus = $stripeData->data[0]->customer;
            $sub = $stripeData->data[0]->subscription;

            $customerData = $stripe->customers->retrieve($cus, []);
            $randomPassword = Str::random(10);

            User::create([
                'name' => $customerData->name,
                'email' => $customerData->email,
                'password' => Hash::make($randomPassword),
                'city' => $customerData->address->city,
                'address' => $customerData->address->line1,
                'postal_code' => $customerData->address->postal_code,
                'cus_id' => $customerData->id,
                'sub_id' => $sub,
            ]);

            auth()->attempt(['email' => $customerData->email, 'password' => $randomPassword]);
        }
        return view('subscriptions.succes');
    }
}
