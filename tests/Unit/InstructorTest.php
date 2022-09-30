<?php

namespace Tests\Unit;

use App\Models\Course;
use App\Models\Instructor;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use Tests\TestCase;

class InstructorTest extends TestCase
{
    use RefreshDatabase;

    protected Instructor $instructor;

    protected function setUp(): void
    {
        parent::setUp();

        $this->instructor = Instructor::factory()->create();
    }

    /** @test */
    public function it_belongs_to_user()
    {
        $this->assertInstanceOf(User::class, $this->instructor->user);
    }

    /** @test */
    public function it_has_courses()
    {
        Course::factory()->create(['instructor_id' => $this->instructor->id]);

        $this->assertInstanceOf(Collection::class, $this->instructor->courses);
        $this->assertInstanceOf(Course::class, $this->instructor->courses->first());
    }

}
