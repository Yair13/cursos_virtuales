<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        //
        $g_user = User::get()->toArray();
        return view('user/listado_usuarios', compact('g_user'));


    }
    public function create()
    {
        //


        return view('user/create');

    }

    public function store(Request $request)
    {
        //
        

        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
   

    }
    
}
