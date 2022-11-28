<head>
    <link rel="stylesheet" href="{{ asset('Client/css/style.css') }}">
</head>

<div id="register-bg">
    <div class="form-register">
        <div class="form-container">
            <div class="logo" name="logo">
                <img src="{{ asset('Client/Images/logo.png') }}" alt="logo" width="120px">
            </div>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                        <input id="username" class="input-auth" type="text" name="name"
                            :value="old('username')" required autofocus placeholder="Username" autocomplete="username" />
                </div>

                <div >
                    <input id="email" class="input-auth" type="email" name="email" placeholder="Email address" :value="old('email')"
                        required />
                </div>

                <div >
                    <input id="password" class="input-auth" type="password" name="password" required
                        autocomplete="new-password" placeholder="Password" />
                </div>

                <div >
                    <input id="password_confirmation" class="input-auth" type="password"
                        name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div >
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms" required />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' =>
                                            '<a target="_blank" href="' .
                                            route('terms.show') .
                                            '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                            __('Terms of Service') .
                                            '</a>',
                                        'privacy_policy' =>
                                            '<a target="_blank" href="' .
                                            route('policy.show') .
                                            '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                            __('Privacy Policy') .
                                            '</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif

                <div class="items-float-right">
                    <button class="register-btn">
                        {{ __('Register') }}
                    </button>
                    <a class="already-registered-txt" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>
                
            </form>
        </div>
    </div>
</div>
