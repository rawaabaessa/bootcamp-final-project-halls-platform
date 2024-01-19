{{-- @if ($paginator->lastPage() > 1)
    <ul class="pagination">
        <li class="btn btn-large {{ ($paginator->currentPage() == 1) ? 'disabled' : '' }}">
            <a href="{{ $paginator->url(1) }}">الأول</a>
        </li>
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <li class="btn btn-large {{ ($paginator->currentPage() == $i) ? 'active' : '' }}">
                <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="btn btn-large {{ ($paginator->currentPage() == $paginator->lastPage()) ? 'disabled' : '' }}">
            <a href="{{ $paginator->url($paginator->lastPage()) }}">الأخير</a>
        </li>
    </ul>
@endif --}}
@if ($paginator->lastPage() > 1)
              <div class="pagination" dir="rtl">
                  <a href="{{ $paginator->previousPageUrl() }}" class="previous "><i class="fa-solid fa-chevron-right"></i></a>

                  @foreach ($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url)
                      @if ($page == $paginator->currentPage())
                          <a href="{{ $url }}" class="page active">{{ $page }}</a>
                      @else
                          <a href="{{ $url }}" class="page">{{ $page }}</a>
                      @endif
                  @endforeach

                  <a href="{{ $paginator->nextPageUrl() }}" class="next"><i class="fa-solid fa-chevron-left"></i></a>
              </div>
@endif

