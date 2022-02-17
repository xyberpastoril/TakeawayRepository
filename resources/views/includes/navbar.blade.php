<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light p-3">
    <div class="container">
        <a class="navbar-brand d-lg-none" href="{{ route('home') }}">TakeawayRepository</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @guest
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <div class="mt-3 mb-2 mb-lg-0 mt-lg-0 order-0">
                <a class="navbar-brand d-none d-lg-block" href="{{ route('home') }}">TakeawayRepository</a>
            </div>
            <ul class="navbar-nav mb-2 mb-lg-0 order-1"></ul>
            <ul class="navbar-nav mb-2 mb-lg-0 order-2">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('login') }}">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i>
                        <b>Login</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('register') }}">
                        <i class="fa-solid fa-user-plus"></i>
                        <b>Register</b>
                    </a>
                </li>
            </ul>
        @else
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
                        <b>My Repository</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-create-source">
                        <i class="fa-solid fa-plus"></i>
                        <b>Create Source</b>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0 order-2">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('settings') }}">
                        <i class="fa-solid fa-gear"></i>
                        <b>Account Settings</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="javascript:void(0)" onclick="event.preventDefault();
                    document.getElementById('form-logout').submit();">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <b>Logout</b>
                    </a>
                </li>
            </ul>
        </div>
        @endguest
    </div>
</nav>

<form id="form-logout" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>