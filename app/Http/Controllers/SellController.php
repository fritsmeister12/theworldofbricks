<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SellProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SellController extends Controller
{
    public function index()
    {
        $data = DB::table('products')
            ->select(DB::raw("max(id) as id"), 'name', 'description', 'bricks_amount', 'price', 'image_thumbnail', 'available', 'category', 'sellable')
            ->groupByRaw('name, description, bricks_amount, price, image_thumbnail, available, category, sellable')
            ->havingRaw('count(*) >= 1')
            ->paginate(6);

        return view('products.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($id)
    {

        $product = Product::find($id);

        return view('products.view', compact('product'));
    }
}
