<?php

namespace Tests\Unit;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\User;
use Tests\TestCase;

class EnrollmentTest extends TestCase
{
    protected Enrollment $enrollment;

    protected function setUp(): void
    {
        parent::setUp();

        $this->enrollment = Enrollment::factory()->create();
    }

    /** @test */
    public function it_belongs_to_user()
    {
        $this->assertInstanceOf(User::class, $this->enrollment->user);
    }

    /** @test */
    public function it_belongs_to_course()
    {
       $this->assertInstanceOf(Course::class, $this->enrollment->course);
    }
}
