<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    // \App\Models\User::factory(10)->create();

    $users = \App\Models\User::factory(5)
      ->create();

    \App\Models\Post::factory(20)
      ->make()
      ->each(function ($post) use ($users) {
        $user = $users->random();
        $post->user_id = $user->id;

        $user->posts()->save($post);
        $post->image()->save(\App\Models\Image::factory()->make());

        $post->comments()
          ->saveMany(\App\Models\Comment::factory(rand(1, 5))
            ->make([
              'user_id' => $user->id,
              'post_id' => $post->id
            ]));
      });
  }
}
