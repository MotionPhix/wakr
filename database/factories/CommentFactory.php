<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
      'body' => fake('ZA_en')->sentence(rand(1, 2)),
      'user_id' => fake()->numberBetween(1, 15),
      'post_id' => fake()->numberBetween(1, 50)
    ];
  }
}
