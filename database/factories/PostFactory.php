<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    $title = fake('ZA_en')->sentence(rand(1, 2));

    return [
      'title' => $title,
      'slug' => Str::slug($title),
      'content' => fake('ZA_en')->paragraph(rand(2, 3)),
      'user_id' => fake('ZA_en')->numberBetween(1, 15)
    ];
  }
}
