@extends('layouts.cms-content')

@section('page-name', ' - Profile')

@section('content-title', 'Profile')

@section('breadcrumbs')
<ul class="breadcrumbs">
    <li class="breadcrumb-item">
        <span class="breadcrumb-item__link" data-active="true">
            Profile
        </span>
    </li>
</ul>
@endsection

@section('cms-inner-content')
<form class="flow" action="#" method="post">
    <fieldset aria-hidden="false">
        <legend>Profile Details</legend>

        <div class="content">
            <div class="form-group">
                <label for="name" class="form-label">
                    <i class="fa-duotone fa-user"></i> {{ __('Name') }}
                </label>
                <div class="form-field-wrapper">
                    <p>{{ $user->name }}</p>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="form-label">
                    <i class="fa-duotone fa-envelope"></i> {{ __('Email') }}
                </label>
                <div class="form-field-wrapper | flow">
                    <p>{{ $user->email }}</p>

                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <p class="fs-300 mt-2 text-danger-600 | flow">
                            {{ __('Your email address is unverified.') }}

                            <div>
                                <button form="send-verification" class="btn">
                                    <i class="fa-duotone fa-send"></i> {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </div>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="fs-300 text-success-600">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </fieldset>

    <form id="send-verification" method="POST" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <div class="btn-group" style="--btn-group-gap: var(--size-v-200)">
        <a href="{{ route('cms.profile.edit') }}" class="btn btn-primary btn-toggle-label">
            <i class="fa-solid fa-sharp fa-pencil"></i>
            <span class="btn-toggle-label__label"> {{ __('Edit') }}</span>
        </a>
        <button
            class="btn btn-danger btn-toggle-label"
            data-element="btn-launch-dialog"
            data-target="delete-dialog"
        >
            <i class="fa-solid fa-sharp fa-trash"></i>
            <span class="btn-toggle-label__label"> {{ __('Delete') }}</span>
        </button>
        <a href="{{ route('cms.dashboard.index') }}" class="btn btn-gray btn-toggle-label">
            <i class="fa-solid fa-sharp fa-ban"></i>
            <span class="btn-toggle-label__label"> {{ __('Cancel') }}</span>
        </a>
    </div>
</form>
@endsection

@section('dialogs')
<dialog
    class="dialog | flow ta-center text-danger-800 bg-danger-100 shadow-v-br-400 p-v-400"
    data-element="delete-dialog">
        <header class="dialog__header">
            <h2 class="fz-600">Delete Item</h2>
        </header>
        <div class="dialog__body | flow">
            <p>
            {{ __('Are you sure you want to delete your account?') }}
            </p>
            <p>{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}</p>
        </div>
        <footer class="dialog__footer">
            <form method="POST" action="{{ route('cms.profile.destroy') }}" class="flow">
                @csrf
                @method('DELETE')

                <fieldset aria-hidden="false">
                    <legend>Delete Profile</legend>

                    <div class="content">
                        <div class="form-group @error('password') form-group-danger @enderror">
                            <label for="input-password" class="form-label">
                                <i class="fa-duotone fa-user"></i> {{ __('Password') }}
                            </label>
                            <div class="form-field-wrapper">
                                <input
                                    type="password"
                                    name="password"
                                    id="input-password"
                                    class="form-field"
                                    autofocus
                                    required
                                />

                                @error('password')
                                    <p class="fz-300 text-danger-700">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </fieldset>

                <div
                class="btn-group | jc-center"
                style="--btn-group-gap: var(--size-v-200)"
                >
                    <button class="btn btn-danger" type="submit">
                        <i class="fa-solid fa-sharp fa-trash"></i> Confirm
                    </button>
                    <button
                        class="btn btn-secondary"
                        type="button"
                        data-element="btn-close-dialog"
                    >
                        <i class="fa-solid fa-sharp fa-ban"></i> Close
                    </button>
                </div>
            </form>
        </footer>
</dialog>
@endsection