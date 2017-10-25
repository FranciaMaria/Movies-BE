<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
	protected $fillable = ['name', 'director', 'imageUrl', 'duration', 'releaseDate', 'genres'];

    protected $casts = [
        'genres' => 'array',
    ];

    
}
