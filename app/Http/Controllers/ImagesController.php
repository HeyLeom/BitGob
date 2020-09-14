<?php

namespace App\Http\Controllers;
use App\Models\Image;
use App\Models\ImagePost;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function store(){

        Image::create([
            'url'=> request('url'),
            'user_id' => request('user_id'),
        ]);

        return redirect()->route('user.index');

    }


}
