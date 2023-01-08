<?php

namespace Tests\Feature;

use App\Http\Livewire\CoursesFilter;
use App\Models\Category;
use App\Models\Course;
use App\Models\Level;
use App\Models\Review;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
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
    }

    /** @test */
    public function category_show_page_contains_courses_filter_livewire_component()
    {
        $this->get(route('category.show', $this->category->slug))
            ->assertSeeLivewire('courses-filter');
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
                ->set('rating', $ratingProperty)
                ->assertViewHas('courses', function ($courses) use($ratingProperty) {
                    foreach ($courses as $course) {
                        $courseRating = (float) $course->rating;
                        return $courseRating >= $ratingProperty;
                    }

                    return false;
                });
        }

        test(courseOneRating: 5.0, courseTwoRating: 0, ratingProperty: 4.5);
        test(courseOneRating: 4.5, courseTwoRating: 0, ratingProperty: 4.0);
        test(courseOneRating: 3.5, courseTwoRating: 0, ratingProperty: 3.5);
        test(courseOneRating: 3.0, courseTwoRating: 0, ratingProperty: 3.0);
    }

    /** @test */
    public function video_duration_filter_works_correctly()
    {

    }

    /** @test */
    public function level_filter_works_correctly()
    {
        $allLevels     = Level::factory()->create(['name' => 'All Levels']);
        $beginnerLevel = Level::factory()->create(['name' => 'Beginner']);
        $intermediate  = Level::factory()->create(['name' => 'Intermediate']);
        $expertLevel   = Level::factory()->create(['name' => 'Expert']);

        Course::factory(10)->create(['level_id' => $allLevels->id, 'category_id' => $this->category->id]);
        Course::factory(4)->create(['level_id' => $beginnerLevel->id, 'category_id' => $this->category->id]);
        Course::factory(5)->create(['level_id' => $intermediate->id, 'category_id' => $this->category->id]);
        Course::factory(2)->create(['level_id' => $expertLevel->id, 'category_id' => $this->category->id]);

        Livewire::test(CoursesFilter::class, ['category' => $this->category])
            ->assertViewHas('courses', function ($courses) {
                return $courses->total() == 10 + 4 + 5 + 2;
            })
            ->set('levelsSelected', [1])
            ->assertViewHas('courses', function ($courses) {
                return $courses->total() == 10;
            })
            ->set('levelsSelected', [2])
            ->assertViewHas('courses', function ($courses) {
                return $courses->total() == 4;
            })
            ->set('levelsSelected', [3])
            ->assertViewHas('courses', function ($courses) {
                return $courses->total() == 5;
            })
            ->set('levelsSelected', [4])
            ->assertViewHas('courses', function ($courses) {
                return $courses->total() == 2;
            })
            ->set('levelsSelected', [1, 4])
            ->assertViewHas('courses', function ($courses) {
                return $courses->total() == 12;
            });
    }

    /** @test */
    public function price_filter_works_correctly()
    {
        Course::factory(7)->create(['is_free' => true, 'category_id' => $this->category->id]);
        Course::factory(19)->create(['is_free' => false, 'category_id' => $this->category->id]);

        Livewire::test(CoursesFilter::class, ['category' => $this->category])
            ->assertViewHas('courses', function ($courses) {
                return $courses->total() == 7 + 19;
            })
            ->set('isPaid', true)
            ->set('isFree', false)
            ->assertViewHas('courses', function ($courses) {
                return $courses->total() == 19;
            })
            ->set('isFree', true)
            ->set('isPaid', false)
            ->assertViewHas('courses', function ($courses) {
                return $courses->total() == 7;
            })
            ->set('isFree', true)
            ->set('isPaid', true)
            ->assertViewHas('courses', function ($courses) {
                return $courses->total() == 7 + 19;
            });
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

    public function clear_filters_clear_query_string()
    {

    }
}
