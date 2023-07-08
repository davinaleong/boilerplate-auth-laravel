@extends('layouts.auth')

@section('page-name', ' - Test Mail')

@section('auth-content')
<p class="m-v-b-400">
    Enter the name, email, subject and the message you want to send.
</p>

@include('components.card-message')
@include('components.card-errors')

<form method="POST" action="{{ route('test-mail.store') }}">
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
                value="John Doe"
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
                value="johndoe@example.com"
                required
            />

            @error('email')
                <p class="fz-300 text-danger-700">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="form-group @error('subject') form-group-danger @enderror">
        <label for="subject" class="form-label">
            <i class="fa-duotone fa-hashtag"></i> Subject
        </label>
        <div class="form-field-wrapper">
            <input
                type="text"
                name="subject"
                id="subject"
                class="form-field"
                value="Test Message"
                required
            />

            @error('subject')
                <p class="fz-300 text-danger-700">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="form-group @error('message') form-group-danger @enderror">
        <label for="message" class="form-label">
            <i class="fa-duotone fa-message"></i> Message
        </label>
        <div class="form-field-wrapper">
            <textarea name="message" id="message" class="form-field" rows="4" required>Lorem ipsum dolor sit amet euismod pretium enim risus posuere a congue congue justo mattis litora venenatis erat aenean velit</textarea>

            @error('message')
                <p class="fz-300 text-danger-700">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="btn-group m-v-t-400" style="--btn-group-gap: var(--size-v-100);">
        <button class="btn btn-primary" type="submit">
            <i class="fa-solid fa-sharp fa-send"></i> Send Mail
        </button>
        <a href="{{ route('welcome') }}" class="btn btn-gray">
            <i class="fa-solid fa-sharp fa-ban"></i> Cancel
        </a>
    </div>
</form>
@endsection