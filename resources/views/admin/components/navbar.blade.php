    <!-- Navbar Start-->
    <nav class="navbar navbar-expand-lg sticky-top px-5 py-4">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="/" style="text-decoration: none"><h5>Hello, Admin!</h5></a> 
                    </li>
                </ul>
                <div class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('admin/menu') ? 'active fw-700' : '' }}" href="/admin/menu">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('admin/orders') ? 'active fw-700' : '' }}" href="/admin/orders">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('admin/completed') ? 'active fw-700' : '' }}" href="/admin/completed">Completed</a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                    @csrf
                                    <button class="nav-link" type="submit" href="#">Logout</button>
                                </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
