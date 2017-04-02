<?php
/**
 * Created by PhpStorm.
 * User: kokke
 * Date: 21-3-2017
 * Time: 13:06
 */

namespace App\Http\Controllers;

class ShoppingCartController extends Controller
{
    public function index()
    {
        return view('ShoppingCart.index');
    }

    public function addToCart($id)
    {
        if (session('cart.' . $id) == null) {
            session()->put('cart.' . $id, ['id' => $id, 'quantity' => 1]);
        } else {
            session()->put('cart.' . $id, ['id' => $id, 'quantity' => session('cart.' . $id)['quantity'] + 1]);
        }

        return redirect('/cart');
    }

    public function removeFromCart($id)
    {
        if (session('cart.' . $id)['quantity'] == 1) {
            return $this->clearFromCart($id);
        } else {
            session()->put('cart.' . $id, ['id' => $id, 'quantity' => session('cart.' . $id)['quantity'] - 1]);
        }

        return redirect('/cart');
    }

    public function clearFromCart($id)
    {
        session()->forget('cart.' . $id);

        if (session('cart') == null) {
            return $this->destroy();
        }

        return redirect('/cart');
    }

    public function destroy()
    {
        session()->forget('cart');
        return redirect('/cart');
    }
}