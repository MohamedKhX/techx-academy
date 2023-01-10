<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Level;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class CoursesFilter extends Component
{
    use WithPagination;

    /*
     * Courses to show in one page.
     * */
    const PAGINATION = 8;

    /*
     * levels to show in levels filter.
     * */
    public Collection $levels;

    /*
     * Current category to show.
     * */
    public Category $category;

    /*
     * Rating Filter.
     * */
    public $rating;

    /*
     * SortBy Filter.
     * */
    public $sortBy;

    /*
     * IsPaid Filter.
     * */
    public $isPaid;

    /*
     * Is Free Filter.
     * */
    public $isFree;

    /*
     * level are selected to filter.
     * */
    public array $levelsSelected = [];

    /*
     * Get how much course for every rating filter.
     * */
    public array $filterRatingCount = [];

    /*
     * Livewire pagination theme.
     * */
    protected $paginationTheme = 'bootstrap';

    /*
     * Livewire Query String.
     * */
    protected $queryString = [
        'rating',
        'sortBy',
        'isFree',
        'isPaid',
        'levelsSelected' => ['as' => 'level'],
    ];

    /*
     * Mount the live-wire component.
     * */
    public function mount()
    {
        $this->levels = Level::all();
        $this->queryFilterRatingCount();
    }

    /*
     * Get category courses filter.
     * */
    public function getCategoryCourses(): LengthAwarePaginator
    {
       return $this->category->courses()
           ->groupBy('id')
           ->withCount(['reviews as rating_avg' => function($query) {
               $query->select(\DB::raw('avg(rating)'));
           }])
           ->when($this->rating, function ($query) {
               $query->having('rating_avg', '>=', (float) $this->rating);
           })
           ->when($this->levelsSelected, function ($query) {
               $query->whereIn('level_id', $this->levelsSelected);
           })
           ->when($this->isPaid && ! $this->isFree, function ($query) {
               $query->where('is_free', false);
           })
           ->when($this->isFree && ! $this->isPaid, function ($query) {
               $query->where('is_free', true);
           })
           ->when($this->sortBy == 'newest', function ($query) {
               $query->orderBy('created_at', 'desc');
           })
           ->when($this->sortBy == 'highestRated', function ($query) {
               $query->orderBy('rating_avg', 'desc');
           })
           ->when($this->sortBy == 'mostPopular', function ($query) {
               $query->withCount('enrollments as enrollmentsCount');
               $query->orderBy('enrollmentsCount', 'desc');
           })
           ->paginate(CoursesFilter::PAGINATION);
    }

    /*
     * Get courses count for specific rating.
     * */
    public function getFilterRatingCount($rating)
    {
        return $this->filterRatingCount[$rating] ?? 0;
    }

    /*
     * Clear all filters.
     * */
    public function clearFilter()
    {
        $this->rating = null;
        $this->isPaid = false;
        $this->isFree = false;
        $this->levelsSelected = [];
        $this->resetPage();
    }

    public function paginationView(): string
    {
        return 'categories._custom-pagination-links-view';
    }

    public function updatedRating()
    {
        $this->queryFilterRatingCount();
        $this->resetPage();
    }

    public function updatedSortBy()
    {
        $this->queryFilterRatingCount();
        $this->resetPage();
    }

    public function updatedLevelsSelected()
    {
        $this->queryFilterRatingCount();
        $this->resetPage();
    }

    public function updatedIsFree()
    {
        $this->queryFilterRatingCount();
        $this->resetPage();
    }

    public function updatedIsPaid()
    {
        $this->queryFilterRatingCount();
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.courses-filter', [
            'courses' => $this->getCategoryCourses(),
        ]);
    }

    private function updateQueries()
    {
        $this->queryFilterRatingCount();
    }

    /*
     * Get courses count for some rating filters
     * */
    private function queryFilterRatingCount(): void
    {
        $queryResults = DB::table('rating_avg_courses')
            ->whereIn('course_level_id', empty($this->levelsSelected) ? [1,2,3,4] : $this->levelsSelected)
            ->whereIn('course_is_free', [true, false])
            ->select([
                DB::raw("
                case
                    when rating >= 4.5 then '4.5'
                    when rating >= 4.0 then '4.0'
                    when rating >= 3.5 then '3.5'
                    when rating >= 3.0 then '3.0'
                end as rating_filter"),
                DB::raw('
                    count(*) as total
                ')
            ])
            ->where('courses_category_id' , '=', $this->category->id)
            ->groupBy('rating_filter')
            ->havingNotNull('rating_filter')
            ->get()
            ->mapWithKeys(function ($item) {
                return [$item->rating_filter => $item->total];
            });

        $queryResults = function (string $rating) use ($queryResults)
        {
            return $queryResults[$rating] ?? 0;
        };

        $results = [
            '4.5' => $queryResults('4.5'),
            '4.0' => $queryResults('4.0') + $queryResults('4.5'),
            '3.5' => $queryResults('3.5') + $queryResults('4.0') + $queryResults('4.5'),
            '3.0' => $queryResults('3.0') + $queryResults('3.5') + $queryResults('4.0') + $queryResults('4.5')
        ];

        $this->filterRatingCount = $results;
    }
}
