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
}
