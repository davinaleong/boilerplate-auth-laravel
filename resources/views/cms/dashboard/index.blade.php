@extends('layouts.cms-content')

@section('page-name', ' - Dashboard')

@section('content-title', 'Dashboard')

@section('breadcrumbs')
<ul class="breadcrumbs">
    <li class="breadcrumb-item">
        <span class="breadcrumb-item__link" data-active="true">
            Dashboard
        </span>
    </li>
</ul>
@endsection

@section('cms-inner-content')
<table class="table-collapsible">
    <caption>
        Today's Logs
    </caption>
    <thead>
        <tr>
            <th>Type</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td data-cell="ID">1</td>
            <td data-cell="First Name">Christina</td>
            <td data-cell="Last Name">Simpson</td>
            <td data-cell="Age">48</td>
        </tr>
        <tr>
            <td data-cell="ID">2</td>
            <td data-cell="First Name">Elliott</td>
            <td data-cell="Last Name">Brown</td>
            <td data-cell="Age">36</td>
        </tr>
        <tr>
            <td data-cell="ID">3</td>
            <td data-cell="First Name">Charlotte</td>
            <td data-cell="Last Name">Camacho</td>
            <td data-cell="Age">27</td>
        </tr>
        <tr>
            <td data-cell="ID">4</td>
            <td data-cell="First Name">Xavier</td>
            <td data-cell="Last Name">Everett</td>
            <td data-cell="Age">20</td>
        </tr>
        <tr>
            <td data-cell="ID">5</td>
            <td data-cell="First Name">Noah</td>
            <td data-cell="Last Name">Leach</td>
            <td data-cell="Age">32</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
        <td colspan="4">Total Age: 163</td>
        </tr>
    </tfoot>
</table>
@endsection