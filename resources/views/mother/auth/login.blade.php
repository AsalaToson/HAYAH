{{--<x-guest-layout>--}}
{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}


{{--    <div class="form-group" style="padding: 0 0 25px 0">--}}
{{--        <label for="exampleFormControlSelect1"> Login As Mother </label>--}}
{{--    </div>--}}

{{--    <div class="loginform" id="user"> </div>--}}

{{--    <form method="POST" action="{{ route("login.mother") }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                          type="password"--}}
{{--                          name="password"--}}
{{--                          required autocomplete="current-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Remember Me -->--}}
{{--        <div class="block mt-4">--}}
{{--            <label for="remember_me" class="inline-flex items-center">--}}
{{--                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">--}}
{{--                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot your password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}

{{--            <x-primary-button class="ms-3">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}

{{--<x-guest-layout>--}}
{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}


{{--    <div class="form-group" style="padding: 0 0 25px 0">--}}
{{--        <label for="exampleFormControlSelect1"> Login As Mother </label>--}}
{{--    </div>--}}

{{--    <div class="loginform" id="user"> </div>--}}

{{--    <form method="POST" action="{{ route("login.mother") }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                          type="password"--}}
{{--                          name="password"--}}
{{--                          required autocomplete="current-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Remember Me -->--}}
{{--        <div class="block mt-4">--}}
{{--            <label for="remember_me" class="inline-flex items-center">--}}
{{--                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">--}}
{{--                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot your password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}

{{--            <x-primary-button class="ms-3">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}

{{--    <!DOCTYPE html>--}}
{{--<head>--}}
{{--    <title>Login Form</title>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <link rel="icon" type="image/png" href="../../site/login/images/icons/favicon.ico"/>--}}
{{--    <link rel="stylesheet" type="text/css" href="../../site/login/vendor/bootstrap/css/bootstrap.min.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="../../site/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="../../site/login/fonts/iconic/css/material-design-iconic-font.min.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="../../site/login/vendor/animate/animate.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="../../site/login/vendor/css-hamburgers/hamburgers.min.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="../../site/login/vendor/animsition/css/animsition.min.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="../../site/login/vendor/select2/select2.min.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="../../site/login/vendor/daterangepicker/daterangepicker.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="../../site/login/css/util.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="../../site/login/css/main.css">--}}

{{--</head>--}}
{{--<body>--}}

{{--<div class="limiter">--}}
{{--    <div class="container-login100" style="background-image: url('{{asset('site/assets/images/ff.jpg')}}');">--}}

{{--        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">--}}
{{--            <form class="login100-form validate-form" method="POST" action="{{ route("login.mother") }}">--}}
{{--                @csrf--}}
{{--                <span class="login100-form-title p-b-49">--}}
{{--						HAYAH Login--}}
{{--					</span>--}}

{{--                <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">--}}
{{--                    <span class="label-input100">Email</span>--}}
{{--                    <input class="input100" type="text" name="Email" placeholder="Type your Email">--}}
{{--                    <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--                </div>--}}
{{--                <div class="wrap-input100 validate-input" data-validate="Password is required">--}}
{{--                    <span class="label-input100">Password</span>--}}
{{--                    <input class="input100" type="password" name="pass" placeholder="Type your password">--}}
{{--                    <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--                </div>--}}

{{--                <div class="text-right p-t-8 p-b-31">--}}
{{--                    @if (Route::has('password.request'))--}}
{{--                        <a class="underline text-sm text-gray-400 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                            {{ __('Forgot your password?') }}--}}
{{--                        </a>--}}
{{--                    @endif--}}
{{--                    <button class="login100-form-btn">--}}

{{--                        {{ __('Log in') }}--}}

{{--                    </button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<script src="../../site/login/vendor/jquery/jquery-3.2.1.min.js"></script>--}}

{{--<script src="../../site/login/vendor/animsition/js/animsition.min.js"></script>--}}

{{--<script src="../../site/login/vendor/bootstrap/js/popper.js"></script>--}}
{{--<script src="../../site/login/vendor/bootstrap/js/bootstrap.min.js"></script>--}}

{{--<script src="../../site/login/vendor/select2/select2.min.js"></script>--}}

{{--<script src="../../site/login/vendor/daterangepicker/moment.min.js"></script>--}}
{{--<script src="../../site/login/vendor/daterangepicker/daterangepicker.js"></script>--}}

{{--<script src="../../site/login/vendor/countdowntime/countdowntime.js"></script>--}}

{{--<script src="../../site/login/js/main.js"></script>--}}

{{--</body>--}}
{{--</html>--}}
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <div class="form-group" style="padding: 0 0 25px 0">
        <label for="exampleFormControlSelect1"> Login As Mother </label>
    </div>

    <div class="loginform" id="user"> </div>

    <form method="POST" action="{{ route("login.mother") }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
