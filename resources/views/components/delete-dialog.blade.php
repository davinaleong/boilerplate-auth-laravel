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
      <form method="POST" action="{{ $action }}" class="dialog-footer">
        <div
          class="btn-group | jc-center"
          style="--btn-group-gap: var(--size-v-200)"
        >
            @csrf
            @method('DELETE')
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
</dialog>