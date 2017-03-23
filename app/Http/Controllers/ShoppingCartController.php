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
}