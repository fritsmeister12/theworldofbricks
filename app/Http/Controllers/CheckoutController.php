<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required',
        ]);

        $product = Product::find($request->product_id);

        return view('checkout.show', compact('product'));
    }
}
