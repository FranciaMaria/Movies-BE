<?php

use Illuminate\Database\Seeder;
//use Carbon\Carbon;
//use Illuminate\Database\Eloquent\Model;
//use App\Movie;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        /* DB::table('movies')->delete();
         //insert some dummy records
         DB::table('movies')->insert(array(

             array('name'=>'It','director'=>'Andy Muschietti','imageUrl'=>'http://www.imdb.com/title/tt1396484/mediaviewer/rm1002251008', 'duration'=> 135,'releaseDate'=>Carbon::parse('8 September 2017'),'genres'=>["horror", "thriller", "drama"]),

             array('name'=>'Bates Motel','director'=>'Anthony Cipriano','imageUrl'=>'http://www.imdb.com/title/tt2188671/mediaviewer/rm1469005312', 'duration'=>45,'releaseDate'=>Carbon::parse('18 March 2013'),'genres'=>["horror", "thriller", "drama", "mystery"]),

             array('name'=>'Black Swan','director'=>'Darren Aronofsky','imageUrl'=>'http://www.imdb.com/title/tt0947798/mediaviewer/rm1503101184', 'duration'=>108,'releaseDate'=>Carbon::parse('17 December 2010'),'genres'=>["thriller", "drama"])
             ));*/
             $this->call(MoviesTableSeeder::class);
             $this->call(UsersTableSeeder::class);

    }
}


class MoviesTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Movie::class, 100)->create();
    }
}

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\User::class, 10)->create();
    }
}
