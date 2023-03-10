<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cu_code' => 'CU' . fake()->numberBetween(75000, 75999) . 'V' . fake()->numberBetween(1, 9),
            'name' => fake()->text,
            'credits' => fake()->randomFloat(2),
            'passed_at' => fake()->date
        ];
    }
}
