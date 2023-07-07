@extends('static.app')

@section('body-class', 'cms text-gray-800 bg-gray-50')

@section('content')
<button
    class="btn btn-secondary btn-fixed btn-top btn-right shadow-v-br-400"
    aria-label="Menu"
    data-element="btn-menu"
    style="
    --btn-padding-x: var(--size-v-200);
    --btn-padding-y: var(--size-v-100);
    --btn-width: auto;
    "
>
    <i class="fa fa-bars"></i>
</button>
<a
    href="#top"
    class="btn btn-gray btn-fixed btn-bottom btn-right btn-icon btn-rounded shadow-v-br-400"
    data-element="btn-back-to-top"
    aria-label="Back to Top"
    aria-hidden="true"
    style="
    --btn-padding-x: var(--size-v-200);
    --btn-padding-y: var(--size-v-200);
    --btn-width: auto;
    "
>
    <i class="fa fa-chevron-up"></i>
</a>
<aside
    class="p-v-400 bg-secondary-200"
    aria-hidden="false"
    data-element="sidebar"
>
    <div class="aside__top m-v-b-600">
        <div class="aside__top__left">
            <a href="#" class="brand" aria-label="Work Logger">
                <img
                    src="./src/assets/images/logo.svg"
                    alt="logo"
                    width="80"
                    height="80"
                />
            </a>
        </div>
        <div class="aside__top__right">
            <button class="btn btn-primary">
                Logout <i class="fa fa-sign-out"></i>
            </button>

            <button
            class="btn btn-link btn-link-danger"
            style="--btn-fz: var(--fz-500)"
            data-element="btn-close-menu"
            aria-label="Close"
            >
                <i class="fa fa-times"></i>
            </button>
        </div>
    </div>

    <ul class="menu flow" role="list">
    <li class="menu-item" data-active="true" aria-hidden="true">
        <a href="dashboard.html" class="menu-item__link">
            <i class="fa-solid fa-sharp fa-dashboard"></i> Dashboard
        </a>
    </li>
    <li class="menu-item" data-active="true" aria-hidden="true">
        <a href="#" class="menu-item__link menu-item__label">
            <i class="fa-solid fa-sharp fa-boxes"></i> Module Pages
        </a>

        <div class="sub-menu-wrapper">
            <div>
                <ul class="sub-menu flow" role="list">
                <li style="--flow-spacer: var(--size-v-100)">
                    <a href="listing" class="menu-item__link">
                        <i class="fa-solid fa-sharp fa-list"></i> Listing Page
                    </a>
                </li>
                <li style="--flow-spacer: var(--size-v-100)">
                    <a href="cards" class="menu-item__link">
                        <i class="fa-solid fa-sharp fa-cards-blank"></i> Cards Page
                    </a>
                </li>
                <li style="--flow-spacer: var(--size-v-100)">
                    <a href="create-edit" class="menu-item__link">
                        <i class="fa-solid fa-sharp fa-pencil"></i> Create/Edit Page
                    </a>
                </li>
                <li style="--flow-spacer: var(--size-v-100)">
                    <a href="view" class="menu-item__link">
                        <i class="fa-solid fa-sharp fa-eye"></i> View Page
                    </a>
                </li>
                </ul>
            </div>
        </div>
    </li>
    </ul>
</aside>
<main class="main-content-wrapper | flow p-v-400">
    @yield('cms-content')

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
</main>
@endsection