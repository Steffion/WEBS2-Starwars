<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function figures()
    {
        $products = Product::where('category', '=', 'figures')->get();

        return view('products.index', compact('products'));
    }

    public function clothes()
    {
        $products = Product::where('category', '=', 'clothes')->get();

        return view('products.index', compact('products'));
    }

    public function movies()
    {
        $products = Product::where('category', '=', 'movies')->get();

        return view('products.index', compact('products'));
    }

    public function plushies()
    {
        $products = Product::where('category', '=', 'plushies')->get();

        return view('products.index', compact('products'));
    }
}
