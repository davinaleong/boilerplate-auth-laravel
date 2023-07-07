@extends('static.auth')

@section('page-name', ' - Forgot Password')

@section('auth-content')
<p class="m-v-b-400">
    Enter your email to receive instructions on how to reset your password.
</p>

<form action="#" method="post">
    <div class="form-group m-f-b-400">
        <label for="email" class="form-label">
            <i class="fa-duotone fa-envelope"></i> Email
        </label>
        <div class="form-field-wrapper">
            <input
                type="email"
                name="email"
                id="email"
                class="form-field"
                required
            />
        </div>
    </div>

    <div class="btn-group">
        <a href="forgot-password-2" class="btn btn-primary">
            <i class="fa-solid fa-sharp fa-check"></i> Submit
        </a>
        <a href="landing" class="btn btn-gray">
            <i class="fa-solid fa-sharp fa-ban"></i> Cancel
        </a>
    </div>
</form>
@endsection