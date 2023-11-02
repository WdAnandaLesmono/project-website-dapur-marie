<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Detail Menu</title>

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
    <link rel="stylesheet" href="css/detailmenustyle.css" />
  </head>
  <body>
    <!-- Navbar Start-->
    <nav class="navbar navbar-expand-lg sticky-top">
      <img src="image/dapur-marie-txt.jpeg" />
      <div class="container-fluid">
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
              <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/menu">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
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

    <!-- Detail Menu Start -->
    <div class="container-fluid detail-menu mt-5">
      <img
        id="abstract-bg"
        src="image/abstract-bg.png"
        alt="abstract-bg"
      />
      <div class="row">
        <div class="col-6 d-flex justify-content-center">
          <img
            src="image/barongko.jpg"
            alt="barongko"
          />
        </div>
        <div class="col-6 d-flex align-items-center justify-content-center">
          <div class="container">
            <h2 class="title">Barongko</h2>
            <h4>Rp 50.000</h4>
            <div class="row order mt-5">
              <span class="badge me-3" id="shopping-cart"
                ><i class="fa fa-shopping-cart fa-2x"></i
              ></span>
              <span class="badge me-4" id="orders">Orders</span>
              <span class="badge me-1" id="add">-</span>
              <span class="badge me-1" id="sum">1</span>
              <span class="badge" id="substraction">+</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Detail Menu End -->

    <!-- Deskripsi Start -->
    <div class="container-fluid deskripsi col-11 p-5">
      <h1>Deskripsi</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium,
        perspiciatis suscipit. Consequuntur error aut nulla deleniti! Iure in
        quod alias aspernatur itaque! Maxime reiciendis quas eveniet minus
        suscipit nihil sit. Lorem ipsum dolor sit, amet consectetur adipisicing
        elit. Voluptatum, aperiam dolorum? Placeat, harum aspernatur. Possimus
        maiores, ex nisi inventore veniam, suscipit accusamus sit ut eveniet
        dignissimos sed aut blanditiis nam.
      </p>
    </div>

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
