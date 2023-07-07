@extends('static.auth')

@section('page-name', '- Forgot Password')

@section('auth-content')
<p class="m-v-b-400">Enter your new password.</p>

<form action="#" method="post">
    <div class="form-group m-f-b-400">
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
    <div class="form-group m-f-b-400">
        <label for="password_confirmation" class="form-label">
            <i class="fa-duotone fa-key"></i> Confirm
        </label>
        <div class="form-field-wrapper">
            <input
                type="password"
                name="password_confirmation"
                id="password_confirmation"
                class="form-field"
                required
            />
        </div>
    </div>

    <div class="btn-group">
        <button class="btn btn-primary" type="submit">
            <i class="fa-solid fa-sharp fa-check"></i> Submit
        </button>
        <a href="#" class="btn btn-gray">
            <i class="fa-solid fa-sharp fa-ban"></i> Cancel
        </a>
    </div>
</form>
@endsection