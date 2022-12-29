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
            @foreach($coursesToGetYouStarted as $course)
                <x-slider-item>
                    <x-course-card :course="$course" />
                </x-slider-item>
            @endforeach
        </x-slider>
    </section>

    <section class="container-fluid container-xl mt-7" id="allCoursesSection">
        <hr class="dark horizontal">
        <h4 class="text-blackGray">All JavaScript courses</h4>
        <p class="text-blackGray">
            Join more than 12 million learners and train up on JavaScript on Udemy. Choose from a wide range of top-rated JavaScript courses. From back-end development to app or website building, we’ve got you covered. Our real-world experts can lead you through hands-on projects to apply your skills.
        </p>
        <hr class="black horizontal">
        <div class="mt-4">
            <livewire:courses-filter :category="$category" />
        </div>
    </section>
</x-main-layout>
