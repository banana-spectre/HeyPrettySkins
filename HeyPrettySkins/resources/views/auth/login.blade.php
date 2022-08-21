<x-guest-layout>
    <!--<x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>-->

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

<head>      
    <link rel="stylesheet" href="{{ asset('HeyPrettySkins.css') }}">
    <link rel="shortcut icon" type="image/ico" href="{{ asset('pictures/icon.ico') }}"/>
</head>

<body class="login">
    <div class="login-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="login-imgcontainer">
                <img src="{{ asset('pictures/logo.png') }}" alt="Logo" class="logo">
            </div>

            <!-- Email Address -->
            <div>
                <label for="email" :value="__('Email')" />
                <input id="email" placeholder="Email" style="border:2px solid black; text-align:left; font-size:15px"
                                type="email"
                                name="email"
                                required autofocus />
            </div>

            <!-- Password -->
            <div>
                <label for="password" :value="__('Password')" />
                <input id="password" placeholder="Password" style="border: 2px solid black; text-align:left; font-size:15px"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>
                        
            <!-- Remember Me -->
            <div style="padding-top:10px">
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span>{{ __('Remember me') }}</span>
                </label>
            
                &emsp;&emsp;&emsp;
                
            <!-- Forgot password -->
                <!-- @if (Route::has('password.request'))
                    <a class="login-links" href="{{ route('password.request') }}">
                        {{ __('Forgot password?') }}
                    </a>
                @endif -->
            </div>

            <br>
                <button class="login-button">
                    {{ __('Log in') }}
                </button>

            <!--footer--->
            <table class="login-table">
                <tr>
                    <td>
                    <a class="login-links" href="/policy-updates" target="_self">
                        <div class="policy">Policy Updates</div>
                    </a>
                    </td>
                
                    <td>
                    <a class="login-links" href="/appropriate-use" target="_self">
                        <div class="app">Appropriate Use</div>
                    </a>
                    </td>
                </tr>
            </table>
            <!--end of footer-->
        </form>
    </div>
</body>
    <!--</x-auth-card>-->
</x-guest-layout>
