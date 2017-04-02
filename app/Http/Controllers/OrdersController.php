<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->get();
        $title = "Your orders";

        $body = view('dashboard.orders.index', compact(['orders', 'title']));

        return view('dashboard.index', compact('body'));
    }

    public function indexAdmin()
    {
        $orders = Order::all();
        $title = "All orders";

        $body = view('dashboard.orders.index', compact(['orders', 'title']));

        return view('dashboard.index', compact('body'));
    }
}
