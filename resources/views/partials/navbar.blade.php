<nav class="navbar bg-primary">
    <div class="container-fluid justify-content-center">
        <span class="navbar-brand mb-3 h1 text-white">Giant Book Supplier</span>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        {{-- <a class="navbar-brand" href="#">Giant Book</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown"
            aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="{{ route('book_category', 1) }}">Category 1</a></li>
                        <li><a class="dropdown-item" href="{{ route('book_category', 2) }}">Category 2</a></li>
                        <li><a class="dropdown-item" href="{{ route('book_category', 3) }}">Category 3</a></li>
                        <li><a class="dropdown-item" href="{{ route('book_category', 4) }}">Category 4</a></li>
                    </ul>
                </li>
                <a class="nav-link active" aria-current="page" href="/publisher">Publisher</a>
                <a class="nav-link active" aria-current="page" href="/contact">Contact</a>
            </ul>
        </div>
    </div>
</nav>
