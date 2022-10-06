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
                <button class="btn btn-outline-dark text-none fs-6 py-2 d-block d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#filtersOffcanvas" aria-controls="filtersOffcanvas">
                    Filters
                </button>
                <div class="offcanvas offcanvas-end w-75 w-sm-50 w-lg-25" tabindex="-1" id="filtersOffcanvas" aria-labelledby="filtersOffcanvasLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="filtersOffcanvasLabel">Filters</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body"
                         x-data="{show: window.innerWidth <= 991, filtersOffCanvas: null}"
                         x-init='window.addEventListener("resize", function() {
                                     show = window.innerWidth <= 991;

                                     if(window.innerWidth >= 991) {
                                        filtersOffCanvas.hide();
                                     }

                                     })
                                     filtersOffCanvas = new Bootstrap.Offcanvas("#filtersOffcanvas")'
                    >
                        <template x-if="show">
                            @include('categories._filters')
                        </template>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 d-none d-lg-block">
                        @include('categories._filters')
                    </div>
                    <div class="col-12 col-lg-9">
                        @foreach($category->courses as $course)
                            <x-course-card :course="$course" :vertical="false" />
                        @endforeach
                    </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>

        </script>
    @endpush
</x-main-layout>
