@extends('layouts.cms')

@section('cms-content')
<section class="flow">
    <header class="section__header">
        <h1 class="fz-700">@yield('content-title')</h1>

        @include('components.today')

        @yield('breadcrumbs')
    </header>

    @include('components.card-message')
    @include('components.card-errors')

    @yield('cms-inner-content')
</section>
@endsection