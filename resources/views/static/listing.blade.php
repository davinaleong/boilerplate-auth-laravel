@extends('static.cms')

@section('page-name', ' - Listing')

@section('cms-content')
<div class="layout-grid layout-grid-dashboard">
    <section class="flow">
        <header class="section__header">
          <h1 class="fz-700">Listing Page</h1>

          <p>
            Today's date:
            <span class="clr-gray-400 fs-italic">29 May 2023</span>
          </p>

          <ul class="breadcrumbs">
            <li class="breadcrumb-item">
              <a href="#" class="breadcrumb-item__link">Parent 1</a>
            </li>
            <li class="breadcrumb-item">
              <a href="#" class="breadcrumb-item__link">Parent 2</a>
            </li>
            <li class="breadcrumb-item">
              <span class="breadcrumb-item__link" data-active="true">
                Active Item
              </span>
            </li>
          </ul>
        </header>

        <table class="table-collapsible">
          <caption>
            Listing Page
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

        <ul class="pagination">
          <li class="pagination-item">
            <a href="#" class="pagination-item__arrow">
              <i class="fa-solid fa-chevron-left"></i>
            </a>
          </li>
          <li class="pagination-item">
            <a href="#" class="pagination-item__number"> 1 </a>
          </li>
          <li class="pagination-item">
            <a href="#" class="pagination-item__number" data-active="true">
              2
            </a>
          </li>
          <li class="pagination-item">
            <a href="#" class="pagination-item__number"> 3 </a>
          </li>
          <li class="pagination-item">
            <a href="#" class="pagination-item__arrow">
              <i class="fa-solid fa-chevron-right"></i>
            </a>
          </li>
        </ul>
    </section>
</div>
@endsection