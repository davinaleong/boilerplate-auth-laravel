@extends('layouts.auth')

@section('page-name', ' - Confirm Password')

@section('auth-content')
<p class="m-v-b-400">
    Please confirm your password.
</p>

@include('components.card-message')
@include('components.card-errors')

<form class="m-v-t-400" method="POST" action="{{ route('password.confirm') }}">
    @csrf

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
                autofocus
                required
            />

            @error('password')
                <p class="fz-300 text-danger-700">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="btn-group m-v-t-400">
        <button class="btn btn-primary" type="submit">
            <i class="fa-solid fa-sharp fa-check"></i> Confirm
        </button>
        <a href="{{ route('login') }}" class="btn btn-gray">
            <i class="fa-solid fa-sharp fa-ban"></i> Cancel
        </a>
    </div>
</form>
@endsection