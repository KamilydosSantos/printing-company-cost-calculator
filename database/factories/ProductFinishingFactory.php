<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProductFinishing;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductFinishing>
 */
class ProductFinishingFactory extends Factory
{
    protected $model = ProductFinishing::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => \App\Models\Product::factory(),
            'finish_id' => \App\Models\Finish::factory(),
        ];
    }
}
