<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'titulo', 'cuerpo', 'user_id',
    ];
    use HasFactory;

    public function users()
	{
		return $this->belongsTo('Users', 'id');
    }

    public function imagesPost()
	{
		return $this->hasMany('ImagesPost', 'post_id');
    }
}
