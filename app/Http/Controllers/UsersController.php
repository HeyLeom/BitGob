<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index(){
        $usuario = User::get();
        return view('Users.index', compact('usuario'));

    }

    public function create (){
        return view('Users.form');
    }

    public function store(){

        User::create([
            'email'=> request('email'),
            'password' => request('password'),
        ]);

    }
}
