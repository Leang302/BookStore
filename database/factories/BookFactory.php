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
    public function definition(): array
    {
        // $catagoriesCount = Catagory::count();
        // $randomCategoryId = $this->faker->numberBetween(1, $categoryCount);
        return [
            'name' => fake()->name(),
        ];
    }
}
