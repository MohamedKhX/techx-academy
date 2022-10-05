<x-main-layout>
    <section class="container mt-5 pt-5">
        <h2 class="text-blackGray mb-3">JavaScript Courses</h2>
        <p class="mb-1 fw-bolder">JavaScript relates to <a href="#">Web Development</a></p>
        <div class="d-flex align-items-center mt-0 text-blackGray">
            <i class="material-icons me-2">group</i>
            <span>1345 learners</span>
        </div>
        <hr class="black horizontal">
    </section>

    <section class="container mt-5">
        <h3 class="text-blackGray mb-0">Courses to get you started</h3>
        <x-slider id="categoryCourses" col="col-12" class="mt-2">
            @foreach($category->courses as $course)
                <x-slider-item>
                    <x-course-card :course="$course" />
                </x-slider-item>
            @endforeach
        </x-slider>
    </section>

    <section class="container-fluid container-xl mt-7">
        <hr class="dark horizontal">
        <h4 class="text-blackGray">All JavaScript courses</h4>
        <p class="text-blackGray">
            Join more than 12 million learners and train up on JavaScript on Udemy. Choose from a wide range of top-rated JavaScript courses. From back-end development to app or website building, we’ve got you covered. Our real-world experts can lead you through hands-on projects to apply your skills.
        </p>
        <hr class="black horizontal">
        <div class="mt-4">
            <div class="row">
                <div class="col-3 d-none d-lg-block">
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
                                            <input class="form-check-input" type="radio" name="RatingRadio" id="RatingRadio1">
                                            <label class="form-check-label d-inline-flex align-items-center" for="RatingRadio1" style="margin-top: 2px">
                                                <i class='material-icons text-warning fs-6'>star</i>
                                                <i class='material-icons text-warning fs-6'>star</i>
                                                <i class='material-icons text-warning fs-6'>star</i>
                                                <i class='material-icons text-warning fs-6'>star</i>
                                                <i class='material-icons  fs-6'><span class="text-warning">st</span>ar</i>
                                                <span class="text-black mx-1">4,5 & up</span>
                                                <span class="ms-1">(213)</span>
                                            </label>
                                        </div>
                                        <div class="form-check ps-0 mt-1">
                                            <input class="form-check-input" type="radio" name="RatingRadio" id="RatingRadio2">
                                            <label class="form-check-label d-inline-flex align-items-center" for="RatingRadio2" style="margin-top: 2px">
                                                <i class='material-icons text-warning fs-6'>star</i>
                                                <i class='material-icons text-warning fs-6'>star</i>
                                                <i class='material-icons text-warning fs-6'>star</i>
                                                <i class='material-icons text-warning fs-6'>star</i>
                                                <i class='material-icons fs-6'>star</i>
                                                <span class="text-black mx-1">4.0 & up</span>
                                                <span class="ms-1">(332)</span>
                                            </label>
                                        </div>
                                        <div class="form-check ps-0 mt-1">
                                            <input class="form-check-input" type="radio" name="RatingRadio" id="RatingRadio3">
                                            <label class="form-check-label d-inline-flex align-items-center" for="RatingRadio3" style="margin-top: 2px">
                                                <i class='material-icons text-warning fs-6'>star</i>
                                                <i class='material-icons text-warning fs-6'>star</i>
                                                <i class='material-icons text-warning fs-6'>star</i>
                                                <i class='material-icons  fs-6'><span class="text-warning">st</span>ar</i>
                                                <i class='material-icons fs-6'>star</i>
                                                <span class="text-black mx-1">3.5 & up</span>
                                                <span class="ms-1">(634)</span>
                                            </label>
                                        </div>
                                        <div class="form-check ps-0 mt-1">
                                            <input class="form-check-input" type="radio" name="RatingRadio" id="RatingRadio4">
                                            <label class="form-check-label d-inline-flex align-items-center" for="RatingRadio4" style="margin-top: 2px">
                                                <i class='material-icons text-warning fs-6'>star</i>
                                                <i class='material-icons text-warning fs-6'>star</i>
                                                <i class='material-icons text-warning fs-6'>star</i>
                                                <i class='material-icons fs-6'>star</i>
                                                <i class='material-icons fs-6'>star</i>
                                                <span class="text-black mx-1">3.0 & up</span>
                                                <span class="ms-1">(1023)</span>
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
                        <div class="accordion-item">
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
                                                <input class="form-check-input" type="checkbox" value="" id="levelCheckBox{{ $level->id }}">
                                                <label class="form-check-label text-black" for="levelCheckBox{{ $level->id }}">
                                                    {{ $level->name }} <span class="text-secondary">(21)</span>
                                                </label>
                                            </div>
                                        @endforeach

                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button text-black collapsed fw-bolder fs-5 py-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Price
                                </button>
                                <hr class="black horizontal">
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFilters4">
                                <div class="accordion-body">
                                    <form action="">
                                        <div class="form-check ps-0">
                                            <input class="form-check-input" type="checkbox" value="" id="paidPriceCheckBox">
                                            <label class="form-check-label text-black" for="paidPriceCheckBox">
                                                Paid <span class="text-secondary">(201)</span>
                                            </label>
                                        </div>
                                        <div class="form-check ps-0">
                                            <input class="form-check-input" type="checkbox" value="" id="freePriceCheckBox">
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
                <div class="col-12 col-lg-9">
                    @foreach($category->courses as $course)
                        <x-course-card :course="$course" :vertical="false" />
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-main-layout>
