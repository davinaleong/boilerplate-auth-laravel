@extends('layouts.auth')

@section('page-name', ' - Verify Email')

@section('auth-content')
<p class="m-v-b-400">
    Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
</p>

@include('components.card-message')
@include('components.card-errors')

<form class="m-v-t-400" method="POST" action="{{ route('verification.send') }}">
    @csrf

    <div class="btn-group m-v-t-400">
        <button class="btn btn-primary" type="submit">
            <i class="fa-solid fa-sharp fa-send"></i> Resend Verification Email
        </button>
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <button class="btn btn-secondary" type="submit">
                <i class="fa-solid fa-sharp fa-sign-out"></i> Logout
            </button>
        </form>
        <a href="{{ route('cms.dashboard.index') }}" class="btn btn-gray" type="submit">
            <i class="fa-solid fa-sharp fa-chevron-left"></i> Back
        </a>
    </div>
</form>
@endsection