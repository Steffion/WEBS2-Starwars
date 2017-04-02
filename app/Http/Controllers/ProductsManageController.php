<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProductsManageController extends Controller
{
    public function __construct()
    {
        $this->middleware('isadmin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate();
        $body = view('dashboard.products.index', compact('products'));

        return view('dashboard.index', compact('body'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $body = view('dashboard.products.create', compact('categories'));

        return view('dashboard.index', compact('body'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
            'thumbnail' => 'required',
            'description' => 'required',
        ]);

        $product = new Product();

        $product->name = request('name');
        $product->price = request('price');
        $product->category = request('category');
        $product->thumbnail = base64_encode(file_get_contents(Input::file('thumbnail')));
        $product->description = request('description');

        $product->save();

        return redirect('/dashboard/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $body = view('dashboard.products.edit', compact(['product', 'categories']));

        return view('dashboard.index', compact('body'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate(request(), [
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
            'description' => 'required',
        ]);

        $product->name = request('name');
        $product->price = request('price');
        $product->category = request('category');

        if (Input::hasFile('thumbnail')) {
            $product->thumbnail = base64_encode(file_get_contents(Input::file('thumbnail')));
        }

        $product->description = request('description');

        $product->save();

        return redirect('/dashboard/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/dashboard/products');
    }
}
