<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'color_id' => \App\Models\Color::factory(),
            'substrate_id' => \App\Models\Substrate::factory(),
            'description' => $this->faker->words(rand(1, 4), true),
            'pages' => $this->faker->randomNumber(5, false),
            'width' => $this->faker->randomFloat(2),
            'height' => $this->faker->randomFloat(2),
        ];
    }
}
