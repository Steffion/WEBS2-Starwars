@extends('layouts.master')

@section('content')
    <div class="row">

        @if($products->count() != 0)
            @foreach($products as $product)
                <div class="col-lg-3">
                    <h2><a href="/products/view/{{ $product->id }}">{{ $product->name }}</a></h2>
                    <img id="RO" src="data:image/*;base64,{{ $product->thumbnail }}"/>

                    {{ $product->description }}

                    <h3>Price: ${{ $product->price }} USD</h3>
                    <a class="shoppingCart" href="/cart/add/{{ $product->id }}">Add to shopping cart</a>
                </div>
            @endforeach
        @else
            <div class="mx-auto">
                <h3>No results found.</h3>
            </div>
        @endif
    </div>
    <div class="row center-block">
        {{ $products->links() }}
    </div>
@endsection