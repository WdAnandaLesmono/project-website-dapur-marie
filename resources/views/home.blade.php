<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&family=Josefin+Sans:wght@700&family=Lilita+One&family=Poppins&family=Quicksand:wght@300&display=swap"
        rel="stylesheet">

    <!-- Link CSS -->
    <link rel="stylesheet" href="css/homestyle.css">
</head>
<body>
    <!-- Navbar Start-->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <img src="image/dapur-marie-txt.jpeg" alt="dapur-marie-txt">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link"href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                    <button class="btn btn-search" type="submit">Login</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Jumbotron Start-->
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="display-4">Welcome To <br> Dapur Marie</h1>
                    <p>Get your delicious food here!</p>
                    <a class="btn btn-lg" href="/detailmenu" role="button">Buy Now</a>
                </div>
                <div class="col-md-6 text-center">
                    <div class="img-border">
                        <img src="image/logo-mari-makan.png" alt="logo-mari-makan">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#6B4F4F" fill-opacity="1"
            d="M0,128L40,128C80,128,160,128,240,122.7C320,117,400,107,480,128C560,149,640,203,720,208C800,213,880,171,960,138.7C1040,107,1120,85,1200,112C1280,139,1360,213,1400,250.7L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z">
        </path>
    </svg>
    <!-- Jumbotron End -->

    <!-- Card Start -->
    <h2 class="menu text-center">Menu</h2>
    <div class="menu-gallery">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center g-5">
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card border-black" style="width: 18rem;">
                        <img src="image/barongko.jpg" class="card-img-top" alt="barongko">
                        <div class="card-body">
                            <h5 class="card-title fw-700">Barongko</h5>
                            <p class="card-text">Rp. 50.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card border-black" style="width: 18rem;">
                        <img src="image/puding-caramel.jpg" class="card-img-top" alt="puding-caramel">
                        <div class="card-body">
                            <h5 class="card-title">Puding Caramel</h5>
                            <p class="card-text">Rp. 30.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card border-black" style="width: 18rem;">
                        <img src="image/kacang-telur.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kacang Telur</h5>
                            <p class="card-text">Rp. 15.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card border-black" style="width: 18rem;">
                        <img src="image/barongko.jpg" class="card-img-top" alt="barongko">
                        <div class="card-body">
                            <h5 class="card-title">Barongko</h5>
                            <p class="card-text">Rp. 50.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card border-black" style="width: 18rem;">
                        <img src="image/puding-caramel.jpg" class="card-img-top" alt="puding-caramel">
                        <div class="card-body">
                            <h5 class="card-title">Puding Caramel</h5>
                            <p class="card-text">Rp. 30.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card border-black" style="width: 18rem;">
                        <img src="image/kacang-telur.jpg" class="card-img-top" alt="kacang-telur">
                        <div class="card-body">
                            <h5 class="card-title">Kacang Telur</h5>
                            <p class="card-text">Rp. 15.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card border-black" style="width: 18rem;">
                        <img src="image/barongko.jpg" class="card-img-top" alt="barongko">
                        <div class="card-body">
                            <h5 class="card-title">Barongko</h5>
                            <p class="card-text">Rp. 50.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card border-black" style="width: 18rem;">
                        <img src="image/puding-caramel.jpg" class="card-img-top" alt="puding-caramel">
                        <div class="card-body">
                            <h5 class="card-title">Puding Caramel</h5>
                            <p class="card-text">Rp. 30.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card border-black" style="width: 18rem;">
                        <img src="image/kacang-telur.jpg" class="card-img-top" alt="kacang-telur">
                        <div class="card-body">
                            <h5 class="card-title">Kacang Telur</h5>
                            <p class="card-text">Rp. 15.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card End -->

    <!-- Description Start -->
    <div class="description container-fluid">
        <h1 class="description text-center">Why Choose Us?</h1>
        <div class="container d-flex align-items-center">
            <div class="img-border me-5">
                <img src="image/barongko.jpg" alt="barongko">
            </div>
            <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque dicta iure doloribus mollitia asperiores perspiciatis dolor, voluptas eius veritatis quia non blanditiis ad consequatur. Eligendi ratione magnam harum iure nobis!</span>
        </div>
        <div class="container d-flex align-items-center">
            <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque dicta iure doloribus mollitia asperiores perspiciatis dolor, voluptas eius veritatis quia non blanditiis ad consequatur. Eligendi ratione magnam harum iure nobis!</span>
            <div class="img-border ms-5">
                <img src="image/puding-caramel.jpg" alt="puding-caramel">
            </div>
        </div>
        <div class="container d-flex align-items-center">
            <div class="img-border me-5">
                <img src="image/kacang-telur.jpg">
            </div>
            <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque dicta iure doloribus mollitia asperiores perspiciatis dolor, voluptas eius veritatis quia non blanditiis ad consequatur. Eligendi ratione magnam harum iure nobis!</span>
        </div>
    </div>
    <!-- Description End -->

    <!-- Footer Start -->
    <div class="footer container-fluid">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col">
                    <img src="image/logo.png" alt="logo">
                </div>
                <div class="col">
                    <table>
                        <tr>
                            <th colspan="2">
                                Contact Us:
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                    <path
                                        d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z" />
                                </svg>
                            </td>
                            <td>Jl. ni aja dulu</td>
                        </tr>
                        <tr>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="currentColor" class="bi bi-whatsapp"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                </svg>
                            </td>
                            <td>+6282271041877</td>
                        </tr>
                        <tr>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="currentColor" class="bi bi-instagram"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg>
                            </td>
                            <td>@dapurmarie_</td>
                        </tr>
                        <tr>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="currentColor" class="bi bi-facebook"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg>
                            </td>
                            <td>Dapur Marie</td>
                        </tr>
                    </table>
                </div>
                <div class="col">
                    <h1>Get Your Delicious Food Here!</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>