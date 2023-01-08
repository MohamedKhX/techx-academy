<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Course;
use App\Models\Enrollment;
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
    public function requirements_field_should_casts_to_json()
    {
        $this->assertEquals('json', $this->course->getCasts()['requirements']);
    }

    /** @test */
    public function what_you_will_learn_field_should_casts_to_json()
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
    public function it_has_enrollments()
    {
       Enrollment::factory(10)->create(['course_id' => $this->course->id]);

       $this->assertInstanceOf(Collection::class, $this->course->enrollments);
       $this->assertInstanceOf(Enrollment::class, $this->course->enrollments->first());
    }

    /** @test */
    public function the_course_will_be_deleted_when_the_instructor_deleted()
    {
        $instructor = Instructor::factory()->create();
        $course = Course::factory()->create(['instructor_id' => $instructor->id]);

        $instructor->delete();

        $this->assertDatabaseMissing('courses', ['id' => $course->id]);
    }

    /** @test */
    public function course_average_rating_works()
    {
        Review::factory(2)->create([
            'course_id' => $this->course->id,
            'rating' => 4
        ]);

        Review::factory(2)->create([
            'course_id' => $this->course->id,
            'rating' => 2.5
        ]);

        Review::factory(3)->create([
            'course_id' => $this->course->id,
            'rating' => 3.5
        ]);

        $course = Course::find($this->course->id);

        $this->assertEquals('3.4', $course->rating);
    }

    /**
     * it should convert from [1.0, 1.1, 1.2, 1.3, 1.4] to 1
     * and from [1.5, 1.6, 1.7, 1.8, 1.9] to 1.5
     * @test
     */
    public function it_generate_the_correct_stars_count()
    {
        function test(int $courseId, float $rating, string $expected, TestCase $testCase): void
        {
            if(Review::first()) {
                Review::first()->delete();
            }
            Review::factory()->create(['course_id' => $courseId, 'rating' => $rating]);
            $course = Course::find($courseId);
            $testCase->assertEquals($expected, $course->getStarsCount($rating));
        }

        test(courseId: $this->course->id, rating: 2.0, expected: '2', testCase: $this);
        test(courseId: $this->course->id, rating: 2.1, expected: '2', testCase: $this);
        test(courseId: $this->course->id, rating: 2.2, expected: '2', testCase: $this);
        test(courseId: $this->course->id, rating: 2.3, expected: '2', testCase: $this);
        test(courseId: $this->course->id, rating: 2.4, expected: '2', testCase: $this);

        test(courseId: $this->course->id, rating: 2.5, expected: '2.5', testCase: $this);
        test(courseId: $this->course->id, rating: 2.6, expected: '2.5', testCase: $this);
        test(courseId: $this->course->id, rating: 2.7, expected: '2.5', testCase: $this);
        test(courseId: $this->course->id, rating: 2.8, expected: '2.5', testCase: $this);
        test(courseId: $this->course->id, rating: 2.9, expected: '2.5', testCase: $this);
    }
}
