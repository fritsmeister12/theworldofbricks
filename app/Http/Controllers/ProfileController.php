<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        $stripe = new \Stripe\StripeClient(
            'sk_test_51Ko4AEBCYBZIkEQTCzjO4ZFNMvK5tByPD0iOkH0c0JEvFzHXAnuz8nzPt5l1wqbUPlqFxxoM1PEoqzRO1de9t6mh00NbrEU74C'
        );

        $data = DB::select('select * from users where id =' . auth()->user()->id . '');

        if ($data[0]->cus_id == null) {
            $customers = $stripe->customers->search([
                'query' => 'email:"' . auth()->user()->email . '"',
            ]);

            DB::table('users')
                ->where('id', auth()->user()->id)
                ->update(['cus_id' => $customers->data[0]->id]);
        }

        $customer = $stripe->customers->retrieve(
            auth()->user()->cus_id
        );

        $orders = $stripe->charges->search([
            'query' => 'customer:"' . auth()->user()->cus_id . '"',
        ]);


        return view('profile.index', compact('orders', 'customer'));
    }
}
