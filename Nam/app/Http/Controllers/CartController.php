<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user('id');
        $user = User::find($user_id->id);
        $cart = $user->cart;
        return view('cart/mycart')->with('cart', $cart);
    }

    /**
     * Add an item to the cart.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function add($id) {
        $user_id = auth()->user('id');
        $user = User::find($user_id->id);
        $user->cart()->attach($id);
        
        return redirect('/products')->with('success', 'Product added to cart!');
    }
}
