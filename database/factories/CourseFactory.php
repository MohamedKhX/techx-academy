<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Instructor;
use App\Models\Level;
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
            'title'        => $this->faker->sentence(5),
            'subTitle'     => $this->faker->sentence(10),
            'cover'        => 'https://dreamslms.dreamguystech.com/html/assets/img/course/course-04.jpg',
            'description'  => $this->faker->paragraphs(2, true),
            'requirements' => $this->faker->sentences(3),
            'is_free'      => $this->faker->boolean(),
            'what_you_will_learn' => $this->faker->sentences(8),

            'category_id'   => Category::factory()->create()->id,
            'instructor_id' => Instructor::factory()->create()->id,
            'level_id'      => Level::factory()->create()->id
        ];
    }
}
