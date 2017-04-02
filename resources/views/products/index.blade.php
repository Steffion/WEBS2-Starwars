@extends('layouts.master')

@section('content')
    <div class="row">
        @foreach($products as $product)
            <div class="col-lg-3">
                <h2><a href="/products/{{ $product->id }}">{{ $product->name }}</a></h2>
                <img id="RO" src="data:image/*;base64,{{ $product->thumbnail }}"/>

                {{ $product->description }}

                <h3>Price: ${{ $product->price }} USD</h3>
                <a class="shoppingCart" href="/cart/add/{{ $product->id }}">Add to shopping cart</a>
            </div>
        @endforeach
    </div>
    <div class="row center-block">
        {{ $products->links() }}
    </div>
@endsection