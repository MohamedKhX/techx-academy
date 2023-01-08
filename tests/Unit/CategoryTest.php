<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    protected Category $category;

    protected function setUp(): void
    {
        parent::setUp();

        $this->category = Category::factory()->create();
    }

    /** @test */
    public function it_fill_the_slug_field()
    {
       $this->assertTrue($this->category->slug != null);
    }

    /** @test */
    public function it_has_courses()
    {
        Course::factory()->create(['category_id' => $this->category->id]);

        $this->assertInstanceOf(Collection::class, $this->category->courses);
        $this->assertInstanceOf(Course::class, $this->category->courses->first());
    }

    /** @test */
    public function it_belongs_to_many_topics()
    {
        $topics = Topic::factory(3)->create();
        $topics->each(function ($topics) {
            $topics->categories()->attach($this->category->id);
        });

        $this->assertInstanceOf(Collection::class, $this->category->topics);
        $this->assertInstanceOf(Topic::class, $this->category->topics->first());
    }

    /** @test */
    public function it_gets_learners_count_correctly()
    {
        $course = Course::factory()->create(['category_id' => $this->category->id]);
        Enrollment::factory(10)->create(['course_id' => $course->id]);

        $this->assertSame(10, $this->category->getLearnersCount());
    }
}
