<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Level;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class CoursesFilter extends Component
{
    use WithPagination;

    const PAGINATION = 8;

    public Collection $levels;
    public Category $category;

    public $rating;
    public $sortBy;
    public $isPaid;
    public $isFree;
    public array $levelsSelected = [];

    protected $paginationTheme = 'bootstrap';
    protected $queryString = [
        'rating',
        'sortBy'
    ];

    public function mount()
    {
        $this->levels = Level::all();
    }

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
        $this->resetPage();
    }

    public function updatedSortBy()
    {
        $this->resetPage();
    }

    public function updatedLevelsSelected()
    {
        $this->resetPage();
    }

    public function updatedIsFree()
    {
        $this->resetPage();
    }

    public function updatedIsPaid()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.courses-filter', [
            'courses' => $this->getCategoryCourses(),
        ]);
    }
}
