@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="/dashboard" class="list-group-item list-group-item-action {{ (Request::is('dashboard') ? 'active' : '') }}">Account settings</a>
                <a href="/dashboard/orders" class="list-group-item list-group-item-action {{ (Request::is('dashboard/orders') ? 'active' : '') }}">Orders</a>
                <a class="list-group-item list-group-item-action disabled">Admin&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <a href="/dashboard/products" class="list-group-item list-group-item-action {{ (Request::is('dashboard/products*') ? 'active' : '') }}">&nbsp;&nbsp;Products</a>
            </div>
        </div>

        <div class="container col-md">
            {!! $body !!}
        </div>
    </div>
@endsection