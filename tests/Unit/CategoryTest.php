<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Course;
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
    public function it_has_courses()
    {
        Course::factory()->create(['category_id' => $this->category->id]);

        $this->assertInstanceOf(Collection::class, $this->category->courses);
        $this->assertInstanceOf(Course::class, $this->category->courses->first());
    }
}
