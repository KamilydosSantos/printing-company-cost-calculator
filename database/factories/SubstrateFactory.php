<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Substrate;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Substrate>
 */
class SubstrateFactory extends Factory
{
    protected $model = Substrate::class;
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
            'width' => $this->faker->randomFloat(2),
            'height' => $this->faker->randomFloat(2),
        ];
    }
}
