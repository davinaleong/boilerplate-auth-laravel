@extends('static.auth')

@section('page-name', ' - Forgot Password')

@section('auth-content')
<p class="m-v-b-400">
    Enter your email to receive instructions on how to reset your password.
</p>

<form class="flow" method="POST" action="{{ route('password.email') }}">
    @csrf

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
                required
            />

            @error('email')
                <p class="fz-300 text-danger-700">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="btn-group">
        <button class="btn btn-primary" type="submit">
            <i class="fa-solid fa-sharp fa-check"></i> Submit
        </button>
        <a href="{{ route('login') }}" class="btn btn-gray">
            <i class="fa-solid fa-sharp fa-ban"></i> Cancel
        </a>
    </div>
</form>
@endsection