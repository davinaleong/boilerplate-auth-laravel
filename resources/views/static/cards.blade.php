@extends('static.cms')

@section('page-name', '- Cards')

@section('cms-content')
<section class="flow">
    <header class="section__header">
        <h1 class="fz-700">Cards Listing Page</h1>

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

    <h4 class="fz-500">Card Grid</h4>
    <div class="card-grid">
        <a href="#" class="card flow">
            <h4 class="card__title">Default</h4>
            <div class="card__badge">10</div>
            <ul class="card__list">
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Tempore minus velit aut voluptatum.</li>
                <li>Obcaecati eum incidunt doloremque natus.</li>
                <li>Dignissimos totam tenetur exercitationem obcaecati.</li>
                <li>Repudiandae soluta saepe dolor voluptas.</li>
            </ul>
            <div class="card__date">25 May 2023</div>
        </a>

        <a href="#" class="card flow">
            <h4 class="card__title">Default</h4>
            <div class="card__badge">10</div>
            <ul class="card__list">
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Tempore minus velit aut voluptatum.</li>
                <li>Obcaecati eum incidunt doloremque natus.</li>
                <li>Dignissimos totam tenetur exercitationem obcaecati.</li>
                <li>Repudiandae soluta saepe dolor voluptas.</li>
            </ul>
            <div class="card__date">25 May 2023</div>
        </a>

        <a href="#" class="card flow">
            <h4 class="card__title">Default</h4>
            <div class="card__badge">10</div>
            <ul class="card__list">
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Tempore minus velit aut voluptatum.</li>
                <li>Obcaecati eum incidunt doloremque natus.</li>
                <li>Dignissimos totam tenetur exercitationem obcaecati.</li>
                <li>Repudiandae soluta saepe dolor voluptas.</li>
            </ul>
            <div class="card__date">25 May 2023</div>
        </a>

        <a href="#" class="card flow">
            <h4 class="card__title">Default</h4>
            <div class="card__badge">10</div>
            <ul class="card__list">
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Tempore minus velit aut voluptatum.</li>
                <li>Obcaecati eum incidunt doloremque natus.</li>
                <li>Dignissimos totam tenetur exercitationem obcaecati.</li>
                <li>Repudiandae soluta saepe dolor voluptas.</li>
            </ul>
            <div class="card__date">25 May 2023</div>
        </a>

        <a href="#" class="card flow">
            <h4 class="card__title">Default</h4>
            <div class="card__badge">10</div>
            <ul class="card__list">
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Tempore minus velit aut voluptatum.</li>
                <li>Obcaecati eum incidunt doloremque natus.</li>
                <li>Dignissimos totam tenetur exercitationem obcaecati.</li>
                <li>Repudiandae soluta saepe dolor voluptas.</li>
            </ul>
            <div class="card__date">25 May 2023</div>
        </a>
    </div>

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
@endsection