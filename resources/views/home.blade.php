<x-main-layout>
    {{-- Start Header --}}
    <x-slot name="header">
        <header class="header-2">
            <div class="page-header min-vh-75 relative" style="background-image: url({{ asset('img/background.jpg') }});">
                <span class="mask bg-gradient-dark opacity-7"></span>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 text-center mx-auto">
                            <p class="lead text-white mb-5 mt-5">The Leader in Online Learning </p>
                            <h1 class="text-white pt-3 mt-n5">Engaging & Accessible Online Courses For All</h1>
                            <p class="lead text-white mt-3">Own your future learning new skills online </p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </x-slot>
    {{-- End Header --}}

    {{-- Start Count-Stats Section --}}
    <section class="pt-3 pb-4 mb-4 mt-2" id="count-stats">
        <div class="container">
            <hr class="horizontal dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 position-relative">
                        <div class="p-3 text-center">
                            <h1 class="text-gradient text-primary">40+</h1>
                            <h5 class="mt-3">Online Courses</h5>
                            <p class="text-sm font-weight-normal">High quality courses in various technical fields</p>
                        </div>
                        <hr class="vertical dark">
                    </div>
                    <div class="col-lg-3 col-sm-6 position-relative">
                        <div class="p-3 text-center">
                            <h1 class="text-gradient text-primary">600+</h1>
                            <h5 class="mt-3">Online Students</h5>
                            <p class="text-sm font-weight-normal">Many of our students learn about different areas of technology</p>
                        </div>
                        <hr class="vertical dark">
                    </div>
                    <div class="col-lg-3 col-sm-6 position-relative">
                        <div class="p-3 text-center">
                            <h1 class="text-gradient text-primary">850+</h1>
                            <h5 class="mt-3">Hours Of Content</h5>
                            <p class="text-sm font-weight-normal">Several hours, but when you start learning with us, you will find that it passes quickly</p>
                        </div>
                        <hr class="vertical dark">
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="p-3 text-center">
                            <h1 class="text-gradient text-primary" id="state3" countto="4">7+</h1>
                            <h5 class="mt-3">Instructs</h5>
                            <p class="text-sm font-weight-normal">Professional teachers give courses in various technical fields</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="horizontal dark">
        </div>
    </section>
    {{-- End Count-Stats Section --}}

    {{-- Start Top Categories Section --}}
    <section class="pt-3 pb-4">
        <div class="container">
            <div class="mb-5">
                <h2 class="mb-4">Top Categories</h2>
                <p class="fw-bold text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Molestiae recusandae reprehenderit sed unde?  Dolorem eius eos quae quia quod voluptates?</p>
            </div>
            <x-slider id="topCategories" per-page="4" col="col-12">
                <li class="splide__slide pt-5 pb-5">
                    <div class="splide__slide__container">
                        <div class="card category_card border">
                            <div class="d-flex justify-content-center card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <a class="d-block blur-shadow-image w-25">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Python-logo-notext.svg/1869px-Python-logo-notext.svg.png" alt="img-blur-shadow" class="img-fluid border-radius-lg">
                                </a>
                            </div>
                            <div class="card-body pt-0 text-center">
                                <h5 class="font-weight-normal mt-3">
                                    <a class="fw-bold hover_effect" href="#">Python <br> Development</a>
                                    <p class="text-secondary fw-bold mt-4">30 Courses</p>
                                </h5>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide pt-5 pb-5">
                    <div class="splide__slide__container">
                        <div class="card category_card border">
                            <div class="d-flex justify-content-center card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <a class="d-block blur-shadow-image w-25">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" alt="img-blur-shadow" class="img-fluid border-radius-lg ">
                                </a>
                            </div>
                            <div class="card-body pt-0 text-center">
                                <h5 class="font-weight-normal mt-3">
                                    <a class="fw-bold hover_effect" href="#">Laravel <br> Development</a>
                                    <p class="text-secondary fw-bold mt-4">28 Courses</p>
                                </h5>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="splide__slide pt-5 pb-5">
                    <div class="splide__slide__container">
                        <div class="card category_card border">
                            <div class="d-flex justify-content-center card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <a class="d-block blur-shadow-image w-25">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/1200px-Unofficial_JavaScript_logo_2.svg.png" alt="img-blur-shadow" class="img-fluid border-radius-lg">
                                </a>
                            </div>
                            <div class="card-body pt-0 text-center">
                                <h5 class="font-weight-normal mt-3">
                                    <a class="fw-bold hover_effect" href="#">Javascript <br> Development</a>
                                    <p class="text-secondary fw-bold mt-4">74 Courses</p>
                                </h5>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide pt-5 pb-5">
                    <div class="splide__slide__container">
                        <div class="card category_card border">
                            <div class="d-flex justify-content-center card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <a class="d-block blur-shadow-image w-25">
                                    <img src="https://github.com/symfony.png" alt="img-blur-shadow" class="img-fluid border-radius-lg">
                                </a>
                            </div>
                            <div class="card-body pt-0 text-center">
                                <h5 class="font-weight-normal mt-3">
                                    <a class="fw-bold hover_effect" href="#">Symfony <br> Development</a>
                                    <p class="text-secondary fw-bold mt-4">4 Courses</p>
                                </h5>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide pt-5 pb-5">
                    <div class="splide__slide__container">
                        <div class="card category_card border">
                            <div class="d-flex justify-content-center card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <a class="d-block blur-shadow-image w-25">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" alt="img-blur-shadow" class="img-fluid border-radius-lg ">
                                </a>
                            </div>
                            <div class="card-body pt-0 text-center">
                                <h5 class="font-weight-normal mt-3">
                                    <a class="fw-bold hover_effect" href="#">Laravel <br> Development</a>
                                    <p class="text-secondary fw-bold mt-4">28 Courses</p>
                                </h5>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="splide__slide pt-5 pb-5">
                    <div class="splide__slide__container">
                        <div class="card category_card border">
                            <div class="d-flex justify-content-center card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <a class="d-block blur-shadow-image w-25">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/1200px-Unofficial_JavaScript_logo_2.svg.png" alt="img-blur-shadow" class="img-fluid border-radius-lg">
                                </a>
                            </div>
                            <div class="card-body pt-0 text-center">
                                <h5 class="font-weight-normal mt-3">
                                    <a class="fw-bold hover_effect" href="#">Javascript <br> Development</a>
                                    <p class="text-secondary fw-bold mt-4">74 Courses</p>
                                </h5>
                            </div>
                        </div>
                    </div>
                </li>
            </x-slider>
        </div>

    </section>
    {{-- End Top Categories Section --}}

    {{-- Start Featured Courses Section --}}
    <section class="featured_courses container-fluid relative page-header mt-5" style="background-image: url({{ asset('img/featured-courses-background.jpg') }})">
        <span class="mask bg-gradient-dark opacity-7"></span>
        <div class="container">
            <div class="mb-5">
                <h2 class="mb-4 text-white">Featured Courses</h2>
                <p class="font-weight-normal text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Molestiae recusandae reprehenderit sed unde?<br>  Dolorem eius eos quae quia quod voluptates?</p>
            </div>
            <x-slider id="featuredCourses" col="col-12">
                <li class="splide__slide pt-5">
                    <div class="splide__slide__container">
                        <div class="card featured_card">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <a class="card_img d-block blur-shadow-image">
                                    <img src="https://dreamslms.dreamguystech.com/assets/img/course/course-01.jpg" alt="img-blur-shadow" class="img-fluid featured_card-img shadow border-radius-lg w-100">
                                </a>
                                <div class="colored-shadow"></div>
                            </div>
                            <div class="card-body pt-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <img width="60" height="60" class="rounded-circle" src="https://dreamslms.dreamguystech.com/assets/img/user/user1.jpg" alt="">
                                        <div class="ms-2">
                                            <h6 class="mb-1"><a class="hover_effect" href="#">Mohamed Khalid</a></h6>
                                            <span>Instructor</span>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <i class="material-icons fs-4 me-2 text-primary">favorite</i>
                                        </a>
                                    </div>
                                </div>
                                <h5 class="font-weight-bold mt-3 pe-3">
                                    <a class="hover_effect" href="#">Information About UI/UX Design Degree</a>
                                </h5>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <i class="material-icons me-2">book</i>
                                        12+ Lessons
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
                                    <i class="material-icons text-primary">star</i>
                                    <i class="material-icons text-primary">star</i>
                                    <i class="material-icons text-primary">star</i>
                                    <i class="material-icons text-primary">star</i>
                                    <i class="material-icons">star</i>
                                    <span class="ms-2">4.0</span>
                                    <span class="ms-2">(23)</span>
                                </p>
                                <p class="ms-auto d-flex align-items-center my-auto fs-5 text-dark fw-bold">
                                    $79.00
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide pt-5">
                    <div class="splide__slide__container">
                        <div class="card featured_card">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <a class="card_img d-block blur-shadow-image">
                                    <img src="https://dreamslms.dreamguystech.com/assets/img/course/course-01.jpg" alt="img-blur-shadow" class="img-fluid featured_card-img shadow border-radius-lg w-100">
                                </a>
                                <div class="colored-shadow"></div>
                            </div>
                            <div class="card-body pt-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <img width="60" height="60" class="rounded-circle" src="https://dreamslms.dreamguystech.com/assets/img/user/user1.jpg" alt="">
                                        <div class="ms-2">
                                            <h6 class="mb-1"><a class="hover_effect" href="#">Mohamed Khalid</a></h6>
                                            <span>Instructor</span>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <i class="material-icons fs-4 me-2 text-primary">favorite</i>
                                        </a>
                                    </div>
                                </div>
                                <h5 class="font-weight-bold mt-3 pe-3">
                                    <a class="hover_effect" href="#">Information About UI/UX Design Degree</a>
                                </h5>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <i class="material-icons me-2">book</i>
                                        12+ Lessons
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
                                    <i class="material-icons text-primary">star</i>
                                    <i class="material-icons text-primary">star</i>
                                    <i class="material-icons text-primary">star</i>
                                    <i class="material-icons text-primary">star</i>
                                    <i class="material-icons">star</i>
                                    <span class="ms-2">4.0</span>
                                    <span class="ms-2">(23)</span>
                                </p>
                                <p class="ms-auto d-flex align-items-center my-auto fs-5 text-dark fw-bold">
                                    $79.00
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide pt-5">
                    <div class="splide__slide__container">
                        <div class="card featured_card">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <a class="card_img d-block blur-shadow-image">
                                    <img src="https://dreamslms.dreamguystech.com/assets/img/course/course-01.jpg" alt="img-blur-shadow" class="img-fluid featured_card-img shadow border-radius-lg w-100">
                                </a>
                                <div class="colored-shadow"></div>
                            </div>
                            <div class="card-body pt-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <img width="60" height="60" class="rounded-circle" src="https://dreamslms.dreamguystech.com/assets/img/user/user1.jpg" alt="">
                                        <div class="ms-2">
                                            <h6 class="mb-1"><a class="hover_effect" href="#">Mohamed Khalid</a></h6>
                                            <span>Instructor</span>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <i class="material-icons fs-4 me-2 text-primary">favorite</i>
                                        </a>
                                    </div>
                                </div>
                                <h5 class="font-weight-bold mt-3 pe-3">
                                    <a class="hover_effect" href="#">Information About UI/UX Design Degree</a>
                                </h5>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <i class="material-icons me-2">book</i>
                                        12+ Lessons
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
                                    <i class="material-icons text-primary">star</i>
                                    <i class="material-icons text-primary">star</i>
                                    <i class="material-icons text-primary">star</i>
                                    <i class="material-icons text-primary">star</i>
                                    <i class="material-icons">star</i>
                                    <span class="ms-2">4.0</span>
                                    <span class="ms-2">(23)</span>
                                </p>
                                <p class="ms-auto d-flex align-items-center my-auto fs-5 text-dark fw-bold">
                                    $79.00
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide pt-5">
                    <div class="splide__slide__container">
                        <div class="card featured_card">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <a class="card_img d-block blur-shadow-image">
                                    <img src="https://dreamslms.dreamguystech.com/assets/img/course/course-01.jpg" alt="img-blur-shadow" class="img-fluid featured_card-img shadow border-radius-lg w-100">
                                </a>
                                <div class="colored-shadow"></div>
                            </div>
                            <div class="card-body pt-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <img width="60" height="60" class="rounded-circle" src="https://dreamslms.dreamguystech.com/assets/img/user/user1.jpg" alt="">
                                        <div class="ms-2">
                                            <h6 class="mb-1"><a class="hover_effect" href="#">Mohamed Khalid</a></h6>
                                            <span>Instructor</span>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <i class="material-icons fs-4 me-2 text-primary">favorite</i>
                                        </a>
                                    </div>
                                </div>
                                <h5 class="font-weight-bold mt-3 pe-3">
                                    <a class="hover_effect" href="#">Information About UI/UX Design Degree</a>
                                </h5>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <i class="material-icons me-2">book</i>
                                        12+ Lessons
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
                                    <i class="material-icons text-primary">star</i>
                                    <i class="material-icons text-primary">star</i>
                                    <i class="material-icons text-primary">star</i>
                                    <i class="material-icons text-primary">star</i>
                                    <i class="material-icons">star</i>
                                    <span class="ms-2">4.0</span>
                                    <span class="ms-2">(23)</span>
                                </p>
                                <p class="ms-auto d-flex align-items-center my-auto fs-5 text-dark fw-bold">
                                    $79.00
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide pt-5">
                    <div class="splide__slide__container">
                        <div class="card featured_card">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <a class="card_img d-block blur-shadow-image">
                                    <img src="https://dreamslms.dreamguystech.com/assets/img/course/course-01.jpg" alt="img-blur-shadow" class="img-fluid featured_card-img shadow border-radius-lg w-100">
                                </a>
                                <div class="colored-shadow"></div>
                            </div>
                            <div class="card-body pt-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <img width="60" height="60" class="rounded-circle" src="https://dreamslms.dreamguystech.com/assets/img/user/user1.jpg" alt="">
                                        <div class="ms-2">
                                            <h6 class="mb-1"><a class="hover_effect" href="#">Mohamed Khalid</a></h6>
                                            <span>Instructor</span>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <i class="material-icons fs-4 me-2 text-primary">favorite</i>
                                        </a>
                                    </div>
                                </div>
                                <h5 class="font-weight-bold mt-3 pe-3">
                                    <a class="hover_effect" href="#">Information About UI/UX Design Degree</a>
                                </h5>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <i class="material-icons me-2">book</i>
                                        12+ Lessons
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
                                    <i class="material-icons text-primary">star</i>
                                    <i class="material-icons text-primary">star</i>
                                    <i class="material-icons text-primary">star</i>
                                    <i class="material-icons text-primary">star</i>
                                    <i class="material-icons">star</i>
                                    <span class="ms-2">4.0</span>
                                    <span class="ms-2">(23)</span>
                                </p>
                                <p class="ms-auto d-flex align-items-center my-auto fs-5 text-dark fw-bold">
                                    $79.00
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
            </x-slider>
        </div>
    </section>
    {{-- End Featured Courses Section --}}

    {{-- Start Featured Instructor Section --}}
    <section class="mt-4 pt-5">
        <div class="container pt-5">
            <div class="mb-5 text-center">
                <h2 class="mb-4">Featured Instructor</h2>
                <p class="fw-bold text-secondary">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea error maiores modi optio! Autem eum explicabo <br> impedit laudantium molestiae nemo perspiciatis qui sed sequi totam.
                </p>
            </div>
            <x-slider id="featuredInstructor" class="mb-7">
                <li class="splide__slide rounded-3 pb-3 px-0 border border-1">
                    <div class="splide__slide__container">
                        <div class="d-flex flex-column text-center">
                            <div class="zoom_overflow">
                                <a href="">
                                    <img class="rounded-top w-100 zoom_effect" src="https://dreamslms.dreamguystech.com/assets/img/user/user7.jpg" alt="">
                                </a>
                            </div>
                            <div>
                                <h5 class="mt-3"><a class="hover_effect" href="#">Ahmed obama</a></h5>
                                <span class="mt-3">UI Designer</span>
                                <div class="d-flex justify-content-center mt-3">
                                    <i class="material-icons fs-4 me-2 text-primary">group</i>
                                    <span>30 Students</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide rounded-3 pb-3 px-0 border border-1">
                    <div class="splide__slide__container">
                        <div class="d-flex flex-column text-center">
                            <div class="zoom_overflow">
                                <a href="">
                                    <img class="rounded-top w-100 zoom_effect" src="https://dreamslms.dreamguystech.com/assets/img/user/user7.jpg" alt="">
                                </a>
                            </div>
                            <div>
                                <h5 class="mt-3"><a class="hover_effect" href="#">Ahmed obama</a></h5>
                                <span class="mt-3">UI Designer</span>
                                <div class="d-flex justify-content-center mt-3">
                                    <i class="material-icons fs-4 me-2 text-primary">group</i>
                                    <span>30 Students</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide rounded-3 pb-3 px-0 border border-1">
                    <div class="splide__slide__container">
                        <div class="d-flex flex-column text-center">
                            <div class="zoom_overflow">
                                <a href="">
                                    <img class="rounded-top w-100 zoom_effect" src="https://dreamslms.dreamguystech.com/assets/img/user/user7.jpg" alt="">
                                </a>
                            </div>
                            <div>
                                <h5 class="mt-3"><a class="hover_effect" href="#">Ahmed obama</a></h5>
                                <span class="mt-3">UI Designer</span>
                                <div class="d-flex justify-content-center mt-3">
                                    <i class="material-icons fs-4 me-2 text-primary">group</i>
                                    <span>30 Students</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide rounded-3 pb-3 px-0 border border-1">
                    <div class="splide__slide__container">
                        <div class="d-flex flex-column text-center">
                            <div class="zoom_overflow">
                                <a href="">
                                    <img class="rounded-top w-100 zoom_effect" src="https://dreamslms.dreamguystech.com/assets/img/user/user7.jpg" alt="">
                                </a>
                            </div>
                            <div>
                                <h5 class="mt-3"><a class="hover_effect" href="#">Ahmed obama</a></h5>
                                <span class="mt-3">UI Designer</span>
                                <div class="d-flex justify-content-center mt-3">
                                    <i class="material-icons fs-4 me-2 text-primary">group</i>
                                    <span>30 Students</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide rounded-3 pb-3 px-0 border border-1">
                    <div class="splide__slide__container">
                        <div class="d-flex flex-column text-center">
                            <div class="zoom_overflow">
                                <a href="">
                                    <img class="rounded-top w-100 zoom_effect" src="https://dreamslms.dreamguystech.com/assets/img/user/user7.jpg" alt="">
                                </a>
                            </div>
                            <div>
                                <h5 class="mt-3"><a class="hover_effect" href="#">Ahmed obama</a></h5>
                                <span class="mt-3">UI Designer</span>
                                <div class="d-flex justify-content-center mt-3">
                                    <i class="material-icons fs-4 me-2 text-primary">group</i>
                                    <span>30 Students</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide rounded-3 pb-3 px-0 border border-1">
                    <div class="splide__slide__container">
                        <div class="d-flex flex-column text-center">
                            <div class="zoom_overflow">
                                <a href="">
                                    <img class="rounded-top w-100 zoom_effect" src="https://dreamslms.dreamguystech.com/assets/img/user/user7.jpg" alt="">
                                </a>
                            </div>
                            <div>
                                <h5 class="mt-3"><a class="hover_effect" href="#">Ahmed obama</a></h5>
                                <span class="mt-3">UI Designer</span>
                                <div class="d-flex justify-content-center mt-3">
                                    <i class="material-icons fs-4 me-2 text-primary">group</i>
                                    <span>30 Students</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </x-slider>
        </div>
    </section>
    {{-- End Featured Instructor Section --}}

    {{-- Start Reviews Section --}}
    <section class="reviews_section container-fluid relative page-header mt-5" style="background-image: url({{ asset('img/featured-courses-background.jpg') }})">
        <span class="mask bg-gradient-dark opacity-7"></span>
        <div class="container">
            <div class="text-center">
                <h5 class="text-white">Check out these real reviews</h5>
                <h1 class="text-white">Users-love-us Don't take it from us.</h1>
            </div>
            <div id="carouselReviewsControls" class="carousel carousel-sm-dark slide relative d-flex justify-content-center" data-bs-ride="carousel">
                <div class="carousel-inner relative border border-1 bg-white rounded-3 p-5 px-3 px-sm-5 pb-5 w-100 w-md-75 w-lg-50 mt-5">
                        <div class="carousel-item active">
                            <div class="review_box">
                                <p class="text-center fs-sm-6 text-dark lead">
                                    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consequuntur doloribus eos eveniet id laboriosam nesciunt nisi odit perspiciatis quos."
                                </p>
                                <div class="d-flex justify-content-center">
                                    <div class="d-flex flex-column align-items-center justify-content-center mt-3">
                                        <div class="d-flex justify-content-center">
                                            <img class="rounded-circle w-25" src="https://dreamslms.dreamguystech.com/assets/img/user/user3.jpg" alt="">
                                        </div>
                                        <h5 class="mt-2"><a href="#">John smith</a></h5>
                                        <span>Founder of Unity Technologies</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="carousel-item">
                        <div class="review_box">
                            <p class="text-center fs-sm-6 text-dark lead">
                                "Lorem ipsum dolor zsit amet, consectetur adipisicing elit. Asperiores consequuntur doloribus eos eveniet id laboriosam nesciunt nisi odit perspiciatis quos."
                            </p>
                            <div class="d-flex justify-content-center">
                                <div class="d-flex flex-column align-items-center justify-content-center mt-3">
                                    <div class="d-flex justify-content-center">
                                        <img class="rounded-circle w-25" src="https://dreamslms.dreamguystech.com/assets/img/user/user3.jpg" alt="">
                                    </div>
                                    <h5 class="mt-2"><a href="#">John smith</a></h5>
                                    <span>Founder of Unity Technologies</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="review_box">
                            <p class="text-center fs-sm-6 text-dark lead">
                                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consequuntur doloribus eos eveniet id laboriosam nesciunt nisi odit perspiciatis quos."
                            </p>
                            <div class="d-flex justify-content-center">
                                <div class="d-flex flex-column align-items-center justify-content-center mt-3">
                                    <div class="d-flex justify-content-center">
                                        <img class="rounded-circle w-25" src="https://dreamslms.dreamguystech.com/assets/img/user/user3.jpg" alt="">
                                    </div>
                                    <h5 class="mt-2"><a href="#">John smith</a></h5>
                                    <span>Founder of Unity Technologies</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselReviewsControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselReviewsControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    {{-- End Reviews Section --}}

    {{-- Start Become an Instructor Section --}}
    <section class="my-5 py-5">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12 col-xl-10 col-xxl-8 d-flex">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-6">
                            <div class="d-flex justify-content-center">
                                <img class="w-75 w-lg-100" src="https://s.udemycdn.com/home/non-student-cta/instructor-1x-v3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h2 class="text-center mt-3 mt-lg-5 text-lg-start">Become an instructor</h2>
                            <p class="lead text-center text-lg-start">Instructors from around the world teach students on TechX Academy. We provide the tools and skills to teach what you love.</p>
                            <a class="btn btn-dark w-100 w-lg-50" href="#">Start teaching today</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- End Become an Instructor Section--}}

    {{-- Start Latest Blogs Section --}}
    <section class="my-5">
        <div class="container pt-5">
            <div class="mb-5 text-center">
                <h2 class="mb-4">Latest Blogs</h2>
                <p class="fw-bold text-secondary">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea error maiores modi optio! Autem eum explicabo <br> impedit laudantium molestiae nemo perspiciatis qui sed sequi totam.
                </p>
            </div>
            <x-slider id="test">
                <li class="splide__slide rounded-3 pb-3 px-0 border border-1">
                    <div class="splide__slide__container">
                        <div class="d-flex flex-column text-center">
                            <div class="zoom_overflow">
                                <a href="">
                                    <img class="rounded-top w-100 zoom_effect" src="https://dreamslms.dreamguystech.com/assets/img/blog/blog-01.jpg" alt="">
                                </a>
                            </div>
                            <div>
                                <h5 class="mt-3">
                                    <a class="hover_effect" href="#">11 Tips to Help You Get New Clients</a>
                                </h5>
                                <span class="mt-3">Development</span>
                                <div class="d-flex justify-content-center mt-3">
                                    <i class="material-icons fs-4 me-2 text-primary">calendar_month</i>
                                    <span>  May 15, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide rounded-3 pb-3 px-0 border border-1">
                    <div class="splide__slide__container">
                        <div class="d-flex flex-column text-center">
                            <div class="zoom_overflow">
                                <a href="">
                                    <img class="rounded-top w-100 zoom_effect" src="https://dreamslms.dreamguystech.com/assets/img/blog/blog-01.jpg" alt="">
                                </a>
                            </div>
                            <div>
                                <h5 class="mt-3">
                                    <a class="hover_effect" href="#">11 Tips to Help You Get New Clients</a>
                                </h5>
                                <span class="mt-3">Development</span>
                                <div class="d-flex justify-content-center mt-3">
                                    <i class="material-icons fs-4 me-2 text-primary">calendar_month</i>
                                    <span>  May 15, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide rounded-3 pb-3 px-0 border border-1">
                    <div class="splide__slide__container">
                        <div class="d-flex flex-column text-center">
                            <div class="zoom_overflow">
                                <a href="">
                                    <img class="rounded-top w-100 zoom_effect" src="https://dreamslms.dreamguystech.com/assets/img/blog/blog-01.jpg" alt="">
                                </a>
                            </div>
                            <div>
                                <h5 class="mt-3">
                                    <a class="hover_effect" href="#">11 Tips to Help You Get New Clients</a>
                                </h5>
                                <span class="mt-3">Development</span>
                                <div class="d-flex justify-content-center mt-3">
                                    <i class="material-icons fs-4 me-2 text-primary">calendar_month</i>
                                    <span>  May 15, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide rounded-3 pb-3 px-0 border border-1">
                    <div class="splide__slide__container">
                        <div class="d-flex flex-column text-center">
                            <div class="zoom_overflow">
                                <a href="">
                                    <img class="rounded-top w-100 zoom_effect" src="https://dreamslms.dreamguystech.com/assets/img/blog/blog-01.jpg" alt="">
                                </a>
                            </div>
                            <div>
                                <h5 class="mt-3">
                                    <a class="hover_effect" href="#">11 Tips to Help You Get New Clients</a>
                                </h5>
                                <span class="mt-3">Development</span>
                                <div class="d-flex justify-content-center mt-3">
                                    <i class="material-icons fs-4 me-2 text-primary">calendar_month</i>
                                    <span>  May 15, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide rounded-3 pb-3 px-0 border border-1">
                    <div class="splide__slide__container">
                        <div class="d-flex flex-column text-center">
                            <div class="zoom_overflow">
                                <a href="">
                                    <img class="rounded-top w-100 zoom_effect" src="https://dreamslms.dreamguystech.com/assets/img/blog/blog-01.jpg" alt="">
                                </a>
                            </div>
                            <div>
                                <h5 class="mt-3">
                                    <a class="hover_effect" href="#">11 Tips to Help You Get New Clients</a>
                                </h5>
                                <span class="mt-3">Development</span>
                                <div class="d-flex justify-content-center mt-3">
                                    <i class="material-icons fs-4 me-2 text-primary">calendar_month</i>
                                    <span>  May 15, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide rounded-3 pb-3 px-0 border border-1">
                    <div class="splide__slide__container">
                        <div class="d-flex flex-column text-center">
                            <div class="zoom_overflow">
                                <a href="">
                                    <img class="rounded-top w-100 zoom_effect" src="https://dreamslms.dreamguystech.com/assets/img/blog/blog-01.jpg" alt="">
                                </a>
                            </div>
                            <div>
                                <h5 class="mt-3">
                                    <a class="hover_effect" href="#">11 Tips to Help You Get New Clients</a>
                                </h5>
                                <span class="mt-3">Development</span>
                                <div class="d-flex justify-content-center mt-3">
                                    <i class="material-icons fs-4 me-2 text-primary">calendar_month</i>
                                    <span>  May 15, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide rounded-3 pb-3 px-0 border border-1">
                    <div class="splide__slide__container">
                        <div class="d-flex flex-column text-center">
                            <div class="zoom_overflow">
                                <a href="">
                                    <img class="rounded-top w-100 zoom_effect" src="https://dreamslms.dreamguystech.com/assets/img/blog/blog-01.jpg" alt="">
                                </a>
                            </div>
                            <div>
                                <h5 class="mt-3">
                                    <a class="hover_effect" href="#">11 Tips to Help You Get New Clients</a>
                                </h5>
                                <span class="mt-3">Development</span>
                                <div class="d-flex justify-content-center mt-3">
                                    <i class="material-icons fs-4 me-2 text-primary">calendar_month</i>
                                    <span>  May 15, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide rounded-3 pb-3 px-0 border border-1">
                    <div class="splide__slide__container">
                        <div class="d-flex flex-column text-center">
                            <div class="zoom_overflow">
                                <a href="">
                                    <img class="rounded-top w-100 zoom_effect" src="https://dreamslms.dreamguystech.com/assets/img/blog/blog-01.jpg" alt="">
                                </a>
                            </div>
                            <div>
                                <h5 class="mt-3">
                                    <a class="hover_effect" href="#">11 Tips to Help You Get New Clients</a>
                                </h5>
                                <span class="mt-3">Development</span>
                                <div class="d-flex justify-content-center mt-3">
                                    <i class="material-icons fs-4 me-2 text-primary">calendar_month</i>
                                    <span>  May 15, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </x-slider>
        </div>
    </section>
    {{-- End Latest Blogs Section --}}
</x-main-layout>
