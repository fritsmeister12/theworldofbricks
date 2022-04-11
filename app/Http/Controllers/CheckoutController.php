<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    public function show(Request $request, $id)
    {

        $product = Product::find($id);

        return view('checkout.show', compact('product'));
    }
}
