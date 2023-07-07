@extends('static.cms')

@section('page-name', ' - View')

@section('cms-content')
<section class="flow">
    <header class="section__header">
        <h1 class="fz-700">View</h1>

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
            <button class="btn btn-primary btn-toggle-label">
                <i class="fa-solid fa-sharp fa-pencil"></i>
                <span class="btn-toggle-label__label">Edit</span>
            </button>
            <button class="btn btn-gray btn-toggle-label">
                <i class="fa-solid fa-sharp fa-ban"></i>
                <span class="btn-toggle-label__label">Cancel</span>
            </button>
            <button
                class="btn btn-danger btn-toggle-label"
                data-element="btn-launch-dialog"
                data-target="delete-dialog"
            >
                <i class="fa-solid fa-sharp fa-trash"></i>
                <span class="btn-toggle-label__label">Delete</span>
            </button>
        </div>
    </form>
</section>
@endsection

@section('dialogs')
<dialog
      class="dialog | flow ta-center text-danger-800 bg-danger-100 shadow-v-br-400 p-v-400"
      data-element="delete-dialog"
    >
      <div class="dialog-body | flow">
        <h2 class="fz-600">Delete Item</h2>

        <p>
          Are you sure?<br />
          This action cannot be undone.
        </p>
      </div>
      <div class="dialog-footer">
        <div
          class="btn-group | jc-center"
          style="--btn-group-gap: var(--size-v-200)"
        >
          <button class="btn btn-danger" type="button">
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
      </div>
</dialog>
@endsection