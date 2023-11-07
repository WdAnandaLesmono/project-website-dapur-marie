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
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,300&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>

    <!-- Navbar Start-->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
                <i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <h1 class="nav-link">Profile</h1>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="content">
        <div class="profile">
            <div class="img-profile">
                <img src="image/icon-profile.png" alt="">
                <div class="username-section">
                    <h2><b>Username</b></h2>
                    <button>
                        Edit Profile
                    </button>
                </div>
            </div>
        </div>
    
        <table class="table">
            <tbody>
              <tr>
                <th>Charts</th>
                <th>Orders</th>
                <th>History</th>
              </tr>
            </tbody>
        </table>
    </div>







    
    <script
      src="https://kit.fontawesome.com/206142bfe3.js"
      crossorigin="anonymous"
    ></script>
    
</body>
</html>