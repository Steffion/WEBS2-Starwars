@extends('layouts.master')

@section('content')

    <div class="panel-body">
        <?php $totalsum = 0 ?>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price (p.p.)</th>
                <th>Total</th>
                <th></th>
            </tr>
            </thead>

            @if(session()->has('cart'))

                <tbody>
                @foreach(session('cart') as $item)
                    <?php $product = \App\Product::find($item['id']) ?>
                    <?php $quantity = $item['quantity'] ?>

                    <tr>
                        <th scope="row" class="col-md">{{ $product->name }}</th>
                        <td>
                            {{--<input class="form-control" type="number" value="{{ $quantity }}" id="quantity">--}}
                            {{ $quantity }}
                            <a href="/cart/add/{{ $product->id }}"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                            <a href="/cart/remove/{{ $product->id }}"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                        </td>
                        <td>{{ $product->price }} USD</td>
                        <td>{{ $product->price * $quantity }} USD</td>
                        <?php $totalsum += $product->price * $quantity ?>
                        <td>
                            <a class="btn btn-danger" href="/cart/clear/{{ $product->id }}">
                                <i class="fa fa-trash" aria-hidden="true"></i> Remove
                            </a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total<br>Shipping<br>
                        <h3><strong>Subtotal</strong></h3></td>
                    <td colspan="2">{{ $totalsum }} USD<br>10,- USD<br>
                        <h3><strong>{{ $totalsum + 10 }} USD</strong></h3></td>
                </tr>
                </tfoot>
            @else
                <tbody>
                <tr>
                    <td class="text-center" colspan="5">
                        <h3>Your cart is empty.</h3>
                    </td>
                </tr>
                </tbody>
            @endif
        </table>

        <div class="container row float-right">
            <div class="form-group">
                <a class="btn m-2 btn-danger" href="/cart/clear">
                    <i class="fa fa-trash" aria-hidden="true"></i> Clear shopping cart
                </a>
                <button onclick="window.history.back()" type="button" class="btn m-2">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i> Continue shopping
                </button>
                <button type="submit" class="btn btn-success m-2">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Checkout
                </button>
            </div>
        </div>
    </div>
@endsection
