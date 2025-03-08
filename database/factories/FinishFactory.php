<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Finish;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Finish>
 */
class FinishFactory extends Factory
{
    protected $model = Finish::class;

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
        ];
    }
}
