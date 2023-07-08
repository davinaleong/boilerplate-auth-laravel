<footer class="main__footer | border-f-t-solid-50-gray-400 p-v-t-400">
    <p class="clr-gray-400 ta-center">
        <small>
            <em>
                {{ env('APP_NAME', 'Bolierplate Auth Laravel') }} &copy;
                {{ env('APP_AUTHOR', 'Davina Leong') }},
                @php
                    $nowYear = now()->format('Y');
                    $appDateCarbon = Carbon\Carbon::createFromFormat('Y-m-d', env('APP_DATE', '2023-07-01'));
                    $appDateYear = $appDateCarbon->format('Y');
                    if ($nowYear > $appDateYear) {
                        echo "$appDateYear &ndash; $nowYear";
                    } else {
                        echo $appDateYear;
                    }
                @endphp
            </em>
        </small>
    </p>
</footer>