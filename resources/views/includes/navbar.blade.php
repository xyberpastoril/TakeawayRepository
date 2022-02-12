<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light p-3">
    <div class="container">
        <a class="navbar-brand d-lg-none" href="{{ route('home') }}">TakeawayRepository</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <div class="mt-3 mb-2 mb-lg-0 mt-lg-0 order-0 order-lg-1">
                <form class="d-flex">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="Search the repository" aria-label="Search">
                        <button class="btn btn-icon btn-outline-success" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>
            </div>
            <ul class="navbar-nav mb-2 mb-lg-0 order-1 order-lg-0">
                <li class="nav-item">
                    <a class="nav-link d-none d-lg-block" aria-current="page" href="{{ route('home') }}">
                        <i class="fa-solid fa-note-sticky"></i>
                        <b>Repository</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">
                        <i class="fa-solid fa-plus"></i>
                        <b>Create</b>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0 order-2">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">
                        <i class="fa-solid fa-gear"></i>
                        <b>Settings</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <b>Logout</b>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>