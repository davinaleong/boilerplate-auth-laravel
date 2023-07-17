@extends('layouts.cms-content')

@section('page-name', ' - Settings')

@section('content-title', 'Settings')

@section('breadcrumbs')
<ul class="breadcrumbs">
    <li class="breadcrumb-item">
        <a href="{{ route('cms.setting.index') }}" class="breadcrumb-item__link">{{ __('Settings') }}</a>
    </li>
    <li class="breadcrumb-item">
        <span class="breadcrumb-item__link" data-active="true">
            {{ __('Edit') }}
        </span>
    </li>
</ul>
@endsection

@section('cms-inner-content')
<h2 class="fz-500">{{ __('Actions') }}</h2>
<div class="btn-group">
    <a href="{{ route('cms.setting.index') }}" class="btn btn-gray">
        <i class="fa fa-solid fa-sharp fa-ban"></i> {{ __('Cancel') }}
    </a>
</div>

<form method="post" action="{{ route('cms.setting.update') }}">
    @csrf
    @method('PATCH')
    <table class="table-collapsible" data-element="setting-table">
        <caption>
            {{ __('Settings Table') }}
        </caption>
        <thead>
            <tr>
                <th>{{ __('User') }}</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Key') }}</th>
                <th>{{ __('Value') }}</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($settings as $setting)
                <tr>
                    <td data-cell="{{ __('User') }}">
                        {{ $setting->getUserName() }}
                    </td>
                    <td data-cell="{{ __('Name') }}">
                        <input type="text" name="names[]" class="form-field" placeholder="Name"
                                        value="{{ $setting->name }}" required>
                    </td>
                    <td data-cell="{{ __('Key') }}">
                        <input type="text" name="keys[]" class="form-field" placeholder="Key"
                                        value="{{ $setting->name }}" required>
                    </td>
                    <td data-cell="{{ __('Value') }}">
                        <input type="text" name="values[]" class="form-field" placeholder="Value"
                                        value="{{ $setting->value }}" required>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger" data-element="btn-delete-setting">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">
                    <div class="btn-group" style="--btn-group-gap: var(--size-v-100);">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-solid fa-sharp fa-check"></i> {{ __('Submit') }}
                        </button>
                        <button type="button" class="btn btn-secondary" data-element="btn-add">
                            <i class="fa fa-plus"></i> {{ __('Add') }}
                        </button>
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
</form>
@endsection
