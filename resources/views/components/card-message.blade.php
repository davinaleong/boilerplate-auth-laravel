@if(session('message'))
    <div class="card card-accent-1 flow">
        <h3 class="fz-500 text-accent-1-700">Message</h3>
        <p>{{ session('message') }}</p>
    </div>
@endif
