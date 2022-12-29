<?php

namespace Tests\Feature;

use App\Http\Livewire\CoursesFilter;
use App\Models\Category;
use App\Models\Course;
use App\Models\Review;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;
use Livewire\Livewire;
use Tests\TestCase;

class CoursesFilterTest extends TestCase
{
    use RefreshDatabase;

    protected Category $category;

    protected function setUp(): void
    {
        parent::setUp();

        $this->category = Category::factory()->create();
        Course::factory(10)->create(['category_id' => $this->category]);
    }

    /** @test */
    public function category_show_page_contains_courses_filter_livewire_component()
    {
        $this->get(route('category.show', $this->category))
            ->assertSeeLivewire(CoursesFilter::class);
    }

    /** @test */
    public function clear_filters_method_works_correctly()
    {
        Livewire::test(CoursesFilter::class, [
            'category' => $this->category
        ])
            ->set('rating', 4)
            ->set('isPaid', true)
            ->set('isFree', true)
            ->set('levelsSelected', ['Beginner', 'Expert'])
            ->call('clearFilter')
            ->assertSet('rating', null)
            ->assertSet('isPaid', false)
            ->assertSet('isFree', false)
            ->assertSet('levelsSelected', []);
    }

    /** @test */
    public function rating_filter_works_correctly()
    {
        function test($courseOneRating, $courseTwoRating, $ratingProperty): void
        {
            $category = Category::factory()->create();

            $courseOne = Course::factory()->create(['category_id' => $category->id]);
            Review::factory()->create(['course_id' => $courseOne->id, 'rating' => $courseOneRating]);


            $courseTwo = Course::factory()->create(['category_id' => $category->id]);
            Review::factory()->create(['course_id' => $courseTwo->id, 'rating' => $courseTwoRating]);

            Livewire::test(CoursesFilter::class, [
                'category' => $category
            ])
                ->set('rating', '4.6')
                ->assertViewHas('courses', function ($courses) {
                    dd($courses->count());
                });
        }

        test(courseOneRating: 5 ,courseTwoRating: 0 ,ratingProperty: 4.5);
/*        test(courseOneRating: 4.0 ,courseTwoRating: 0 ,ratingProperty: 4);
        test(courseOneRating: 3.5 ,courseTwoRating: 0 ,ratingProperty: 3.5);
        test(courseOneRating: 3.0 ,courseTwoRating: 0 ,ratingProperty: 3);*/
    }

    /** @test */
    public function video_duration_filter_works_correctly()
    {

    }

    /** @test */
    public function level_filter_works_correctly()
    {

    }

    /** @test */
    public function price_filter_works_correctly()
    {

    }
    /** @test */
    public function sort_by_works_correctly()
    {

    }

    /** @test */
    public function sort_by_query_string_works_correctly()
    {

    }

    /** @test */
    public function rating_query_string_works_correctly()
    {

    }

    /** @test */
    public function video_duration_query_string_works_correctly()
    {

    }

    /** @test */
    public function level_query_string_works_correctly()
    {

    }

    /** @test */
    public function price_query_string_works_correctly()
    {

    }
}
