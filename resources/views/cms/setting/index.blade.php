@extends('layouts.cms-content')

@section('page-name', ' - Settings')

@section('content-title', 'Settings')

@section('breadcrumbs')
<ul class="breadcrumbs">
    <li class="breadcrumb-item">
        <span class="breadcrumb-item__link" data-active="true">
            {{ __('Settings') }}
        </span>
    </li>
</ul>
@endsection

@section('cms-inner-content')
<div class="d-flex al-center jc-space-between">
    <h2 class="fz-500">{{ __('Actions') }}</h2>
    <div class="btn-group">
        <a href="{{ route('cms.setting.edit') }}" class="btn btn-primary">
            {{ __('Edit') }} <i class="fa fa-solid fa-sharp fa-pencil"></i>
        </a>
    </div>
</div>

<table class="table-collapsible">
    <caption>
        {{ __('Settings Table') }}
    </caption>
    <thead>
        <tr>
            <th>{{ __('User') }}</th>
            <th>{{ __('Name') }}</th>
            <th>{{ __('Key') }}</th>
            <th>{{ __('Value') }}</th>
            <th>{{ __('Created At') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($settings as $setting)
            <tr>
                <td data-cell="{{ __('User') }}">{{ $setting->getUserName() }}</td>
                <td data-cell="{{ __('Name') }}">{{ $setting->name }}</td>
                <td data-cell="{{ __('Key') }}">{{ $setting->key }}</td>
                <td data-cell="{{ __('Value') }}">{{ $setting->value }}</td>
                <td data-cell="{{ __('Created At') }}">{{ $setting->getCreatedAt() }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $settings->links() }}
@endsection
