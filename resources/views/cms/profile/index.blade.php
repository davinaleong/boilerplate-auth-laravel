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
        <legend>Lorem Ipsum</legend>

        <div class="content">
            <div class="form-group">
                <label for="name" class="form-label">
                    <i class="fa-duotone fa-user"></i> Name
                </label>
                <div class="form-field-wrapper">
                    <p>John Doe</p>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="form-label">
                    <i class="fa-duotone fa-envelope"></i> Email
                </label>
                <div class="form-field-wrapper">
                    <p>johndoe@example.com</p>
                </div>
            </div>
        </div>
    </fieldset>

    <div class="btn-group" style="--btn-group-gap: var(--size-v-200)">
        <a href="{{ route('cms.profile.edit') }}" class="btn btn-primary btn-toggle-label">
            <i class="fa-solid fa-sharp fa-pencil"></i>
            <span class="btn-toggle-label__label">Edit</span>
        </a>
        <button
            class="btn btn-danger btn-toggle-label"
            data-element="btn-launch-dialog"
            data-target="delete-dialog"
        >
            <i class="fa-solid fa-sharp fa-trash"></i>
            <span class="btn-toggle-label__label">Delete</span>
        </button>
        <a href="{{ route('cms.dashboard.index') }}" class="btn btn-gray btn-toggle-label">
            <i class="fa-solid fa-sharp fa-ban"></i>
            <span class="btn-toggle-label__label">Cancel</span>
        </a>
    </div>
</form>
@endsection