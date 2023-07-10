@extends('layouts.auth')

@section('page-name', ' - Forgot Password')

@section('auth-content')
<p class="m-v-b-400">
    Enter your email and your new password to reset it.
</p>

@include('components.card-message')
@include('components.card-errors')

<form class="m-v-t-400" method="POST" action="{{ route('password.store') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $request->route('token') }}">

    <div class="form-group @error('email') form-group-danger @enderror">
        <label for="email" class="form-label">
            <i class="fa-duotone fa-envelope"></i> Email
        </label>
        <div class="form-field-wrapper flow">
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
        <label for="password" class="form-label">
            <i class="fa-duotone fa-key"></i> Password
        </label>
        <div class="form-field-wrapper flow">
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
        <div class="form-field-wrapper flow">
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
            <i class="fa-solid fa-sharp fa-key"></i> Reset Password
        </button>
        <a href="{{ route('login') }}" class="btn btn-gray">
            <i class="fa-solid fa-sharp fa-ban"></i> Cancel
        </a>
    </div>
</form>
@endsection