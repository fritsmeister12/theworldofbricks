<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Categorie::paginate(8);

        return view('products.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function categorie($categorie)
    {

        $data = Product::where('category', $categorie)->paginate(8);

        $categorie = $categorie;

        return view('products.index-products', compact('data', 'categorie'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($categorie, $id)
    {
        $product = Product::find($id);

        return view('products.view', compact('product'));
    }
}
