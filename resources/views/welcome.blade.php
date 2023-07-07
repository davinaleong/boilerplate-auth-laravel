@extends('layouts.app')

@section('body-class', 'landing bg-full bg-landing-1 flow p-v-400')

@section('content')
<header class="flow p-v-400">
    <h1 class="fz-900 clr-gray-50 ta-center">
        <small>Welcome to</small><br />
        <strong>{{ env('APP_NAME', 'Bolierplate Auth Laravel') }}</strong>
    </h1>
    <p class="fz-500">By {{ env('APP_AUTHOR', 'Davina Leong') }}</p>

    <div class="btn-container">
        <a href="{{ route('login') }}" class="btn btn-accent-2">
            <i class="fa-solid fa-sign-in"></i> Login
        </a>
        <a href="{{ route('register') }}" class="btn btn-secondary">
            <i class="fa-solid fa-add"></i> Register
        </a>
    </div>
</header>
@endsection