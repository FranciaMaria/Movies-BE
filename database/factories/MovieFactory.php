<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    //We will make a collection so we can use random method
    $values = collect([
        'Action',
        'Comedy',
        'Drama',
        'Horror',
        'Western',
        'Thriller',
        'Animation',
        'Documentary'
    ]);

    return [
        'name' => $faker->text(80),
        'director' => $faker->name,
        'imageUrl' => $faker->imageUrl(),
        'duration' => $faker->numberBetween(60, 200),
        'releaseDate' => $faker->date(),
        'genres' => $values->random(3)
    ];
});

