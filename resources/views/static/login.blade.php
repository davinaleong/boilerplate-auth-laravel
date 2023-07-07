@extends('static.app')

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

        <form action="#" method="post">
            <div class="form-group">
            <label for="email" class="form-label">
                <i class="fa-duotone fa-envelope"></i> Email
            </label>
            <div class="form-field-wrapper">
                <input
                type="text"
                name="email"
                id="email"
                class="form-field"
                required
                />
            </div>
            </div>
            <div class="form-group">
            <label for="password" class="form-label">
                <i class="fa-duotone fa-key"></i> Password
            </label>
            <div class="form-field-wrapper">
                <input
                type="password"
                name="password"
                id="password"
                class="form-field"
                required
                />
            </div>
            </div>
            <div class="form-group">
            <label for="checkbox-remember-me" class="form-label">
                <i class="fa-duotone fa-key"></i> Remember Me
            </label>
            <div class="form-field-wrapper">
                <label
                for="checkbox-remember-me"
                class="form-radio-checkbox-wrapper form-radio-checkbox-wrapper-gray"
                >
                Yes
                <input
                    type="checkbox"
                    name="checkbox-remember-me"
                    id="checkbox-remember-me"
                    class="form-field"
                    value="1"
                />
                <span class="form-checkbox"></span>
                </label>
            </div>
            </div>

            <div class="btn-group m-v-t-400">
            <button class="btn btn-primary" type="submit">
                <i class="fa-solid fa-sharp fa-check"></i> Submit
            </button>

            <a href="forgot-password-1" class="btn btn-gray">
                <i class="fa-solid fa-sharp fa-question"></i> Forgot Password
            </a>
            </div>
        </form>
    </div>
</main>
@endsection