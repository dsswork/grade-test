<div class="container">
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="{{ route('web.books.index') }}"
                   class="nav-link @if(request()->routeIs('web.books.index')) active @endif"
                   aria-current="page">Books</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('web.books.create') }}"
                   class="nav-link @if(request()->routeIs('web.books.create')) active @endif">Add Book</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('web.api-docs.index') }}"
                   class="nav-link @if(request()->routeIs('web.api-docs.index')) active @endif">Api Docs</a>
            </li>
        </ul>
    </header>
</div>
