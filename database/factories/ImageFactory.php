<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    $random_name = fake()->numberBetween(1, 30);
    $name = Str::slug(fake('ZA_en')->sentence(2));
    $path = uniqid();

    $url = "https://picsum.photos/640/320";

    $contents = file_get_contents($url);

    $disk = Storage::build([
      'driver' => 'local',
      'root' => storage_path('app/posts'),
    ]);

    $disk->put($path . '.jpg', $contents);

    return [
      'name' => $name . '.jpg',
      'path' => $path . '.jpg'
    ];
  }
}
