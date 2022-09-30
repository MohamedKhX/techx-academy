<?php

namespace Tests\Unit;

use App\Models\Course;
use App\Models\Level;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use Tests\TestCase;

class LevelTest extends TestCase
{
    use RefreshDatabase;

    protected Level $level;

    protected function setUp(): void
    {
        parent::setUp();

        $this->level = Level::factory()->create();
    }

    /** @test */
    public function it_has_courses()
    {
        Course::factory()->create(['level_id' => $this->level->id]);

        $this->assertInstanceOf(Collection::class, $this->level->courses);
        $this->assertInstanceOf(Course::class, $this->level->courses->first());
    }
}
