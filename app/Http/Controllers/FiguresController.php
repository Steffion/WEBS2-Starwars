<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FiguresController extends Controller
{
    public function index()
    {
        $products = Product::where('category', '=', 'figures')->get();

        return view('products.index', compact('products'));
    }
}
