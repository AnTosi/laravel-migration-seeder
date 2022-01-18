<?php

use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 12; $i++) {
            $_post = new Post();
            $_post->author = $faker->name();
            $_post->date = $faker->date();
            $_post->time = $faker->time();
            $_post->text = $faker->text(400);
            $_post->image = $faker->imageUrl($width = 640, $height = 480);
            $_post->save();
        }
    }
}
