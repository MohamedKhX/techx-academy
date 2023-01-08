<x-main-layout>
    <section class="container mt-5 pt-5">
        <h2 class="text-blackGray mb-3">{{ $category->name }} Courses</h2>
        @if($category->topics_count)
            <p class="mb-1 fw-bolder">{{ $category->name }} relates to
                @foreach($category->topics as $topic)
                    <a href="#">
                        {{ $loop->last ? $topic->name : $topic->name . ',' }}
                    </a>
                @endforeach
            </p>
        @endif
        <div class="d-flex align-items-center mt-0 text-blackGray">
            <i class="material-icons me-2">group</i>
            <span>{{ $category->getLearnersCount() }} learners</span>
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
        <h4 class="text-blackGray">All {{ $category->name }} courses</h4>
        <p class="text-blackGray">
            {{ $category->description }}
        </p>
        <hr class="black horizontal">
        <div class="mt-4">
            <livewire:courses-filter :category="$category" />
        </div>
    </section>
</x-main-layout>
