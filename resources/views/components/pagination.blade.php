@if ($paginator->hasPages())
<nav class="pagination">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <div class="pagination-item">
            <span class="pagination-item__arrow" aria-label="{!! __('pagination.previous') !!}">
                <i class="fa-solid fa-chevron-left"></i>
            </span>
        </div>
    @else
        <div class="pagination-item">
            <a href="{{ $paginator->previousPageUrl() }}" class="pagination-item__arrow"
                aria-label="{!! __('pagination.previous') !!}">
                <i class="fa-solid fa-chevron-left"></i>
            </a>
        </div>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
            <div class="pagination-item">
                <span class="pagination-item__arrow" aria-disabled="true">
                    {{ $element }}
                </span>
            </div>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <div class="pagination-item">
                        <span class="pagination-item__number" data-active="true">
                            {{ $page }}
                        </span>
                    </div>
                @else
                    <div class="pagination-item">
                        <a href="{{ $url }}" class="pagination-item__number"
                            aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                            {{ $page }}
                        </a>
                    </div>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <div class="pagination-item">
            <a href="{{ $paginator->nextPageUrl() }}" class="pagination-item__arrow" aria-label="{!! __('pagination.next') !!}">
                <i class="fa-solid fa-chevron-right"></i>
            </a>
        </div>
    @else
        <div class="pagination-item">
            <span class="pagination-item__arrow" aria-label="{!! __('pagination.next') !!}">
                <i class="fa-solid fa-chevron-right"></i>
            </span>
        </div>
    @endif
</nav>

<p class="fs-300 text-gray-700">
    {!! __('Showing') !!}
    @if ($paginator->firstItem())
        <span class="fw-500">{{ $paginator->firstItem() }}</span>
        {!! __('to') !!}
        <span class="fw-500">{{ $paginator->lastItem() }}</span>
    @else
        {{ $paginator->count() }}
    @endif
    {!! __('of') !!}
    <span class="fw-500">{{ $paginator->total() }}</span>
    {!! __('results') !!}
</p>
@endif