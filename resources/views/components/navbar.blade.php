<nav class="navbar navbar-expand-lg sticky-top">
    <img src="/image/dapur-marie-txt.jpeg" />
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'text-decoration-underline fw-700' : '' }}"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('menu*') ? 'text-decoration-underline fw-700' : '' }}"
                        href="/menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'text-decoration-underline fw-700' : '' }}"
                        href="/about">About</a>
                </li>
            </ul>
            <form action="/menu" method="GET" class="d-flex" role="search">
                <input class="form-control me-2" type="search" name="search" placeholder="Search..." aria-label="Search" value="{{ request('search') }}"/>
            </form>

            <ul class="navbar-nav d-flex align-items-center">
                @auth
                    <a href="/profile"><i class="fa fa-user-circle-o fa-2x ps-3 pe-1" style="color: #FFF3E4"></i></a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ auth()->user()->username }}
                        </a>
                        <ul class="dropdown-menu">
                            @if (auth()->user()->role_id == 1)
                            <li>
                                <a href="/admin/menu" class="dropdown-item" style="color: black">Dashboard</a>
                            </li>
                            @endif
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit" href="#">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            @else
                <a class="btn btn-login" href="/login" role="button">Login</a>
            @endauth
        </div>
    </div>
</nav>
