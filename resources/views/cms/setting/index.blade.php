@extends('layouts.cms-content')

@section('page-name', ' - Settings')

@section('content-title', 'Settings')

@section('breadcrumbs')
<ul class="breadcrumbs">
    <li class="breadcrumb-item">
        <span class="breadcrumb-item__link" data-active="true">
            Settings
        </span>
    </li>
</ul>
@endsection

@section('cms-inner-content')
    <table class="table-collapsible">
    <caption>
        Settings Table
    </caption>
    <thead>
        <tr>
            <th>User</th>
            <th>Name</th>
            <th>Key</th>
            <th>Value</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($settings as $setting)
            <tr>
                <td data-cell="User">{{ $setting->getUserName() }}</td>
                <td data-cell="Name">{{ $setting->name }}</td>
                <td data-cell="Key">{{ $setting->key }}</td>
                <td data-cell="Value">{{ $setting->value }}</td>
                <td data-cell="Created At">{{ $setting->getCreatedAt() }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $settings->links() }}
@endsection
