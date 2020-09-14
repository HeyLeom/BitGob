<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $usuario = User::get();
        $post = Post::get();
        return view('Posts.index', compact('post','usuario'));
    }

    public function create(){
        $usuario = User::get();
        return view('posts.form', compact('usuario'));
    }

    public function store(){

        Post::create([
            'titulo'=> request('titulo'),
            'cuerpo' => request('cuerpo'),
            'user_id' => request('user_id'),
        ]);

        return redirect()->route('post.index');

    }
}
