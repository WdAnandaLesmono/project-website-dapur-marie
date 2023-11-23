<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,300&family=Poppins&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/profilestyle.css">

    <link rel="stylesheet" href="css/editprofile.css">

</head>

<body>

    <!-- Navbar Start-->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <a href="/profile" style="text-decoration: none"><i class="fa fa-arrow-left fa-2x"
                    aria-hidden="true"></i></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <h1 class="nav-link">Edit Profile</h1>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="content">
        <div class="icon-change">
            <img src="image/icon-profile.png" alt="">
            <div class="logo">
                <i class="fa fa-trash fa-2x"></i>
                <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
            </div>
        </div>

        <div>
            <button class="btn-edit" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdropEditUsername">
                Edit Username</button>

            <!-- Modal Edit Username-->
            <div class="modal fade" id="staticBackdropEditUsername" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form method="POST" action="">
                            @csrf
                            <div class="modal-header border-0">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Username</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="text" class="form-control" id="username" name="username"
                                    value="{{ auth()->user()->username }}">
                            </div>
                            <div class="modal-footer border-0">
                                <button type="submit" name="editUsername" class="btn-edit">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <button class="btn-edit" type="button" data-bs-toggle="modal"
                data-bs-target="#staticBackdropChangePassword">Change Password</button>
            <!-- Modal Change password-->
            <div class="modal fade" id="staticBackdropChangePassword" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form action="">
                            <div class="modal-header border-0">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Change Password</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="password" class="form-control" id="password">
                            </div>
                            <div class="modal-footer border-0">
                                <button type="submit" class="btn-edit">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <button class="btn-edit">Delete Account</button>
        </div>


    </div>

    <script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    @include('sweetalert::alert')
</body>

</html>
