<?php

namespace App\Http\Controllers;
use App\Models\ImagePost;
use Illuminate\Http\Request;

class ImagesPostsController extends Controller
{
    public function storePost(){

        ImagePost::create([
            'url'=> request('url'),
            'post_id' => request('post_id'),
        ]);

        return redirect()->route('post.index');

    }
}
