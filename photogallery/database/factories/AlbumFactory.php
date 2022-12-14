<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Album>
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::inRandomOrder()->first();
        return [
            'album_name' => $this->faker->name(20),
             'album_thumb' => $this->faker->image(),
            'description' => $this->faker->text(120),
            'created_at' => $this ->faker->dateTime(),
            'user_id' => $user->id

            ];
    }
}
