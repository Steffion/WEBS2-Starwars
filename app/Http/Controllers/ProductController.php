<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(12);

        return view('products.index', compact('products'));
    }

    public function filter(Category $category)
    {
        $products = Product::where('category', $category->name)->paginate(12);

        return view('products.index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function search() {
        $products = Product::where('name', 'like', '%' . $_GET['q'] . '%')->paginate(12);
        return view('products.index', compact('products'));
    }
}
