<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Movie::class, 100)->create();
    }
}
