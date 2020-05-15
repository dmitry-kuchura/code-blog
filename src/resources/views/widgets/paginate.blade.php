@if ($paginator->hasPages())
    <div class="col-xl-12">
        <div class="next-previous-page">
            <nav aria-label="...">
                <ul class="pagination">
                    @if ($paginator->onFirstPage())
                        <li class="page-item disabled">
                            <a class="page-link" href="javascript:void(0)" tabindex="-1"> &#60; </a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ str_replace('?page=1', '', $paginator->previousPageUrl()) }}"
                               tabindex="-1"> &#60; </a>
                        </li>
                    @endif

                    @foreach ($elements as $element)
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="page-item active">
                                        <a class="page-link" href="javascript:void(0)">{{ $page }}</a>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{str_replace('?page=1', '', $url)}}">{{ $page }}</a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    @if ($paginator->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $paginator->nextPageUrl() }}">&#62;</a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <a class="page-link" href="javascript:void(0)">&#62;</a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
@endif
