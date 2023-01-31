<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    public function index()
    {
        // $data = DB::table('products')
        //     ->select(DB::raw("max(id) as id"), 'name', 'description', 'bricks_amount', 'price', 'image_thumbnail', 'available', 'category')
        //     ->groupByRaw('name, description, bricks_amount, price, image_thumbnail, available, category')
        //     ->havingRaw('count(*) >= 1')
        //     ->get();

        $data = Product::get();

        // $data = DB::select('select * from products where available = 1');

        return view('index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
