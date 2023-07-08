@extends('layouts.app')

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
@include('components.aside')
<main class="main-content-wrapper | flow p-v-400">
    @yield('cms-content')

    @include('components.cms-footer')
</main>
@endsection