<?php

use Faker\Generator as Faker;
use App\User;
use App\Model\Post;
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
        for ($i = 0; $i < 30; $i++) {
            $newPost = new Post();
            $newPost->title = $faker->sentence(3, true);
            $newPost->content = $faker->paragraphs(5, true);
            $newPost->slug = Str::slug($newPost->title . '-' . $i, '-');
            $newPost->user_id = User::inRandomOrder()->first()->id;
            $newPost->save();
        }
    }
}
