@if(session('status'))
    <div class="card card-accent-1 flow">
        <h3 class="fz-500 text-accent-1-700">Message</h3>
        <p>
            @switch (session('status'))
                @case('verification-link-sent')
                    A new verification link has been sent to your email address.
                    @break
            @endswitch
        </p>
    </div>
@endif

@if(session('message'))
    <div class="card card-accent-1 flow">
        <h3 class="fz-500 text-accent-1-700">Message</h3>
        <p>{{ session('message') }}</p>
    </div>
@endif
