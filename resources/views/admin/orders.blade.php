<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&family=Josefin+Sans:wght@700&family=Lilita+One&family=Poppins&family=Quicksand:wght@300&display=swap"
        rel="stylesheet" />

    <!-- Link CSS -->
    <link rel="stylesheet" href="css/ordersstyle.css" />
</head>

<body>

    <img id="abstract-bg" src="image/abstract-bg3.png" alt="abstract-bg" />

    <!-- Navbar Start-->
    <nav class="navbar navbar-expand-lg sticky-top px-5 py-4">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <h5>Hello, Admin!</h5>
                    </li>
                </ul>
                <div class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/menu">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/orders">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/completed">Completed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    {{-- Search Start --}}
    <div class="container-fluid search px-5 my-4">
        <form class="search col-3 d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search Menu" aria-label="Search">
            <button class="btn btn-search" type="submit">Search</button>
        </form>
    </div>
    {{-- Search End --}}

    {{-- Card Start --}}
    <div class="container col-8 my-5 px-4 py-3">
        <div class="card-body">
            <div class="row">
                <ul class="d-flex flex-col align-items-center">
                    <li class="me-2">
                        <span class="badge">
                            <i class="fa fa-list-ul fa-2x"></i>
                        </span>
                    </li class="me-2">
                    <li class="me-2">
                        <span class="fw-bold">On Process</span>
                    </li>
                    <li class="me-2">
                        <i class="fa fa-check-circle-o fa-2x"></i>
                    </li>
                    <li class="me-2">
                        <i class="fa fa-trash fa-2x"></i>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-2 me-5">
                    <img class="card-img" src="image/barongko.jpg" alt="barongko">
                </div>
                <div class="col">
                    <h5 class="fw-bold">Barongko</h5>
                    <h5>Rp. 50.000,00</h5>
                    <h5 class="fw-bold pe-3" style="text-align: end">1x</h5>
                    <div class="dashed"></div>
                    <small>Selasa, 19 Maret 2023</small>
                    <br>
                    <small>19.00 WITA</small>
                </div>
            </div>
            <div class="container col-7">
                <span class="d-block">Alamat Pengiriman:</span>
                <span class="d-block">Febi Fiantika | (+62) 612-3456-7898</span>
                <span class="d-block">Lorem ispan sum dolor, sit amet consectetur adipisicing elit. Harum, tempora. GANGNAM, KAB. BUSAN, SOUTH KOREA, ID 12345</span>
            </div>
        </div>
    </div>
    {{-- Card End --}}


    <!-- Bootstrap Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- Font Awesome Javascript -->
    <script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>
</body>

</html>
