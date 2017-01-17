<?php

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index()
    {
        //$products = DB::table('product')->get();
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function show(Product $product)
    {
        //$product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }
}
