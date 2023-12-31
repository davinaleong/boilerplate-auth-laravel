@extends('layouts.cms-content')

@section('page-name', ' - Profile')

@section('content-title', 'Profile')

@section('breadcrumbs')
<ul class="breadcrumbs">
    <li class="breadcrumb-item">
        <a href="{{ route('cms.profile.show') }}" class="breadcrumb-item__link">{{ __('Profile') }}</a>
    </li>
    <li class="breadcrumb-item">
        <span class="breadcrumb-item__link" data-active="true">
            {{ __('Edit') }}
        </span>
    </li>
</ul>
@endsection

@section('cms-inner-content')
<form class="flow" action="{{ route('cms.profile.update') }}" method="post">
    <fieldset aria-hidden="false">
        <legend>Update Profile</legend>

        <div class="content">
            @csrf
            @method('patch')

            <div class="form-group @error('name') form-group-danger @enderror">
                <label for="input-name" class="form-label">
                    <i class="fa-duotone fa-user"></i> {{ __('Name') }}
                </label>
                <div class="form-field-wrapper">
                    <input
                        type="text"
                        name="name"
                        id="input-name"
                        class="form-field"
                        value="{{ old('name') ? old('name') : $user->name }}"
                        autofocus
                        required
                    />

                    @error('name')
                        <p class="fz-300 text-danger-700">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="form-group @error('email') form-group-danger @enderror">
                <label for="input-email" class="form-label">
                    <i class="fa-duotone fa-envelope"></i> {{ __('Email') }}
                </label>
                <div class="form-field-wrapper | flow">
                    <input
                        type="email"
                        name="email"
                        id="input-email"
                        class="form-field"
                        value="{{ old('email') ? old('email') : $user->email }}"
                        required
                    />

                    @error('email')
                        <p class="fz-300 text-danger-700">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
    </fieldset>

    <div class="btn-group" style="--btn-group-gap: var(--size-v-200)">
        <button type="submit" class="btn btn-primary btn-toggle-label">
            <i class="fa-solid fa-sharp fa-check"></i>
            <span class="btn-toggle-label__label"> {{ __('Update Profile') }}</span>
        </button>
        <a href="{{ route('cms.profile.show') }}" class="btn btn-gray btn-toggle-label">
            <i class="fa-solid fa-sharp fa-ban"></i>
            <span class="btn-toggle-label__label"> {{ __('Cancel') }}</span>
        </a>
    </div>
</form>

<form class="flow" action="{{ route('password.update') }}" method="post">
    <fieldset aria-hidden="false">
        <legend>Update Password</legend>

        <div class="content">
            @csrf
            @method('put')

            <div class="form-group @error('current_password') form-group-danger @enderror">
                <label for="input-current_password" class="form-label">
                    <i class="fa-duotone fa-user"></i> {{ __('Current Password') }}
                </label>
                <div class="form-field-wrapper">
                    <input
                        type="password"
                        name="current_password"
                        id="input-current_password"
                        class="form-field"
                        autofocus
                        required
                    />

                    @error('current_password')
                        <p class="fz-300 text-danger-700">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="form-group @error('password') form-group-danger @enderror">
                <label for="input-password" class="form-label">
                    <i class="fa-duotone fa-envelope"></i> {{ __('New Password') }}
                </label>
                <div class="form-field-wrapper | flow">
                    <input
                        type="password"
                        name="password"
                        id="input-password"
                        class="form-field"
                        required
                    />

                    @error('password')
                        <p class="fz-300 text-danger-700">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="form-group @error('password_confirmation') form-group-danger @enderror">
                <label for="input-password_confirmation" class="form-label">
                    <i class="fa-duotone fa-envelope"></i> {{ __('Confirm Password') }}
                </label>
                <div class="form-field-wrapper | flow">
                    <input
                        type="password"
                        name="password_confirmation"
                        id="input-password_confirmation"
                        class="form-field"
                        required
                    />

                    @error('password_confirmation')
                        <p class="fz-300 text-danger-700">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
    </fieldset>

    <div class="btn-group" style="--btn-group-gap: var(--size-v-200)">
        <button type="submit" class="btn btn-primary btn-toggle-label">
            <i class="fa-solid fa-sharp fa-check"></i>
            <span class="btn-toggle-label__label"> {{ __('Update Password') }}</span>
        </button>
        <a href="{{ route('cms.profile.show') }}" class="btn btn-gray btn-toggle-label">
            <i class="fa-solid fa-sharp fa-ban"></i>
            <span class="btn-toggle-label__label"> {{ __('Cancel') }}</span>
        </a>
    </div>
</form>
@endsection