<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagePost extends Model
{

    protected $fillable = [
        'url', 'post_id',
    ];
    use HasFactory;

    public function posts()
	{
		return $this->belongsTo('Posts', 'id');
    }


}
