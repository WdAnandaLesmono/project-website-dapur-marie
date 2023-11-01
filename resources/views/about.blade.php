<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About</title>
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
    <link rel="stylesheet" href="css/aboutstyle.css" />
  </head>
  <body>
    <!-- Navbar Start-->
    <nav class="navbar navbar-expand-lg sticky-top">
      <img src="./assets/image/WhatsApp Image 2023-09-26 at 22.18.21.jpeg" />
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

    <!-- About start -->
    <div class="container-fluid p-4">
      <img
        id="abstract-bg"
        src="image/abstract-bg2.png"
        alt="abstract-bg"
      />
      <div class="row">
        <div class="col">
          <img id="logo" src="image/logo.png" alt="logo" />
          <div class="container m-3">
            <h1>About</h1>
            <h5>Contact Person:</h5>
            <i class="fa fa-whatsapp fa-2x"></i>
            <i class="fa fa-instagram fa-2x"></i>
          </div>
        </div>
        <div class="col pe-5">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Perferendis, praesentium quidem! Architecto dolores doloribus
            molestias officiis. Error, magnam eum repellat commodi similique
            excepturi amet illum quas rerum repudiandae consectetur blanditiis!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus
            repellat exercitationem provident deleniti quos ea doloremque! Sequi
            quod consectetur, possimus accusamus autem maiores ex iste nulla.
            Pariatur nesciunt ut impedit? Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Hic illum blanditiis eum perferendis, eos sapiente
            vitae voluptatum inventore ducimus architecto dolorem fugit harum,
            modi corrupti. Neque optio nam qui atque.
          </p>
        </div>
      </div>
    </div>
    <!-- About End -->

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