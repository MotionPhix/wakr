<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    // use DatabaseMigrations;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_no_posts_when_database_is_empty()
    {
        $this->seed();

        $response = $this->get('/posts');

        $response->assertSeeText('No posts here yet!');
    }


    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function test_see_single_post_when_database_has_one()
    // {
    //     $post = Post::create([
    //         'title' => 'Hello There',
    //         'slug' => 'hello-there',
    //         'description' => 'Some really shady stuff',
    //         'user_id' => 2
    //     ]);

    //     $response = $this->get('/posts');

    //     // $response->assertSeeText('Hello There');

    //     $this->assertDatabaseCount('posts', 1);
    // }
}
