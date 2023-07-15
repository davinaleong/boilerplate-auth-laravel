@if(session('status'))
    <div class="card card-accent-1 flow">
        <h3 class="fz-500 text-accent-1-700">Message</h3>
        <p>
            @switch (session('status'))
                @case(App\Helpers\StatusHelper::$VERIFICATION_LINK_SENT)
                    {{ __('A new verification link has been sent to your email address.') }}
                    @break
                @case(App\Helpers\StatusHelper::$MODULE_CREATED)
                    {{ __('A new record for this module was created.') }}
                    @break
                @case(App\Helpers\StatusHelper::$MODULE_UPDATED)
                    {{ __('This record was modified successfully.') }}
                    @break
                @case(App\Helpers\StatusHelper::$MODULE_DELETED)
                    {{ __('This record was deleted successfully.') }}
                    @break
                @case(App\Helpers\StatusHelper::$PROFILE_CREATED)
                    {{ __('Your profile was created.') }}
                    @break
                @case(App\Helpers\StatusHelper::$PROFILE_UPDATED)
                    {{ __('Your profile was modified successfully.') }}
                    @break
                @case(App\Helpers\StatusHelper::$PROFILE_DELETED)
                    {{ __('Your profile was deleted successfully.') }}
                    @break
                @case(App\Helpers\StatusHelper::$SETTINGS_UPDATED)
                    {{ __('The settings was updated successfully.') }}
                    @break
                @case(App\Helpers\StatusHelper::$PASSWORD_DELETED)
                    {{ __('Your password was updated successfully.') }}
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
