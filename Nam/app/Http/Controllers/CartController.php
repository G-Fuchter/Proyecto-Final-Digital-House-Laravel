<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Cart;

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

        if ($cart == null) {
            $cart = new Cart;
            $cart->user_id = $user_id->id;
            $cart->save();
        }

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
        $cart = $user->cart;

        if ($cart == null) {
            $cart = new Cart;
            $cart->user_id = $user_id->id;
            $cart->save();
        }

        $cart->cart_item()->attach($id);
        
        return redirect('/products')->with('success', 'Product added to cart!');
    }


    /**
     * Remove an item from the cart.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove($id) {
        $user_id = auth()->user('id');
        $user = User::find($user_id->id);
        $cart = $user->cart;

        if ($cart == null) {
            $cart = new Cart;
            $cart->user_id = $user_id->id;
            $cart->save();
        }

        $cart->cart_item()->detach($id);
        
        return redirect('/products')->with('success', 'Product added to cart!');
    }
}
