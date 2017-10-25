<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MovieRequest extends FormRequest
{
    public function authorize()
    {
        //This is allowing all users to make request, if
        return true;
    }

    public function rules()
    {
        return [
            //We need to create custom rule stating that we won't allow
            //movies with the same name and release_date
            'name' => [
                'required',
                Rule::unique('movies')
                    ->where('releaseDate', request('releaseDate'))
            ],
            'director' => 'required',
            'imageUrl' => 'url',
            'duration' => 'required|numeric|min:1|max:500',
            'releaseDate' => 'required',
        ];
    }
}
