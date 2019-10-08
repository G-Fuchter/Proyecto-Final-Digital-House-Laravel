<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Cart;
use App\CartItem;

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

        $cart_items = $cart->cart_item;
        $cart_item_modify = $this->cart_array_contains_product($cart_items, $id);

        if ($cart_item_modify == null) {
            $cart_item_modify = new CartItem;
            $cart_item_modify->cart_id = $user_id->cart->id;
            $cart_item_modify->product_id = $id;
            $cart_item_modify->quantity = 1;
        } else {
            $cart_item_modify->quantity++;
        }

        $cart_item_modify->save();
        
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

        $cart_item = CartItem::where('cart_id', $user->cart->id)->where('id',$id);
        $cart_item->delete();
        
        return redirect('/products')->with('success', 'Product added to cart!');
    }

    private function cart_array_contains_product($cart_items, $product_id) {
        foreach ($cart_items as $cart_item) {
            if ($cart_item->product->id == $product_id) {
                return $cart_item;
            }
        }
    }
}
