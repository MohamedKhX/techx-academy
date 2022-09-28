<x-guest-layout>
    <div class="container-fluid p-0 m-0">
        <div class="row m-0 p-0 justify-content-end">
            <div class="col-12 col-lg-6 d-none d-lg-flex pb-10 p-0 m-0 auth_background">
                <x-slider class="w-100" id="authImages" per-page="1" col="col-12" break-points="{1000: {perPage: 1} }">
                    <li class="splide__slide pt-1 px-0 px-xxl-8">
                        <div class="splide__slide__container">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <img width="430" class="img-fluid" src="https://dreamslms.dreamguystech.com/assets/img/login-img.png" alt="">
                                </div>
                                <div class="d-flex flex-column text-center justify-content-center">
                                    <h3>
                                        Welcome to <br> DreamLMS Courses
                                    </h3>
                                    <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque doloribus eveniet incidunt necessitatibus obcaecati optio quia ratione reiciendis repellendus unde.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide pt-1 px-0 px-xxl-8">
                        <div class="splide__slide__container">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <img width="430" class="img-fluid" src="https://dreamslms.dreamguystech.com/assets/img/login-img.png" alt="">
                                </div>
                                <div class="d-flex flex-column text-center justify-content-center">
                                    <h3>
                                        Welcome to <br> DreamLMS Courses
                                    </h3>
                                    <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque doloribus eveniet incidunt necessitatibus obcaecati optio quia ratione reiciendis repellendus unde.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide pt-1 px-0 px-xxl-8">
                        <div class="splide__slide__container">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <img width="430" class="img-fluid" src="https://dreamslms.dreamguystech.com/assets/img/login-img.png" alt="">
                                </div>
                                <div class="d-flex flex-column text-center justify-content-center">
                                    <h3>
                                        Welcome to <br> DreamLMS Courses
                                    </h3>
                                    <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque doloribus eveniet incidunt necessitatibus obcaecati optio quia ratione reiciendis repellendus unde.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </x-slider>
            </div>
            <div class="col-12 col-lg-6 p-0 m-0">
                <div class="container p-7 pb-2 py-5 px-4 px-sm-4 px-xl-7 py-xl-7 pb-xl-4 px-md-5 pb-sm-6">
                    <div class="d-flex flex-column flex-sm-row justify-content-between align-content-start align-items-sm-center">
                        <img class="w-xl-25 w-50" src="https://dreamslms.dreamguystech.com/assets/img/logo.svg" alt="">
                        <div>
                            <a class="underline hover_effect" href="#">Back To Home</a>
                        </div>
                    </div>
                    <div>
                        {{ $slot }}
                    </div>
                </div>
                <div class="container-fluid px-0">
                    <div class="py-3 py-sm-6 text-center" style="background-color: #fdf3f9">
                        <p class="text-dark">Or sign in with</p>
                        <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center">
                            <a class="d-flex align-items-center fw-bold px-3 py-2" href="#">
                                <img class="me-2" src="https://dreamslms.dreamguystech.com/assets/img/net-icon-01.png" alt="">
                                Sign in using Google
                            </a>
                            <a class="d-flex align-items-center fw-bold px-3 py-2" href="#">
                                <img class="me-2" src="https://dreamslms.dreamguystech.com/assets/img/net-icon-02.png" alt="">
                                Sign in using Facebook
                            </a>
                        </div>
                        <div class="mt-4 text-dark">
                            {{ $guest ?? null }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
