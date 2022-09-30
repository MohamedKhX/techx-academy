<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\Lesson;
use App\Models\Level;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CourseTest extends TestCase
{
    use RefreshDatabase;

    protected Course $course;

    protected function setUp(): void
    {
        parent::setUp();

        $this->course = Course::factory()->create();
    }

    /** @test */
    public function it_has_lessons()
    {
        Lesson::factory()->create(['course_id' => $this->course->id]);

        $this->assertInstanceOf(Lesson::class, $this->course->lessons->first());
    }

    /** @test */
    public function it_has_an_instructor()
    {
        $this->assertInstanceOf(Instructor::class, $this->course->instructor);
    }

    /** @test */
    public function it_has_a_level()
    {
        $this->assertInstanceOf(Level::class, $this->course->level);
    }

    /** @test */
    public function it_belongs_to_a_category()
    {
        $this->assertInstanceOf(Category::class, $this->course->category);

    }

    /** @test */
    public function it_cascade_the_requirements_field_to_json()
    {
        $this->assertEquals('json', $this->course->getCasts()['requirements']);
    }

    /** @test */
    public function it_cascade_the_what_you_will_learn_field_to_json()
    {
        $this->assertEquals('json', $this->course->getCasts()['what_you_will_learn']);
    }
}
