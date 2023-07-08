@extends('layouts.auth')

@section('page-name', ' - Test Mail')

@section('auth-content')
<p class="m-v-b-400">
    Enter the name, email, subject and the message you want to send.
</p>

@include('components.card-message')
@include('components.card-errors')

<div class="btn-group m-v-t-400" style="--btn-group-gap: var(--size-v-100);">
    <a href="{{ route('test-mail.index') }}" class="btn btn-primary">
        <i class="fa-solid fa-sharp fa-send"></i> Send Another Message
    </a>
    <a href="{{ route('welcome') }}" class="btn btn-gray">
        <i class="fa-solid fa-sharp fa-ban"></i> Cancel
    </a>
</div>
@endsection