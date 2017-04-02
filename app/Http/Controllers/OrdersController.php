<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->get();

        $body = view('dashboard.orders.index', compact('orders'));

        return view('dashboard.index', compact('body'));
    }
}
