<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;

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
}
