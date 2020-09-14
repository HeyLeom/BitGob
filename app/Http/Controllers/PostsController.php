<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        return view('Posts.index');
    }

    public function create(){
        return view('posts.form');
    }

    public function store(){

        Post::create([
            'titulo'=> request('titulo'),
            'cuerpo' => request('cuerpo'),
        ]);

    }
}
