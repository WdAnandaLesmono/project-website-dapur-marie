<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About</title>
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
    <link rel="stylesheet" href="/css/{{ request()->segment(1) == 'about' ? 'aboutstyle.css' : '' }}" />
    <link rel="stylesheet" href="/css/{{ request()->segment(2) == 'detailmenu' ? 'detailmenustyle.css' : '' }}" />
    <link rel="stylesheet" href="/css/{{ request()->segment(1) == '' ? 'homestyle.css' : '' }}" />
    <link rel="stylesheet" href="/css/{{ request()->segment(1) == 'menu' ? 'menustyle.css' : '' }}" />
    <link rel="stylesheet" href="/css/{{ request()->segment(1) == 'categories' ? 'menustyle.css' : '' }}" />
    <link rel="stylesheet" href="/css/{{ request()->segment(1) == 'profile' ? 'profilestyle.css' : '' }}" />
    <link rel="stylesheet" href="/css/{{ request()->segment(1) == 'order' ? 'orderstyle.css' : '' }}" />
</head>

<body>
    <header>
        <!-- Navbar -->
        @include('components.navbar')
    </header>

    <main>
        @yield('body')
    </main>

    <footer>
        @include('components.footer')
    </footer>

    <!-- Bootstrap Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- Font Awesome Javascript -->
    <script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>

</body>

</html>
