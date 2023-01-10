<div class="position-relative">
    {{-- Start mask and spinner --}}
    <div wire:loading.flex class="justify-content-center position-absolute mt-6" style="display: none; right: 40%; top: 10%">
        <div class="spinner-border text-black" role="status" style="width: 5rem;
             height: 5rem;
             z-index: 10;
             opacity: 1 !important;
             border-width: 10px;
             right: 50%;
         "
        >
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <div wire:loading.flex class="mask bg-gradient-faded-light-vertical opacity-6 z-index-3" style="display: none"></div>
    {{-- End mask and spinner --}}

    {{-- Start Filters Buttons --}}
    <div class="d-flex align-items-center mb-4">
        <div>
            <button class="btn btn-outline-dark text-none fs-6 py-2 d-block d-lg-none mb-0 me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#filtersOffcanvas" aria-controls="filtersOffcanvas">
                Filters
            </button>
        </div>
        <div class="w-100 w-lg-25">
            <select wire:model="sortBy" id="sortBy" class="form-select px-3 fs-6" aria-label="">
                <option selected disabled>Sort by</option>
                <option value="mostPopular">Most Popular</option>
                <option value="highestRated">Highest Rated</option>
                <option value="newest">Newest</option>
            </select>
        </div>
    </div>
    {{-- End Filters Buttons --}}

    {{-- Start Filters Canves --}}
    <div class="row">
        <div class="col-3 d-lg-block">
            <div  class="offcanvas-lg offcanvas-end w-75 w-sm-50 w-lg-100" tabindex="-1" id="filtersOffcanvas" aria-labelledby="filtersOffcanvasLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="filtersOffcanvasLabel">Filters</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-block">
                    <div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-dark">{{ $courses->count() }} results</span>
                            <a class="fw-bolder text-black fs-5 cursor-pointer" wire:click.prevent="clearFilter">Clear Filters</a>
                        </div>
                        <div class="accordion" id="accordionFilters">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button text-black fw-bolder fs-5 py-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Ratings
                                    </button>
                                    <hr class="black horizontal">
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionFilters1">
                                    <div class="accordion-body pt-0">
                                        <form action="">
                                            <div class="form-check ps-0">
                                                <input wire:loading.attr="disabled" wire:model="rating" class="form-check-input" type="radio" name="ratingRadio" id="RatingRadio1" value="4.5">
                                                <label class="form-check-label d-inline-flex align-items-center" for="RatingRadio1" style="margin-top: 2px">
                                                    <i class='material-icons text-warning fs-6'>star</i>
                                                    <i class='material-icons text-warning fs-6'>star</i>
                                                    <i class='material-icons text-warning fs-6'>star</i>
                                                    <i class='material-icons text-warning fs-6'>star</i>
                                                    <i class='material-icons  fs-6'><span class="text-warning">st</span>ar</i>
                                                    <span class="text-black mx-1">4,5 & up</span>
                                                    <span class="ms-1">({{ $this->getFilterRatingCount('4.5') }})</span>
                                                </label>
                                            </div>
                                            <div class="form-check ps-0 mt-1">
                                                <input wire:loading.attr="disabled" wire:model="rating" class="form-check-input" type="radio" name="ratingRadio" id="RatingRadio2" value="4">
                                                <label class="form-check-label d-inline-flex align-items-center" for="RatingRadio2" style="margin-top: 2px">
                                                    <i class='material-icons text-warning fs-6'>star</i>
                                                    <i class='material-icons text-warning fs-6'>star</i>
                                                    <i class='material-icons text-warning fs-6'>star</i>
                                                    <i class='material-icons text-warning fs-6'>star</i>
                                                    <i class='material-icons fs-6'>star</i>
                                                    <span class="text-black mx-1">4.0 & up</span>
                                                    <span class="ms-1">({{ $this->getFilterRatingCount('4.0') }})</span>
                                                </label>
                                            </div>
                                            <div class="form-check ps-0 mt-1">
                                                <input wire:loading.attr="disabled" wire:model="rating" class="form-check-input" type="radio" name="ratingRadio" id="RatingRadio3" value="3.5">
                                                <label class="form-check-label d-inline-flex align-items-center" for="RatingRadio3" style="margin-top: 2px">
                                                    <i class='material-icons text-warning fs-6'>star</i>
                                                    <i class='material-icons text-warning fs-6'>star</i>
                                                    <i class='material-icons text-warning fs-6'>star</i>
                                                    <i class='material-icons  fs-6'><span class="text-warning">st</span>ar</i>
                                                    <i class='material-icons fs-6'>star</i>
                                                    <span class="text-black mx-1">3.5 & up</span>
                                                    <span class="ms-1">({{ $this->getFilterRatingCount('3.5') }})</span>
                                                </label>
                                            </div>
                                            <div class="form-check ps-0 mt-1">
                                                <input wire:loading.attr="disabled" wire:model="rating" class="form-check-input" type="radio" name="ratingRadio" id="RatingRadio4" value="3">
                                                <label class="form-check-label d-inline-flex align-items-center" for="RatingRadio4" style="margin-top: 2px">
                                                    <i class='material-icons text-warning fs-6'>star</i>
                                                    <i class='material-icons text-warning fs-6'>star</i>
                                                    <i class='material-icons text-warning fs-6'>star</i>
                                                    <i class='material-icons fs-6'>star</i>
                                                    <i class='material-icons fs-6'>star</i>
                                                    <span class="text-black mx-1">3.0 & up</span>
                                                    <span class="ms-1">({{ $this->getFilterRatingCount('3.0') }})</span>
                                                </label>
                                            </div>
                                        </form>

                                    </div>
                                </div>

                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button text-black fw-bolder fs-5 py-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        Video Duration
                                    </button>
                                    <hr class="black horizontal">
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionFilters2">
                                    <div class="accordion-body pt-0">
                                        <form action="">
                                            <div class="form-check ps-0">
                                                <input class="form-check-input" type="checkbox" value="" id="videoDurationCheckBox1">
                                                <label class="form-check-label text-black" for="videoDurationCheckBox1">
                                                    0-1 Hour <span class="text-secondary">(27)</span>
                                                </label>
                                            </div>
                                            <div class="form-check ps-0">
                                                <input class="form-check-input" type="checkbox" value="" id="videoDurationCheckBox2">
                                                <label class="form-check-label text-black" for="videoDurationCheckBox2">
                                                    1-3 Hours <span class="text-secondary">(106)</span>
                                                </label>
                                            </div>
                                            <div class="form-check ps-0">
                                                <input class="form-check-input" type="checkbox" value="" id="videoDurationCheckBox3">
                                                <label class="form-check-label text-black" for="videoDurationCheckBox3">
                                                    3-6 Hours <span class="text-secondary">(81)</span>
                                                </label>
                                            </div>
                                            <div class="form-check ps-0">
                                                <input class="form-check-input" type="checkbox" value="" id="videoDurationCheckBox4">
                                                <label class="form-check-label text-black" for="videoDurationCheckBox4">
                                                    6-17 Hours <span class="text-secondary">(138)</span>
                                                </label>
                                            </div>
                                            <div class="form-check ps-0">
                                                <input class="form-check-input" type="checkbox" value="" id="videoDurationCheckBox5">
                                                <label class="form-check-label text-black" for="videoDurationCheckBox5">
                                                    17+ Hours <span class="text-secondary">(91)</span>
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item pt-0">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button text-black fw-bolder collapsed fs-5 py-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        Level
                                    </button>
                                    <hr class="black horizontal">
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFilters3">
                                    <div class="accordion-body pt-0">
                                        <form action="">
                                            @foreach($levels as $level)
                                                <div class="form-check ps-0">
                                                    <input wire:model="levelsSelected" value="{{ $level->id }}" class="form-check-input" type="checkbox" id="levelCheckBox{{ $level->id }}">
                                                    <label class="form-check-label text-black" for="levelCheckBox{{ $level->id }}">
                                                        {{ $level->name }} <span class="text-secondary">(21)</span>
                                                    </label>
                                                </div>
                                            @endforeach
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <div class="accordion-item pt-0">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button text-black collapsed fw-bolder fs-5 py-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Price
                                    </button>
                                    <hr class="black horizontal">
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFilters4">
                                    <div class="accordion-body pt-0">
                                        <form action="">
                                            <div class="form-check ps-0">
                                                <input wire:model="isPaid" class="form-check-input" type="checkbox" value="paid" id="paidPriceCheckBox">
                                                <label class="form-check-label text-black" for="paidPriceCheckBox">
                                                    Paid <span class="text-secondary">(201)</span>
                                                </label>
                                            </div>
                                            <div class="form-check ps-0">
                                                <input wire:model="isFree" class="form-check-input" type="checkbox" value="free" id="freePriceCheckBox">
                                                <label class="form-check-label text-black" for="freePriceCheckBox">
                                                    Free <span class="text-secondary">(201)</span>
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-9">
            @forelse($courses as $course)
                {{$course->category->id}}
                <x-course-card :course="$course" :vertical="false" />
            @empty
                <h4 class="text-center text-black mt-5">No Results Found...</h4>
            @endforelse
            <div class="d-flex justify-content-center">
                {{ $courses->links() }}
            </div>
        </div>
    </div>
    {{-- End Filters Canves --}}
</div>


