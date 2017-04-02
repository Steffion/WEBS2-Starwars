@extends('layouts.master')

@section('content')
    <div class="jumbotron mx-auto">
        <div class="container">
            <h2>{{ $product->name }}</h2>
            <img src="data:image/*;base64,{{ $product->thumbnail }}" class="pull-right" width="200" height="200"/>

            {{ $product->description }}
            <br>
            <br>

            <h3>Price: ${{ $product->price }} USD</h3>
            <br>
            <a class="shoppingCart" href="/cart/add/{{ $product->id }}">Add to shopping cart</a>

        </div>
    </div>
@endsection
