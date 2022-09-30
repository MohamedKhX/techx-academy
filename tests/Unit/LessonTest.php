<?php

namespace Tests\Unit;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LessonTest extends TestCase
{
    use RefreshDatabase;

    protected Lesson $lesson;

    protected function setUp(): void
    {
        parent::setUp();

        $this->lesson = Lesson::factory()->create();
    }

    /** @test */
    public function it_belongs_to_course()
    {
        $this->assertInstanceOf(Course::class, $this->lesson->course);
    }
}
