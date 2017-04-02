<?php
/**
 * Created by PhpStorm.
 * User: Nutellie
 * Date: 4/2/2017
 * Time: 2:08 PM
 */
?>


@extends('layouts.master')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h2>Your order has been received!</h2>
            <p>Order Number: {{ $order->id }}</p>
            <p>Ordered products:</p>
            <ul>
                @foreach($order->products as $product)
                    <li>{{ $product->name }} x{{ $product->pivot->quantity }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <img src="img/thanks.png" class="mx-auto">
@endsection
