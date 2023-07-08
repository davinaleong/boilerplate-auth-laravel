@extends('layouts.app')

@section('page-name', ' - Login')
@section('body-class', 'login')

@section('content')
<header class="login__heading bg-full bg-landing-1 flow p-v-400">
    <h1 class="fz-900 clr-gray-50 ta-center">
        <small>Welcome to</small><br />
        <strong>{{ env('APP_NAME', 'Bolierplate Auth Laravel') }}</strong>
    </h1>
    <p class="fz-500">By {{ env('APP_AUTHOR', 'Davina Leong') }}</p>
</header>

<main class="login__main bg-gray-50">
    <div class="main-content-wrapper flow p-v-400">
        <h2 class="fz-700">Please login</h2>

        @include('components.card-message')
        @include('components.card-errors')

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group @error('email') form-group-danger @enderror">
                <label for="email" class="form-label">
                    <i class="fa-duotone fa-envelope"></i> Email
                </label>
                <div class="form-field-wrapper flow">
                    <input
                        type="text"
                        name="email"
                        id="email"
                        class="form-field"
                        autofocus
                        autocomplete="username"
                        required
                        />
                    @error('email')
                        <p class="fz-300 text-danger-700">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="form-group @error('password') form-group-danger @enderror">
                <label for="password" class="form-label">
                    <i class="fa-duotone fa-key"></i> Password
                </label>
                <div class="form-field-wrapper flow">
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-field"
                        autocomplete="password"
                        required
                        />
                    @error('password')
                        <p class="fz-300 text-danger-700">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="remember_me" class="form-label">
                    <i class="fa-duotone fa-key"></i> Remember Me
                </label>
                <div class="form-field-wrapper">
                    <label
                        for="remember_me"
                        class="form-radio-checkbox-wrapper form-radio-checkbox-wrapper-gray"
                        >
                        Yes
                        <input
                            type="checkbox"
                            name="remember_me"
                            id="remember_me"
                            class="form-field"
                            value="1"
                        />
                        <span class="form-checkbox"></span>
                    </label>
                </div>
            </div>

            <div class="btn-group m-v-t-400">
                <button class="btn btn-primary" type="submit">
                    <i class="fa-solid fa-sharp fa-sign-in"></i> Login
                </button>

                <a href="{{ route('password.request') }}" class="btn btn-gray">
                    <i class="fa-solid fa-sharp fa-question"></i> Forgot Password
                </a>

                <a href="{{ route('register') }}" class="btn btn-secondary">
                    <i class="fa-solid fa-sharp fa-plus"></i> Register
                </a>
            </div>
        </form>
    </div>
</main>
@endsection