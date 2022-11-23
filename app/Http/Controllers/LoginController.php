<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $stripe = new \Stripe\StripeClient(
            'sk_test_51Ko4AEBCYBZIkEQTCzjO4ZFNMvK5tByPD0iOkH0c0JEvFzHXAnuz8nzPt5l1wqbUPlqFxxoM1PEoqzRO1de9t6mh00NbrEU74C'
        );

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $customer = $stripe->customers->search([
            'query' => 'email:"' . $request->email . '"',
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('status', 'Invalid login details');
        }


        return redirect()->route('profile')->with('message', 'Succesvol ingelogd');
    }
}
