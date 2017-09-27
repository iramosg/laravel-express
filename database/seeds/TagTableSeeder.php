<?php

use App\Tag;
use App\Post;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate();
        Post::truncate();

        factory('App\Tag', 10)->create();
        factory('App\Post', 10)->create();
    }
}
