<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'url', 'user_id',
    ];
    use HasFactory;

    public function users()
	{
		return $this->belongsTo('Users', 'id');
	}
}
