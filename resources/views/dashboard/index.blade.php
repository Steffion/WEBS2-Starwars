@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="/dashboard"
                   class="list-group-item list-group-item-action {{ (Request::is('dashboard') ? 'active' : '') }}">Account
                    settings</a>
                <a href="/dashboard/orders"
                   class="list-group-item list-group-item-action {{ (Request::is('dashboard/orders') ? 'active' : '') }}">Orders</a>

                @if(\Illuminate\Support\Facades\Auth::user()->isadmin)
                    <a class="list-group-item list-group-item-action disabled">Admin&nbsp;<i class="fa fa-caret-down"
                                                                                             aria-hidden="true"></i></a>
                    <a href="/dashboard/products"
                       class="list-group-item list-group-item-action {{ (Request::is('dashboard/products*') ? 'active' : '') }}">
                        &nbsp;&nbsp;Products</a>
                    <a href="/dashboard/users"
                       class="list-group-item list-group-item-action {{ (Request::is('dashboard/users*') ? 'active' : '') }}">
                        &nbsp;&nbsp;Users</a>
                    <a href="/dashboard/categories"
                       class="list-group-item list-group-item-action {{ (Request::is('dashboard/categories*') ? 'active' : '') }}">
                        &nbsp;&nbsp;Categories</a>
                    <a href="/dashboard/orders-admin"
                       class="list-group-item list-group-item-action {{ (Request::is('dashboard/orders-admin*') ? 'active' : '') }}">
                        &nbsp;&nbsp;Orders</a>
                @endif
            </div>
        </div>

        <div class="container col-md">
            {!! $body !!}
        </div>
    </div>
@endsection