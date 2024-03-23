<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'thumbnail' => $this->faker->imageUrl(),
            'description' => $this->faker->text,
            'price' => $this->faker->randomNumber(2),
            'rating' => $this->faker->numberBetween(1, 5),
            'favorites' => $this->faker->numberBetween(0, 1000),
            'quantity' => $this->faker->numberBetween(0, 100),
            'quantity_sold' => $this->faker->numberBetween(0, 100),
            'size' => $this->faker->randomElement(['S', 'M', 'L', 'XL']),
            'color' => $this->faker->colorName,
            'discount_price' => $this->faker->randomNumber(2),
            'start_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'end_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'category_id' => $this->faker->numberBetween(1, 10),
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
