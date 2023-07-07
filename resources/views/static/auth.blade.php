@extends('static.app')

@section('body-class', 'auth bg-full bg-auth-1')

@section('content')
<main class="dialog | bg-gray-50 shadow-f-br-400 p-v-500 ta-center">
    <h1 class="fz-700 text-primary-700 m-f-b-400">Work Logger</h1>
    @yield('auth-content')
</main>
@endsection