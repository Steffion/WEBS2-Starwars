@extends('layouts.master')

@section('content')
    @foreach($movies as $movie)
        <h2> {{ $movie->name }} </h2>
        <img id="RO" class="grow" src="{{ $movie->thumbnail }}"/>

        {{ $movie->description }}

        <h3>Price: ${{ $movie->price }}.- USD</h3>
        <button class="shoppingCart" type="button">Add to shopping cart</button>
    @endforeach
@endsection