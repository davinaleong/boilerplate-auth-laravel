@if($errors->all())
<div class="card card-danger flow">
    <h3 class="fz-500 text-danger-700">Error</h3>
    <ul>
        @foreach($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
</div>
@endif
