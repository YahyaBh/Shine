<head>
    <link rel="stylesheet" href="{{ asset('Client/css/style.css') }}">
</head>

<div id="register-bg">
    <video autoplay muted loop id="myVideo">
        <source src="{{ asset('Client/Videos/Pexels Videos 2796080.mp4') }}" type="video/mp4">
    </video>
    <div class="form-register">
        <div class="form-container-login">
            <div class="logo" name="logo">
                <img src="{{ asset('Client/Images/logo.png') }}" alt="logo" width="120px">
            </div>



            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <x-jet-validation-errors />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <input id="email" class="input-auth" placeholder="Email Address" type="email" name="email"
                        :value="old('email')" required autofocus />
                </div>

                <div class="mt-4">
                    <input id="password" class="input-auth" placeholder="Password" type="password" name="password"
                        required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me">
                        <input type="checkbox" id="remember_me" name="remember" />
                        <span style="color: white;font-size : 20px"
                            class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="items-float-right">
                    <button class="register-btn">
                        {{ __('Login') }}
                    </button>
                    <div>
                        <a class="already-registered-txt" href="{{ route('register') }}">
                            {{ __('Don\'t have an account?') }}
                        </a>
                        @if (Route::has('password.request'))
                            <a class="already-registered-txt" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
