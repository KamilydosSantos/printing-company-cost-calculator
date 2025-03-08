<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Color;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Color>
 */
class ColorFactory extends Factory
{
    protected $model = Color::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => $this->faker->words(rand(1, 4), true),
            'price' => $this->faker->randomFloat(2),
            'front' => $this->faker->randomElement([0, 1, 4]),
            'back' => $this->faker->randomElement([0, 1, 4]),
        ];
    }
}
