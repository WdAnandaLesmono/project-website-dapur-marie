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
    {{-- <link rel="stylesheet" href="css/profilestyle.css"> --}}
    
    <link rel="stylesheet" href="/css/{{ request()->segment(1) == 'profile' ? 'profilestyle.css' : '' }}" />
    <link rel="stylesheet" href="/css/{{ request()->segment(2) == 'order' ? 'profilestyle.css' : '' }}" />

</head>

<body>

    <!-- Navbar Start-->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <a href="/" style="text-decoration: none"><i class="fa fa-arrow-left fa-2x"
                    aria-hidden="true"></i></a>
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
                <img src="/image/icon-profile.png" alt="">
                <div class="username-section">
                    <h2><b>{{ auth()->user()->username }}</b></h2>
                    <a href="/editprofile" style="text-decoration: none">
                        <button>
                            Edit Profile
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div class="btn-group">
            <a class="btn {{ Request::is('profile') ? 'active' : '' }}" href="/profile">Carts</a>
            <a class="btn {{ Request::is('profile/order') ? 'active' : '' }}" href="/profile/order">Orders</a>
            <a class="btn">History</a>
        </div>

        @if ($product->Count() > 0)
            @foreach ($product as $product)
                <div class="detail-order">
                    <div class="product-detail">
                        <img src="{{ asset('storage/' . $product->product->image) }}" alt="{{ $product->product->name }}">
                        <div class="m-4">
                            <h5 class="nama-produk"><b>{{ $product->product->name }}</b></h5>
                            <p class="harga">Rp. {{ $product->product->price * $product->quantity }}</p>
                        </div>
                        <p class="jumlah-order">{{ $product->quantity }}x</p>
                        <div class="trash-logo">
                            <a href="{{ url('/profile/remove_cart', $product->id) }}"><i class="fa fa-trash fa-2x"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="container">
                <h2 class="text-center mt-5">Your cart is empty</h2>
            </div>
        @endif

    </div>

    <script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>
     @include('sweetalert::alert')
</body>

</html>
