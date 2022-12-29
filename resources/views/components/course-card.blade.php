@props(['course', 'vertical' => true])

@if($vertical)
    <div class="card featured_card h-100">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <a class="card_img d-block blur-shadow-image">
                <img src="{{ $course->cover }}" alt="img-blur-shadow" class="img-fluid featured_card-img shadow border-radius-lg w-100">
            </a>
            <div class="colored-shadow"></div>
        </div>
        <div class="card-body pt-3">
            <div class="d-flex justify-content-between">
                <div class="d-flex">
                    <img width="60" height="60" class="rounded-circle" src="https://dreamslms.dreamguystech.com/html/assets/img/user/user2.jpg" alt="">
                    <div class="ms-2">
                        <h6 class="mb-0"><a class="hover_effect" href="#">{{ $course->instructor->user->name }}</a></h6>
                        <span>Instructor</span>
                    </div>
                </div>
                <div>
                    <a href="#">
                        <i class="material-icons fs-4 me-2 hover_effect">favorite</i>
                    </a>
                </div>
            </div>
            <h5 class="font-weight-bold mt-3 pe-3">
                <a class="hover_effect" href="#">{{ $course->title }}</a>
            </h5>
            <div class="d-flex justify-content-between">
                <div class="d-flex align-items-center">
                    <i class="material-icons me-2">book</i>
                    {{ $course->lessons_count }}+ Lesson
                </div>
                <div class="d-flex align-items-center">
                    <i class="material-icons me-2">timer</i>
                    9hr 20min
                </div>
            </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer d-flex py-2">
            <p class="d-flex align-items-center font-weight-normal my-auto">
                {!! $course->getStarsIcons($course->rating_avg, 'text-warning') !!}
                <span class="ms-2">{{ $course->formatRating($course->rating_avg) }}</span>
                <span class="ms-2">({{ $course->reviews_count }})</span>
            </p>
            <p class="ms-auto d-flex align-items-center my-auto fs-6 text-dark fw-bold">
                {{ $course->level->name }}
            </p>
        </div>
    </div>
@else
    <div>
        <div class="d-flex">
            <div class="me-3 mt-2 mt-md-0">
                <img class="horizontal_card-img" src="{{ $course->cover }}" alt="">
            </div>
            <div class="mt-0 mt-md-2 w-100">
                <div class="d-flex justify-content-between">
                    <h6 class="mb-0"><a class="text-black fw-bolder" href="#">{{ $course->title }}</a></h6>
                    <h5 class="text-blackGray fw-bolder mb-0">
                        {{ $course->is_free ? 'Free' : 'Paid' }}
                    </h5>
                </div>
                <p class="text-blackGray mb-1 fs-7 d-none d-sm-block">{{ $course->subTitle }}</p>
                <div><a class="hover_effect" href="#">{{ $course->instructor->user->name }}</a></div>
                <div class="d-flex align-items-center">
                    <div class="me-1 fw-bolder text-warning fs-5">
                        {{ $course->formatRating($course->rating_avg) }}
                    </div>
                    {!! $course->getStarsIcons($course->rating_avg, 'text-warning') !!}
                </div>
                <div class="d-flex gap-2 gap-md-3">
                    <span class="text-blackGray fs-sm-8">69 total hours</span>
                    <span class="text-blackGray fs-sm-8">{{ $course->lessons_count }} lectures</span>
                    <span class="text-blackGray fs-sm-8">{{ $course->level->name }}</span>
                </div>

            </div>
        </div>
        <hr class="black horizontal mt-3">
    </div>
@endif

