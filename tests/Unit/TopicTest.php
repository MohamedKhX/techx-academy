<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Topic;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use Tests\TestCase;

class TopicTest extends TestCase
{
    use RefreshDatabase;

    public Topic $topic;

    public function setUp(): void
    {
        parent::setUp();

        $this->topic = Topic::factory()->create();
    }

    /** @test */
    public function it_fill_the_slug_field()
    {
       $this->assertTrue($this->topic->slug != null);
    }

    /** @test */
    public function it_belongs_to_many_categories()
    {
        $categories = Category::factory(3)->create();
        $categories->each(function ($category) {
            $category->topics()->attach($this->topic->id);
        });

        $this->assertInstanceOf(Collection::class, $this->topic->categories);
        $this->assertInstanceOf(Category::class, $this->topic->categories->first());
    }
}
