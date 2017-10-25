<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
	protected $fillable = ['name', 'director', 'imageUrl', 'duration', 'releaseDate', 'genres'];

    protected $casts = [
        'genres' => 'array',
    ];

    public static function search($term, $skip, $take)
    {
        return self::where('name', 'LIKE', '%'.$term.'%')->skip($skip)->take($take)->get();
    }
    
}
