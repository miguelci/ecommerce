<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home()
    {
        $products = ['Computer', 'Mouse', 'Keyboard'];

        return view('welcome', compact('products'));
    }

    public function about()
    {
        return view('pages.about');
    }
}
