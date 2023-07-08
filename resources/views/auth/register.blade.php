@extends('layouts.auth')

@section('page-name', ' - Register')

@section('auth-content')
<p class="m-v-b-400">
    Enter your email and password to create an account.
</p>

@include('components.card-message')
@include('components.card-errors')

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group @error('name') form-group-danger @enderror">
        <label for="name" class="form-label">
            <i class="fa-duotone fa-user"></i> Name
        </label>
        <div class="form-field-wrapper">
            <input
                type="text"
                name="name"
                id="name"
                class="form-field"
                autofocus
                required
            />

            @error('name')
                <p class="fz-300 text-danger-700">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="form-group @error('email') form-group-danger @enderror">
        <label for="email" class="form-label">
            <i class="fa-duotone fa-envelope"></i> Email
        </label>
        <div class="form-field-wrapper">
            <input
                type="email"
                name="email"
                id="email"
                class="form-field"
                autofocus
                required
            />

            @error('email')
                <p class="fz-300 text-danger-700">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="form-group @error('password') form-group-danger @enderror">
        <label for="email" class="form-label">
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

            @error('password')
                <p class="fz-300 text-danger-700">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="form-group @error('password_confirmation') form-group-danger @enderror">
        <label for="password_confirmation" class="form-label">
            <i class="fa-duotone fa-key"></i> Confirm Password
        </label>
        <div class="form-field-wrapper">
            <input
                type="password"
                name="password_confirmation"
                id="password_confirmation"
                class="form-field"
                required
            />

            @error('password_confirmation')
                <p class="fz-300 text-danger-700">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="btn-group m-v-t-400">
        <button class="btn btn-primary" type="submit">
            <i class="fa-solid fa-sharp fa-check"></i> Register
        </button>
        <a href="{{ route('welcome') }}" class="btn btn-gray">
            <i class="fa-solid fa-sharp fa-ban"></i> Cancel
        </a>
        <a href="{{ route('login') }}" class="btn btn-secondary">
            <i class="fa-solid fa-sharp fa-sign-in"></i> Login
        </a>
    </div>
</form>
@endsection