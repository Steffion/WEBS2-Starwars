<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);

        return view('products.index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function figures()
    {
        $products = Product::where('category', '=', 'figures')->paginate(10);

        return view('products.index', compact('products'));
    }

    public function clothes()
    {
        $products = Product::where('category', '=', 'clothes')->paginate(10);

        return view('products.index', compact('products'));
    }

    public function movies()
    {
        $products = Product::where('category', '=', 'movies')->paginate(10);

        return view('products.index', compact('products'));
    }

    public function plushies()
    {
        $products = Product::where('category', '=', 'plushies')->paginate(10);

        return view('products.index', compact('products'));
    }
}
