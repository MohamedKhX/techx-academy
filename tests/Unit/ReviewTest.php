<?php

namespace Tests\Unit;

use App\Models\Course;
use App\Models\Review;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReviewTest extends TestCase
{
    use RefreshDatabase;

    protected Review $review;

    protected function setUp(): void
    {
        parent::setUp();

        $this->review = Review::factory()->create();
    }

    /** @test */
    public function it_belongs_to_user()
    {
        $this->assertInstanceOf(User::class, $this->review->user);
    }

    /** @test */
    public function it_belongs_to_course()
    {
        $this->assertInstanceOf(Course::class, $this->review->course);
    }

    /** @test */
    public function the_reviews_will_be_deleted_when_the_user_deleted()
    {
        $user = User::factory()->create();
        $review = Review::factory()->create(['user_id' => $user->id]);

        $user->delete();
        $this->assertDatabaseMissing('reviews', ['id' => $review->id]);
    }

    /** @test */
    public function the_reviews_will_be_deleted_when_the_course_deleted()
    {
        $course = Course::factory()->create();

        $this->review->delete();

        $review    = Review::factory()->create(['course_id' => $course->id]);
        $reviewTwo = Review::factory()->create(['course_id' => $course->id]);

        $course->delete();
        $this->assertDatabaseMissing('reviews', ['id' => $this->review->course_id]);
        $this->assertDatabaseCount('reviews', 0);
    }
}
