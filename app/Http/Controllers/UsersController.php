<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index(){
        $usuario = User::get();
        $imagen = Image::get();
        return view('Users.index', compact('usuario','imagen'));

    }

    public function create (){
        return view('Users.form');
    }

    public function store(){

        User::create([
            'name' => request('name'),
            'email'=> request('email'),
            'password' => request('password'),
        ]);

        return redirect()->route('user.index');

    }

    public function addPhoto (User $usuario){
        return view('Users.photoForm', [
        'usuario' => $usuario
        ]);
    }
}
