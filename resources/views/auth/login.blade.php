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

                <x-jet-button.scss class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button.scss>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>--}}
<x-layouts.auth-layout>
    <div class="mt-5">
        <h3 class="text-dark fs-3">Sign into Your Account</h3>
        @if (session('status'))
            <div class="text-success">
                {{ session('status') }}
            </div>
        @endif
    </div>
    <div class="mt-4">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="label text-dark">Email</label>
                <input id="email" name="email" type="email" class="input" placeholder="Enter your email" autofocus>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="label text-dark">Password</label>
                <input id="password" name="password" type="password" class="input" placeholder="Enter your password">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <a class="forgot-link" href="#">Forget Password ?</a>
            </div>
            <div class="form-check form-switch d-flex align-items-center mb-4 is-filled">
                <input name="remember" class="form-check-input" type="checkbox" id="rememberMe">
                <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
            </div>
            <div class="mt-1">
                <button class="btn btn-lg bg-gradient-primary w-100">Sign in</button>
            </div>
        </form>
    </div>

    <x-slot name="guest">
        <p>New User ? <a class="forgot-link fs-6" href="{{ route('register') }}">Create an Account</a></p>
    </x-slot>
</x-layouts.auth-layout>

