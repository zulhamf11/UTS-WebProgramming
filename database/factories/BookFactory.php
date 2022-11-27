<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this ->faker->jobTitle(),
            'author'=> $this ->faker->name(),
            'year'=> $this->faker->year(),
            'synopsis'=> $this->faker->paragraph(),
            'image'=> $this->faker->imageUrl(),
        ];
    }
}
