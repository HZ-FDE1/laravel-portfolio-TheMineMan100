<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\CourseFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $course = Course::factory()->create();
        return [
            'course_id' => $course->id,
            'test_name' => fake()->text,
            'weighing_factor' => 1.00,
            'best_grade' => fake()->boolean(40) ? fake()->numberBetween(1, 10) : null
        ];
    }
}
