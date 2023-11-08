<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,300&family=Poppins&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/cartstyle.css">

</head>

<body>

    <!-- Navbar Start-->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <h1 class="nav-link" style="font-family: 'Fraunces', serif;">Profile</h1>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="container my-3">
        <div class="row">
            <div class="col d-flex align-items-center">
                <i class="fa fa-map-marker fa-2x ms-5"></i>
                <span class="ms-2 ps-1">Alamat pengiriman</span>
            </div>
        </div>
        <div class="row mt-4">
            <div class="ms-5 col-7 ps-5">
                <span class="d-block">Febi Fiantika | (+62) 612-3456-7898</span>
                <span class="d-block">Lorem ispan sum dolor, sit amet consectetur adipisicing elit. Harum, tempora.
                    GANGNAM, KAB. BUSAN, SOUTH KOREA, ID 12345</span>
            </div>
        </div>
        <i class="fa fa-arrow-right fa-2x d-flex justify-content-end"></i>
        <div class="dashed mt-3"></div>
    </div>

    {{-- Card Start --}}
    <div class="container container-card col-8 my-5">
        <div class="card-body mb-3">
            <div class="col">
                <div class="quantity mt-3 d-flex align-items-center">
                    <span id="quantity">Quantity</span>
                    <a class="badge ms-2" href="#">1x</a>
                </div>
                <i class="fa fa-trash fa-2x mt-3"></i>
            </div>
            <div class="row">
                <div class="col-2">
                    <img class="card-img" src="image/barongko.jpg" alt="barongko">
                </div>
                <div class="col ms-4 my-3 ms-5">
                    <div class="row d-flex">
                        <h5 class="fw-bold">Barongko</h5>
                        <P>Lorem ipsum</P>
                        <br> <br>
                        <P>Lorem ipsum dolor sit amet consectetur</P>
                        <h5 class="fw-bold pe-3" style="text-align: end">Rp. 50.000,00</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="col">
                <div class="quantity mt-3 d-flex align-items-center">
                    <span id="quantity">Quantity</span>
                    <a class="badge ms-2" href="#">1x</a>
                </div>
                <i class="fa fa-trash fa-2x mt-3"></i>
            </div>
            <div class="row">
                <div class="col-2">
                    <img class="card-img" src="image/barongko.jpg" alt="barongko">
                </div>
                <div class="col ms-4 my-3 ms-5">
                    <div class="row d-flex">
                        <h5 class="fw-bold">Barongko</h5>
                        <P>Lorem ipsum</P>
                        <br> <br>
                        <P>Lorem ipsum dolor sit amet consectetur</P>
                        <h5 class="fw-bold pe-3" style="text-align: end">Rp. 50.000,00</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- Card End --}}

    <script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>

</body>

</html>
