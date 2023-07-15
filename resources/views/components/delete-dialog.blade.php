<dialog
      class="dialog | flow ta-center text-danger-800 bg-danger-100 shadow-v-br-400 p-v-400"
      data-element="delete-dialog"
    >
      <header class="dialog__header">
        <h2 class="fz-600">Delete Item</h2>
      </header>
      <div class="dialog-body | flow">
        <p>{{ __('Are you sure?') }}</p>
        <p>{{ __('This action cannot be undone.') }}</p>
      </div>
      <footer class="dialog__footer">
        <form method="POST" action="{{ $action }}">
          <div
            class="btn-group | jc-center"
            style="--btn-group-gap: var(--size-v-200)"
          >
              @csrf
              @method('DELETE')
            <button class="btn btn-danger" type="submit">
              <i class="fa-solid fa-sharp fa-trash"></i> {{ __('Confirm') }}
            </button>
            <button
              class="btn btn-secondary"
              type="button"
              data-element="btn-close-dialog"
            >
              <i class="fa-solid fa-sharp fa-ban"></i> {{ __('Close') }}
            </button>
          </div>
        </form>
      </footer>
</dialog>