<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Product;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('auth.privilege');
    }

    public function index()
    {
        return view('admin/index');
    }

    public function users()
    {
        $users = DB::table('users')->paginate(20);
        return view('admin/users', ['users' => $users]);
    }

    public function remove_user($id)
    {
        $user = auth()->user('id');
        if ($id == $user->id) {
            return response('No puedes borrar tu propio usuario', 400);
        } else {
            $user_to_delete = User::find($id);
            $user_to_delete->delete();
            return response('Se ha eliminado el usuario',200);
        }
    }

    public function search_user(string $term)
    {
        $users_with_name = User::where('name', 'LIKE', '%'.$term.'%')->orWhere('email', 'LIKE', '%'.$term.'%')->get();

        $users = $users_with_name;
        return view('admin/users', ['users' => $users]);
    }

    public function products()
    {
        $products = DB::table('products')->paginate(20);
        return view('admin/products', ['products' => $products]);
    }

    public function search_product(string $term)
    {
        $products_with_name = Product::where('name', 'LIKE', '%'.$term.'%')->get();
        return view('admin/products', ['products' => $products_with_name]);
    }
}
