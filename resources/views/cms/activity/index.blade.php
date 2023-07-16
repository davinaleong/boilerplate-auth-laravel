@extends('layouts.cms-content')

@section('page-name', ' - Activity')

@section('content-title', 'Activity')

@section('breadcrumbs')
<ul class="breadcrumbs">
    <li class="breadcrumb-item">
        <span class="breadcrumb-item__link" data-active="true">
            Activity
        </span>
    </li>
</ul>
@endsection

@section('cms-inner-content')
    <table class="table-collapsible">
    <caption>
        Activity Table
    </caption>
    <thead>
        <tr>
            <th>User</th>
            <th>Message</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($activities as $activity)
            <tr>
                <td data-cell="User">{{ $activity->getUserName() }}</td>
                <td data-cell="Message">
                    {{ $activity->message }}
                    @if ($activity->label && $activity->link)
                        <br><a href="{{ $activity->link }}">{{ $activity->label }}</a>
                    @endif
                </td>
                <td data-cell="Created At">{{ $activity->getCreatedAt() }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $activities->links() }}
@endsection
