@extends('static.cms')

@section('page-name', '- Create/Edit')

@section('cms-content')
<div class="layout-grid layout-grid-dashboard">
    <section class="flow">
        <header class="section__header">
            <h1 class="fz-700">Create/Edit</h1>

            <p>
                Today's date:
                <span class="clr-gray-400 fs-italic">29 May 2023</span>
            </p>

            <ul class="breadcrumbs">
            <li class="breadcrumb-item">
                <a href="#" class="breadcrumb-item__link">Parent 1</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#" class="breadcrumb-item__link">Parent 2</a>
            </li>
            <li class="breadcrumb-item">
                <span class="breadcrumb-item__link" data-active="true">
                Active Item
                </span>
            </li>
            </ul>
        </header>

        <form class="flow" action="#" method="post">
            <fieldset aria-hidden="false">
            <legend>Lorem Ipsum</legend>

            <div class="content">
                <div class="form-group">
                <label for="name" class="form-label" >
                    <i class="fa-duotone fa-user"></i> Name
                </label>
                <div class="form-field-wrapper">
                    <input type="text" name="name" id="name" class="form-field" />
                </div>
                </div>
                <div class="form-group">
                <label for="name" class="form-label">
                    <i class="fa-duotone fa-envelope"></i> Email
                </label>
                <div class="form-field-wrapper">
                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-field"
                        />
                </div>
                </div>
            </div>
            </fieldset>

            <fieldset aria-hidden="false">
            <legend>Lorem Ipsum</legend>

            <div class="content">
                <div class="form-group">
                    <label for="name" class="form-label">
                        <i class="fa-duotone fa-user"></i> Name
                    </label>
                    <div class="form-field-wrapper">
                        <input type="text" name="name" id="name" class="form-field" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">
                        <i class="fa-duotone fa-envelope"></i> Email
                    </label>
                    <div class="form-field-wrapper">
                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-field"
                            />
                    </div>
                </div>
            </div>
            </fieldset>

            <div class="btn-group" style="--btn-group-gap: var(--size-v-200)">
                <button class="btn btn-primary btn-toggle-label" type="submit">
                    <i class="fa-solid fa-sharp fa-check"></i>
                    <span class="btn-toggle-label__label">Submit</span>
                </button>
                <button class="btn btn-gray btn-toggle-label" type="submit">
                    <i class="fa-solid fa-sharp fa-ban"></i>
                    <span class="btn-toggle-label__label">Cancel</span>
                </button>
                <button class="btn btn-secondary btn-toggle-label" type="submit">
                    <i class="fa-solid fa-sharp fa-plus"></i>
                    <span class="btn-toggle-label__label">Add</span>
                </button>
            </div>
        </form>
    </section>
</div>
@endsection