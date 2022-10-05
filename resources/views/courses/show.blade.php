<x-main-layout class="course_html">
    <header class="mt-5">
        <div class="page-header relative" style="background-image: url({{ asset('img/background.jpg') }});">
            <span class="mask bg-gradient-dark opacity-8"></span>
            <div class="container-fluid container-md z-index-2">
                <div class="row">
                    <div class="col-12 col-lg-8 py-5">
                        <div
                            class="d-flex flex-column flex-md-row justify-content-between align-content-start align-items-md-center  mb-3">
                            <div class="d-flex">
                                <div class="course_info">
                                    <img width="60" class="rounded-circle"
                                         src="https://dreamslms.dreamguystech.com/html/assets/img/user/user1.jpg"
                                         alt="">
                                    <div class="mx-3">
                                        <h6 class="my-0">
                                            <a class="text-white" href="#">Instructor Name</a>
                                        </h6>
                                        <p class="text-white my-0">UX/UI Designer</p>
                                    </div>
                                    <div class="">
                                        <p class="d-flex align-items-center font-weight-normal my-auto">
                                            <i class="material-icons text-primary">star</i>
                                            <i class="material-icons text-primary">star</i>
                                            <i class="material-icons text-primary">star</i>
                                            <i class="material-icons text-primary">star</i>
                                            <i class="material-icons">star</i>
                                            <span class="ms-2 text-white">4.0</span>
                                            <span class="ms-2 text-white">(23)</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="badge text-bg-primary rounded-3 text-white fs-7 mt-4 mt-md-0">Web Development</span>
                            </div>
                        </div>
                        <div>
                            <h2 class="text-white">The Complete Web Developer Course 2.0</h2>
                            <p class="text-white">Learn Web Development by building 25 websites and mobile apps using
                                HTML, CSS, Javascript, PHP, Python, MySQL & more!</p>
                        </div>
                        <div class="d-flex align-items-center flex-wrap gap-3">
                            <div class="d-flex align-items-center text-white me-3">
                                <img class="me-2"
                                     src="https://dreamslms.dreamguystech.com/html/assets/img/icon/icon-01.svg" alt="">
                                <span>12+ Lessons</span>
                            </div>
                            <div class="d-flex align-items-center text-white me-3">
                                <img class="me-2"
                                     src="https://dreamslms.dreamguystech.com/html/assets/img/icon/timer-icon.svg"
                                     alt="">
                                <span>9hr 30min</span>
                            </div>
                            <div class="d-flex align-items-center text-white me-3">
                                <img class="me-2"
                                     src="https://dreamslms.dreamguystech.com/html/assets/img/icon/people.svg" alt="">
                                <span>32 Students enrolled</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid container-md">
        <div class="row">

            <div class="col-12 col-lg-4 d-lg-none mt-5">
                @include('courses._video-col')
            </div>

            <div class="col-12 col-lg-8 ">
                <div class="box mt-6">
                    <h5 class="text-info">Overview</h5>
                    <div class="description">
                        <h6 class="text-black font-weight-bolder">Course Description</h6>
                        <div class="text-blackGray">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged.
                            </p>
                            <p>
                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                including versions of Lorem Ipsum.
                            </p>
                        </div>
                    </div>
                    <div class="what_you_will_learn text-blackGray">
                        <h6 class="text-black font-weight-bolder">What you will learn</h6>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <ul>
                                    <li>Become a UX designer.</li>
                                    <li>You will be able to add UX designer to your CV</li>
                                    <li>Become a UI designer.</li>
                                    <li>Build & test a full website design.</li>
                                    <li>Build & test a full mobile app.</li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-6">
                                <ul>
                                    <li>Learn to design websites & mobile phone apps.</li>
                                    <li>You'll learn how to choose colors.</li>
                                    <li>Prototype your designs with interactions.</li>
                                    <li>Export production ready assets.</li>
                                    <li>All the techniques used by UX professionals</li>
                                </ul>
                            </div>
                        </div>
                        <div class="requirements text-blackGray">
                            <h6 class="text-black font-weight-bolder">Requirements</h6>
                            <ul>
                                <li>You will need a copy of Adobe XD 2019 or above. A free trial can be downloaded from
                                    Adobe.
                                </li>
                                <li>No previous design experience is needed.</li>
                                <li>No previous Adobe XD skills are needed.</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="box bg-white mt-4">
                    <div class="d-flex justify-content-between">
                        <h5 class="text-info">Course Content</h5>
                        <h6 class="">92 Lectures 10:56:11</h6>
                    </div>
                    <div>
                        <div class="accordion" id="accordionCourseLessons">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button text-black d-flex justify-content-between"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                        In which areas do you operate?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                     aria-labelledby="headingOne" data-bs-parent="#accordionCourseLessons">
                                    <div class="accordion-body text-blackGray">
                                        <ul class="list-unstyled">
                                            <li class="lesson_accordion d-flex justify-content-between">
                                                <p>
                                                    <img
                                                        src="https://dreamslms.dreamguystech.com/html/assets/img/icon/play.svg"
                                                        alt="">
                                                    Lecture1.1 Introduction to the User Experience Course
                                                </p>
                                                <div class="d-flex">
                                                    <a class="underline me-4 d-none d-sm-block" href="#">Preview</a>
                                                    <div class="lesson_duration ms-1">02:53</div>
                                                </div>
                                            </li>
                                            <li class="lesson_accordion d-flex justify-content-between">
                                                <p>
                                                    <img
                                                        src="https://dreamslms.dreamguystech.com/html/assets/img/icon/play.svg"
                                                        alt="">
                                                    Lecture1.1 Introduction to the User Experience Course
                                                </p>
                                                <div class="d-flex">
                                                    <a class="underline me-4 d-none d-sm-block" href="#">Preview</a>
                                                    <div class="lesson_duration ms-1">02:53</div>
                                                </div>
                                            </li>
                                            <li class="lesson_accordion d-flex justify-content-between">
                                                <p>
                                                    <img
                                                        src="https://dreamslms.dreamguystech.com/html/assets/img/icon/play.svg"
                                                        alt="">
                                                    Lecture1.1 Introduction to the User Experience Course
                                                </p>
                                                <div class="d-flex">
                                                    <a class="underline me-4 d-none d-sm-block" href="#">Preview</a>
                                                    <div class="lesson_duration ms-1">02:53</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button text-black d-flex justify-content-between"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="true" aria-controls="collapseTwo">
                                        The Brief
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                     data-bs-parent="#accordionCourseLessons">
                                    <div class="accordion-body text-blackGray">
                                        <ul class="list-unstyled">
                                            <li class="lesson_accordion d-flex justify-content-between">
                                                <p>
                                                    <img
                                                        src="https://dreamslms.dreamguystech.com/html/assets/img/icon/play.svg"
                                                        alt="">
                                                    Lecture1.1 Introduction to the User Experience Course
                                                </p>
                                                <div class="d-flex">
                                                    <a class="underline me-4" href="#">Preview</a>
                                                    <div class="lesson_duration">02:53</div>
                                                </div>
                                            </li>
                                            <li class="lesson_accordion d-flex justify-content-between">
                                                <p>
                                                    <img
                                                        src="https://dreamslms.dreamguystech.com/html/assets/img/icon/play.svg"
                                                        alt="">
                                                    Lecture1.1 Introduction to the User Experience Course
                                                </p>
                                                <div class="d-flex">
                                                    <a class="underline me-4" href="#">Preview</a>
                                                    <div class="lesson_duration">02:53</div>
                                                </div>
                                            </li>
                                            <li class="lesson_accordion d-flex justify-content-between">
                                                <p>
                                                    <img
                                                        src="https://dreamslms.dreamguystech.com/html/assets/img/icon/play.svg"
                                                        alt="">
                                                    Lecture1.1 Introduction to the User Experience Course
                                                </p>
                                                <div class="d-flex">
                                                    <a class="underline me-4" href="#">Preview</a>
                                                    <div class="lesson_duration">02:53</div>
                                                </div>
                                            </li>
                                            <li class="lesson_accordion d-flex justify-content-between">
                                                <p>
                                                    <img
                                                        src="https://dreamslms.dreamguystech.com/html/assets/img/icon/play.svg"
                                                        alt="">
                                                    Lecture1.1 Introduction to the User Experience Course
                                                </p>
                                                <div class="d-flex">
                                                    <a class="underline me-4" href="#">Preview</a>
                                                    <div class="lesson_duration">02:53</div>
                                                </div>
                                            </li>
                                            <li class="lesson_accordion d-flex justify-content-between">
                                                <p>
                                                    <img
                                                        src="https://dreamslms.dreamguystech.com/html/assets/img/icon/play.svg"
                                                        alt="">
                                                    Lecture1.1 Introduction to the User Experience Course
                                                </p>
                                                <div class="d-flex">
                                                    <a class="underline me-4" href="#">Preview</a>
                                                    <div class="lesson_duration">02:53</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button text-black d-flex justify-content-between"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="true" aria-controls="collapseThree">
                                        Wireframing Low Fidelity
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                     aria-labelledby="headingThree" data-bs-parent="#accordionCourseLessons">
                                    <div class="accordion-body text-blackGray">
                                        <ul class="list-unstyled">
                                            <li class="lesson_accordion d-flex justify-content-between">
                                                <p>
                                                    <img
                                                        src="https://dreamslms.dreamguystech.com/html/assets/img/icon/play.svg"
                                                        alt="">
                                                    Lecture1.1 Introduction to the User Experience Course
                                                </p>
                                                <div class="d-flex">
                                                    <a class="underline me-4" href="#">Preview</a>
                                                    <div class="lesson_duration">02:53</div>
                                                </div>
                                            </li>
                                            <li class="lesson_accordion d-flex justify-content-between">
                                                <p>
                                                    <img
                                                        src="https://dreamslms.dreamguystech.com/html/assets/img/icon/play.svg"
                                                        alt="">
                                                    Lecture1.1 Introduction to the User Experience Course
                                                </p>
                                                <div class="d-flex">
                                                    <a class="underline me-4" href="#">Preview</a>
                                                    <div class="lesson_duration">02:53</div>
                                                </div>
                                            </li>
                                            <li class="lesson_accordion d-flex justify-content-between">
                                                <p>
                                                    <img
                                                        src="https://dreamslms.dreamguystech.com/html/assets/img/icon/play.svg"
                                                        alt="">
                                                    Lecture1.1 Introduction to the User Experience Course
                                                </p>
                                                <div class="d-flex">
                                                    <a class="underline me-4" href="#">Preview</a>
                                                    <div class="lesson_duration">02:53</div>
                                                </div>
                                            </li>
                                            <li class="lesson_accordion d-flex justify-content-between">
                                                <p>
                                                    <img
                                                        src="https://dreamslms.dreamguystech.com/html/assets/img/icon/play.svg"
                                                        alt="">
                                                    Lecture1.1 Introduction to the User Experience Course
                                                </p>
                                                <div class="d-flex">
                                                    <a class="underline me-4" href="#">Preview</a>
                                                    <div class="lesson_duration">02:53</div>
                                                </div>
                                            </li>
                                            <li class="lesson_accordion d-flex justify-content-between">
                                                <p>
                                                    <img
                                                        src="https://dreamslms.dreamguystech.com/html/assets/img/icon/play.svg"
                                                        alt="">
                                                    Lecture1.1 Introduction to the User Experience Course
                                                </p>
                                                <div class="d-flex">
                                                    <a class="underline me-4" href="#">Preview</a>
                                                    <div class="lesson_duration">02:53</div>
                                                </div>
                                            </li>
                                            <li class="lesson_accordion d-flex justify-content-between">
                                                <p>
                                                    <img
                                                        src="https://dreamslms.dreamguystech.com/html/assets/img/icon/play.svg"
                                                        alt="">
                                                    Lecture1.1 Introduction to the User Experience Course
                                                </p>
                                                <div class="d-flex">
                                                    <a class="underline me-4" href="#">Preview</a>
                                                    <div class="lesson_duration">02:53</div>
                                                </div>
                                            </li>
                                            <li class="lesson_accordion d-flex justify-content-between">
                                                <p>
                                                    <img
                                                        src="https://dreamslms.dreamguystech.com/html/assets/img/icon/play.svg"
                                                        alt="">
                                                    Lecture1.1 Introduction to the User Experience Course
                                                </p>
                                                <div class="d-flex">
                                                    <a class="underline me-4" href="#">Preview</a>
                                                    <div class="lesson_duration">02:53</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button text-black d-flex justify-content-between"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="true" aria-controls="collapseFour">
                                        Type, Color & Icon Introduction
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                     data-bs-parent="#accordionCourseLessons">
                                    <div class="accordion-body text-blackGray">
                                        <ul class="list-unstyled">
                                            <li class="lesson_accordion d-flex justify-content-between">
                                                <p>
                                                    <img
                                                        src="https://dreamslms.dreamguystech.com/html/assets/img/icon/play.svg"
                                                        alt="">
                                                    Lecture1.1 Introduction to the User Experience Course
                                                </p>
                                                <div class="d-flex">
                                                    <a class="underline me-4" href="#">Preview</a>
                                                    <div class="lesson_duration">02:53</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box bg-white mt-4">
                    <h5 class="font-weight-bolder text-info mb-3">About the instructor</h5>
                    <div class="about_the_instructor">
                        <div class="d-flex align-items-center">
                            <img width="50" class="rounded-circle"
                                 src="https://dreamslms.dreamguystech.com/html/assets/img/user/user1.jpg" alt="">
                            <div class="mx-3">
                                <h5 class="my-0 font-weight-bolder text-blackGray">
                                    <a class="" href="#">Nicole Brown</a>
                                </h5>
                                <p class="my-0 text-blackGray">UX/UI Designer</p>
                            </div>
                        </div>
                        <div>
                            <p class="d-flex align-items-center font-weight-normal my-auto">
                                <i class="material-icons text-primary">star</i>
                                <i class="material-icons text-primary">star</i>
                                <i class="material-icons text-primary">star</i>
                                <i class="material-icons text-primary">star</i>
                                <i class="material-icons">star</i>
                                <span class="ms-2 text-dark">4.0</span>
                                <span class="ms-2 text-dark">Instructor Rating</span>
                            </p>
                        </div>
                    </div>
                    <div>
                        <hr class="horizontal black">
                        <div>
                            <ul class="d-flex flex-wrap gap-2 list-unstyled">
                                <li class="me-4">
                                    <img src="https://dreamslms.dreamguystech.com/html/assets/img/icon/play.svg" alt="">
                                    <span class="fs-6 ms-1 text-dark fw-bolder">5 Courses</span>
                                </li>
                                <li class="me-4">
                                    <img src="https://dreamslms.dreamguystech.com/html/assets/img/icon/icon-01.svg"
                                         alt="">
                                    <span class="fs-6 ms-1 text-dark fw-bolder">12+ Lesson</span>
                                </li>
                                <li class="me-4">
                                    <img src="https://dreamslms.dreamguystech.com/html/assets/img/icon/icon-02.svg"
                                         alt="">
                                    <span class="fs-6 ms-1 text-dark fw-bolder">9hr 30min</span>
                                </li>
                                <li class="me-4">
                                    <img src="https://dreamslms.dreamguystech.com/html/assets/img/icon/people.svg"
                                         alt="">
                                    <span class="fs-6 ms-1 text-dark fw-bolder">270,866 students enrolled</span>
                                </li>
                            </ul>
                        </div>
                        <hr class="horizontal black">
                    </div>
                    <div class="text-blackGray">
                        <p>UI/UX Designer, with 7+ Years Experience. Guarantee of High Quality Work.</p>
                        <p>Skills: Web Design, UI Design, UX/UI Design, Mobile Design, User Interface Design, Sketch,
                            Photoshop, GUI, Html, Css, Grid Systems, Typography, Minimal, Template, English, Bootstrap,
                            Responsive Web Design, Pixel Perfect, Graphic Design, Corporate, Creative, Flat, Luxury and
                            much more.</p>
                        <p>
                            Available for:<br>
                            <br>
                            1. Full Time Office Work <br>
                            2. Remote Work <br>
                            3. Freelance <br>
                            4. Contract <br>
                            5. Worldwide
                        </p>
                    </div>
                </div>
                <div class="mt-5">
                    <h3 class="fw-bolder mb-4">Student feedback</h3>
                    <div class="row">
                        <div class="col-12 col-sm-3 d-flex flex-column justify-content-center align-items-center">
                            <h1 class="fs-1 text-primary">4.7</h1>
                            <div class="mb-2">
                                <p class="d-flex align-items-center font-weight-normal my-auto">
                                    <i class="material-icons text-warning">star</i>
                                    <i class="material-icons text-warning">star</i>
                                    <i class="material-icons text-warning">star</i>
                                    <i class="material-icons text-warning">star</i>
                                    <i class="material-icons">star</i>
                                </p>
                            </div>
                            <p class="text-primary fw-bolder">Course Rating</p>
                        </div>
                        <div class="col-12 col-sm-9">
                            <div class="d-flex align-items-center">
                                <div class="progress-wrapper w-100 me-3">
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="65"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
                                    </div>
                                </div>
                                <div class="ms-auto">
                                    <p class="d-flex align-items-center font-weight-normal my-auto">
                                        <i class="material-icons text-warning">star</i>
                                        <i class="material-icons text-warning">star</i>
                                        <i class="material-icons text-warning">star</i>
                                        <i class="material-icons text-warning">star</i>
                                        <i class="material-icons text-warning">star</i>
                                        <span class="ms-2 text-dark">65%</span>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <div class="progress-wrapper w-100 me-3">
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                    </div>
                                </div>
                                <div class="ms-auto">
                                    <p class="d-flex align-items-center font-weight-normal my-auto">
                                        <i class="material-icons text-warning">star</i>
                                        <i class="material-icons text-warning">star</i>
                                        <i class="material-icons text-warning">star</i>
                                        <i class="material-icons text-warning">star</i>
                                        <i class="material-icons">star</i>
                                        <span class="ms-2 text-dark">20%</span>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <div class="progress-wrapper w-100 me-3">
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="5"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 5%;"></div>
                                    </div>
                                </div>
                                <div class="ms-auto d-flex">
                                    <p class="d-flex align-items-center font-weight-normal my-auto">
                                        <i class="material-icons text-warning">star</i>
                                        <i class="material-icons text-warning">star</i>
                                        <i class="material-icons text-warning">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>

                                    </p>
                                    <span class="ms-2 text-dark">05%</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <div class="progress-wrapper w-100 me-3">
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="2"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 2%;"></div>
                                    </div>
                                </div>
                                <div class="ms-auto">
                                    <p class="d-flex align-items-center font-weight-normal my-auto">
                                        <i class="material-icons text-warning">star</i>
                                        <i class="material-icons text-warning">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <span class="ms-2 text-dark">02%</span>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <div class="progress-wrapper w-100 me-3">
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="1"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                                    </div>
                                </div>
                                <div class="ms-auto">
                                    <p class="d-flex align-items-center font-weight-normal my-auto">
                                        <i class="material-icons text-warning">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <span class="ms-2 text-dark">01%</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>Reviews</h3>
                        <div class="w-25">
                            <form>
                                <div class="input-group input-group-static mb-4">
                                    <label for="exampleFormControlSelect1" class="ms-0">Filter Rating</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>All Ratings</option>
                                        <option>Five stars</option>
                                        <option>Four stars</option>
                                        <option>Three stars</option>
                                        <option>Two stars</option>
                                        <option>One star</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="reviews">
                        <div class="review_box box">
                            <div class="d-flex">
                                <div class="d-none d-sm-block">
                                    <img width="60" class="rounded-circle me-4"
                                         src="https://dreamslms.dreamguystech.com/html/assets/img/user/user1.jpg"
                                         alt="">
                                </div>
                                <div>
                                    <h6 class="text-black fw-bolder">Nguyen Dang Hoang (CEP.ESS) N.</h6>
                                    <p class="d-flex align-items-center font-weight-normal my-auto">
                                        <i class="material-icons text-warning">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <span class="ms-2">a weak ago</span>
                                    </p>
                                    <p class="text-blackGray mt-2">This course helps me to know and be aware of some
                                        fundamental concept of TS. And, I also like the practical way in which help me
                                        to understand the concept.</p>
                                </div>
                            </div>
                        </div>
                        <div class="review_box box mt-3">
                            <div class="d-flex">
                                <div class="d-none d-sm-block">
                                    <img width="60" class="rounded-circle me-4"
                                         src="https://dreamslms.dreamguystech.com/html/assets/img/user/user1.jpg"
                                         alt="">
                                </div>
                                <div>
                                    <h6 class="text-black fw-bolder">Nguyen Dang Hoang (CEP.ESS) N.</h6>
                                    <p class="d-flex align-items-center font-weight-normal my-auto">
                                        <i class="material-icons text-warning">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <span class="ms-2">a weak ago</span>
                                    </p>
                                    <p class="text-blackGray mt-2">This course helps me to know and be aware of some
                                        fundamental concept of TS. And, I also like the practical way in which help me
                                        to understand the concept.</p>
                                </div>
                            </div>
                        </div>
                        <div class="review_box box mt-3">
                            <div class="d-flex">
                                <div class="d-none d-sm-block">
                                    <img width="60" class="rounded-circle me-4"
                                         src="https://dreamslms.dreamguystech.com/html/assets/img/user/user1.jpg"
                                         alt="">
                                </div>
                                <div>
                                    <h6 class="text-black fw-bolder">Nguyen Dang Hoang (CEP.ESS) N.</h6>
                                    <p class="d-flex align-items-center font-weight-normal my-auto">
                                        <i class="material-icons text-warning">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <span class="ms-2">a weak ago</span>
                                    </p>
                                    <p class="text-blackGray mt-2">This course helps me to know and be aware of some
                                        fundamental concept of TS. And, I also like the practical way in which help me
                                        to understand the concept.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 video-col d-none d-lg-block">
                @include('courses._video-col')
            </div>

        </div>
    </div>
</x-main-layout>
