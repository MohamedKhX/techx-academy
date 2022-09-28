{{--<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>--}}
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
                <div class="container p-7 pb-2 py-5 px-4 px-sm-4 px-md-5 pb-sm-6">
                    <div class="d-flex flex-column flex-sm-row justify-content-between align-content-start align-items-sm-center">
                        <img class="w-xl-25 w-50" src="https://dreamslms.dreamguystech.com/assets/img/logo.svg" alt="">
                        <div>
                            <a class="underline hover_effect" href="#">Back To Home</a>
                        </div>
                    </div>
                    <div class="mt-5">
                        <h3 class="text-dark fs-3">Sign into Your Account</h3>
                    </div>
                    <div class="mt-4">
                        <form>
                            <div class="mb-4">
                                <label for="email" class="label text-dark">Email</label>
                                <input id="email" type="text" class="input">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="label text-dark">Password</label>
                                <input id="password" type="password" class="input">
                            </div>
                            <div class="mb-4">
                                <a class="forgot-link" href="#">Forget Password ?</a>
                            </div>
                            <div class="form-check form-switch d-flex align-items-center mb-4 is-filled">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                            </div>
                            <div class="mt-1">
                                <button class="btn btn-lg bg-gradient-primary w-100">Sign in</button>
                            </div>
                        </form>
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
                            <p>New User ? <a class="forgot-link" href="#">Create an Account</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
