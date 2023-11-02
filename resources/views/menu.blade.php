<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Menu</title>

    <!-- Link Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&family=Josefin+Sans:wght@700&family=Lilita+One&family=Poppins&family=Quicksand:wght@300&display=swap"
      rel="stylesheet"
    />

    <!-- Link CSS -->
    <link rel="stylesheet" href="css/menustyle.css" />
  </head>
  <body>
    <!-- Navbar Start-->
    <nav class="navbar navbar-expand-lg sticky-top">
      <div class="container-fluid">
        <img src="image/dapur-marie-txt.jpeg" />
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search..."
              aria-label="Search"
            />
            <button class="btn btn-search" type="submit">Login</button>
          </form>
          <i class="fa fa-user-circle-o fa-2x ps-3 pe-1"></i>
          <span>dhyaunn</span>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Card Start -->
    <h2 class="menu text-center">Menu</h2>
    <div class="container menu-type p-2 mt-2 mb-4">
      <ul class="type me-auto mb-2 mb-lg-0">
        <li class="nav-item me-4">
          <a class="badge" href="#">All</a>
        </li>
        <li class="nav-item me-4">
          <a class="badge" href="#">Cake</a>
        </li>
        <li class="nav-item me-4">
          <a class="badge" href="#">Snack</a>
        </li>
    </ul>
    <i class="fa fa-shopping-cart fa-2x"></i>
    </div>
    <div class="container menu-gallery mt-2">
      <div class="row align-items-center g-5">
        <div class="col-md-4 d-flex justify-content-center">
          <div class="card border-black" style="width: 18rem">
            <img
              src="image/barongko.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title fw-700">Barongko</h5>
              <p class="card-text">Rp. 50.000</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <div class="card border-black" style="width: 18rem">
            <img
              src="image/puding-caramel.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Puding Caramel</h5>
              <p class="card-text">Rp. 30.000</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <div class="card border-black" style="width: 18rem">
            <img
              src="image/kacang-telur.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Kacang Telur</h5>
              <p class="card-text">Rp. 15.000</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <div class="card border-black" style="width: 18rem">
            <img
              src="image/barongko.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Barongko</h5>
              <p class="card-text">Rp. 50.000</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <div class="card border-black" style="width: 18rem">
            <img
              src="image/puding-caramel.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Puding Caramel</h5>
              <p class="card-text">Rp. 30.000</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <div class="card border-black" style="width: 18rem">
            <img
              src="image/kacang-telur.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Kacang Telur</h5>
              <p class="card-text">Rp. 15.000</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <div class="card border-black" style="width: 18rem">
            <img
              src="image/barongko.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Barongko</h5>
              <p class="card-text">Rp. 50.000</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <div class="card border-black" style="width: 18rem">
            <img
              src="image/puding-caramel.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Puding Caramel</h5>
              <p class="card-text">Rp. 30.000</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <div class="card border-black" style="width: 18rem">
            <img
              src="image/kacang-telur.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Kacang Telur</h5>
              <p class="card-text">Rp. 15.000</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Card End -->

    <!-- Bootstrap Javascript -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>

    <!-- Font Awesome Javascript -->
    <script
      src="https://kit.fontawesome.com/206142bfe3.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>