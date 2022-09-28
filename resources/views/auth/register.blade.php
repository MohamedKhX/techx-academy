{{--
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
--}}
<x-layouts.auth-layout>
    <div class="mt-5">
        <h3 class="text-dark fs-3">Sign up</h3>
    </div>
    <div class="mt-4">
        <form>
            <div class="mb-4">
                <label for="name" class="label text-dark">Full Name</label>
                <input id="name" type="text" class="input">
            </div>
            <div class="mb-4">
                <label for="email" class="label text-dark">Email</label>
                <input id="email" type="email" class="input">
            </div>
            <div class="mb-3">
                <label for="password" class="label text-dark">Password</label>
                <input id="password" type="password" class="input">
            </div>
            <div class="form-check form-switch d-flex align-items-center mb-4 is-filled">
                <input class="form-check-input" type="checkbox" id="rememberMe">
                <label class="form-check-label mb-0 ms-3" for="rememberMe">
                    I agree to the
                    <a class="hover_effect" href="#">Terms of Service</a>
                    and
                    <a class="hover_effect" href="#">Privacy Policy.</a>
                </label>
            </div>
            <div class="mt-1">
                <button class="btn btn-lg bg-gradient-primary w-100">Create Account</button>
            </div>
        </form>
    </div>

    <x-slot name="guest">
        <p>Already have an account? <a class="hover_effect forgot-link fs-6" href="#">Sign in</a></p>
    </x-slot>
</x-layouts.auth-layout>
