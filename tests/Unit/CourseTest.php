<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\Lesson;
use App\Models\Level;
use App\Models\Review;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
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

    /** @test */
    public function it_has_reviews()
    {
        Review::factory()->create(['course_id' => $this->course->id]);

        $this->assertInstanceOf(Collection::class, $this->course->reviews);
        $this->assertInstanceOf(Review::class, $this->course->reviews->first());
    }

    /** @test */
    public function the_course_will_be_deleted_when_the_instructor_deleted()
    {
        $instructor = Instructor::factory()->create();
        $course = Course::factory()->create(['instructor_id' => $instructor->id]);

        $instructor->delete();

        $this->assertDatabaseMissing('courses', ['id' => $course->id]);
    }
}
