<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>

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
   <link rel="stylesheet" href="css/ordersstyle.css" />
</head>
<body>


  <img
  id="abstract-bg"
  src="image/abstract-bg3.png"
  alt="abstract-bg"/>
    <nav class="navbar navbar-expand-lg sticky-top">

        <p>Hello, Admin!</p>
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
          <div class="collapse navbar-collapse d-flex" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/home">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/menu">Orders</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">Completed</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">Logout</a>
              </li>
            </ul>
          </nav>

      <div class="search-container">
        <input type="text" id="search" placeholder="Search menu...">
      </div>

      <div class="card">

      </div>

   

       <!-- Bootstrap Javascript -->
       <script
       src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
       integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
       crossorigin="anonymous"
     ></script>
</body>
</html>