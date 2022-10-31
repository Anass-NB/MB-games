{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

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
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
 --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LOGIN</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ URL::asset("assets/login.css") }}">


</head>
<body>
    
<!-- Start Login -->
<div class="login" id="login">
    <div class="image">
        <div class="content">
            <h2>Login</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, consequuntur laboriosam ratione molestiae possimus aliquid impedit sint, repellat ducimus quasi repudiandae voluptates reiciendis nam sunt nostrum unde dolorem libero quas.</p>
            <img src="{{ asset("images/Two factor authentication-bro.svg") }}" alt="discount" />
        </div>
    </div>
    <div class="form">
        <div class="content">
            <h2>Login To Your Account</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                <input type="email" placeholder="Your Email" name="email" id="mail" value="{{ old("email") }}" required autofocus>
                <x-input-error :messages="$errors->get('email')" class="m-2" />
                    
                {{-- <x-input-label for="password" :value="__('Password')" /> --}}
                <input type="password" placeholder="Your Phone" name="password" id="password" value="{{ old("password") }}" required >
                <x-input-error :messages="$errors->get('password')" class="m-2" />
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</div>
<!-- End Login -->
</body>
</html>


