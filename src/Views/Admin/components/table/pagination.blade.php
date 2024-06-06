<div>
    @if ($page == 1)
        Show
        <div class="btn-group mx-2">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ $perPage }}
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item per-page {{ $perPage == 5 ? 'disabled' : '' }}" data-per-page="5" href="">5</a>
                <a class="dropdown-item per-page {{ $perPage == 10 ? 'disabled' : '' }}" data-per-page="10" href="">10</a>
                <a class="dropdown-item per-page {{ $perPage == 15 ? 'disabled' : '' }}" data-per-page="15" href="">15</a>
            </div>
        </div>
        rows per page
    @endif
</div>
<nav>
    <ul class="pagination">
        @foreach (array_fill(1, $totalPage, NULL) as $index => $item)
            @if ($loop->first)
                @if ($totalPage != 1)
                    <li class="page-item {{ $page == 1 ? 'disabled' : '' }}">
                        <a class="page-link" href="?page={{ $page - 1 }}">Previous</a>
                    </li>
                @endif
            @endif
                @if ($totalPage != 1)
                    <li class="page-item {{ $page == $index ? 'active' : '' }}">
                        <a class="page-link page-page" href="" data-page="{{ $index }}">{{ $index }}</a>
                    </li>
                @endif
            @if ($loop->last)
                @if ($totalPage != 1)
                    <li class="page-item {{ $page == $totalPage ? 'disabled' : '' }}">
                        <a class="page-link" href="?page={{ $page + 1 }}">Next</a>
                    </li>
                @endif
            @endif
        @endforeach
    </ul>
</nav>

<script>
    let perPageElements = document.querySelectorAll('.per-page')
    let pageElements = document.querySelectorAll('.page-page')

    perPageElements.forEach(element => {
        element.addEventListener('click', (e) => {
            e.preventDefault();
            let perPage = e.target.dataset.perPage;
            let searchParams = new URLSearchParams(window.location.search);

            let paramPage = searchParams.get('page');

            if(paramPage) {
                window.location = `?page=${paramPage}&per-page=${perPage}`;
            }
            else {
                window.location = '?per-page=' + perPage
            }
            // console.log(window.location.search)
        })
    });

    pageElements.forEach(element => {
        element.addEventListener('click', (e) => {
            e.preventDefault();
            let page = e.target.dataset.page;
            let searchParams = new URLSearchParams(window.location.search);

            let paramPerPage = searchParams.get('per-page');

            if(paramPerPage) {
                window.location = `?page=${page}&per-page=${paramPerPage}`;
            }
            else {
                window.location = '?page=' + page
            }
            // console.log(window.location.search)
        })
    });

    
</script>
