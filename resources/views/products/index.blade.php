@extends('layouts.master')

@section('content')
    <div class="row">
        @foreach($products as $product)
            <div class="col-lg-3">
                <h2> {{ $product->name }} </h2>
                <img id="RO" class="grow" src="data:image/*;base64,{{ $product->thumbnail }}"/>

                {{ $product->description }}

                <h3>Price: ${{ $product->price }}.- USD</h3>
                <button class="shoppingCart" type="button">Add to shopping cart</button>
            </div>
        @endforeach
    </div>
    <div class="row center-block">
        {{ $products->links() }}
    </div>
@endsection