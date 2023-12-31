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
            <a href="/menu  " style="color: black"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <h1 class="nav-link" style="font-family: 'Fraunces', serif;">My Carts</h1>
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
                <span class="d-block">{{ auth()->user()->username }} | {{ auth()->user()->telephone_number }}</span>
                <span class="d-block">{{ auth()->user()->address }}</span>
            </div>
        </div>
        <a href="/update_address" style="color: black; text-decoration: none"><i
                class="fa fa-arrow-right fa-2x d-flex justify-content-end"></i></a>
        <div class="dashed mt-3"></div>
    </div>

    {{-- Card Start --}}
    <div class="container container-card col-8 my-5">
        <?php $totalprice = 0; ?>
        @if ($cart->Count() > 0)
            @foreach ($cart as $cart)
                <div class="card-body mb-3">
                    <div class="col">
                        <div class="quantity mt-3 d-flex align-items-center">
                            <span id="quantity">Quantity</span>
                            <a class="badge ms-2" href="#">{{ $cart->quantity }}x</a>
                        </div>
                        <a href="{{ url('/remove_cart', $cart->id) }}"><i class="fa fa-trash fa-2x mt-3"></i></a>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <img class="card-img" src="{{ asset('storage/' . $cart->product->image) }}"
                                alt="{{ $cart->product->name }}">
                        </div>
                        <div class="col ms-4 my-3 ms-5 d-flex align-items-center">
                            <div class="row d-flex align-items-center">
                                <h5 class="fw-bold">{{ $cart->product->name }}</h5>
                                {{-- <P>Lorem ipsum</P> --}}
                                <br> <br>
                                <p>{{ Str::limit($cart->product->description, 36) }}</P>
                                <h5 class="fw-bold pe-3" style="text-align: end">Rp.
                                    {{ $cart->product->price * $cart->quantity }}</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <?php $totalprice = $totalprice + $cart->product->price * $cart->quantity; ?>
            @endforeach
        @else
            <div class="container">
                <h2 class="text-center">Your cart is empty</h2>
            </div>
        @endif
    </div>
    {{-- Card End --}}

    <div class="container-fluid navbar-end">
        <div class="row d-flex align-items-center g-2 justify-content-end">
            <div class="col-1">
                <h5 class="font-weight-bold">Total</h5>
                <p>Rp. {{ $totalprice }}</p>
            </div>
            <div class="col-1">
                <button class="btn btn-checkout" type="button" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">checkout</button>
            </div>
        </div>
    </div>

    {{-- Modal Checkout --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-back" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></button>
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Payment Option</h1>
                </div>
                <div class="modal-body">
                    Pilih jenis pembayaran
                </div>
                <div class="modal-footer">
                    <div class="row d-flex align-items-center">
                        <div class="col-1">
                            <a href="{{ url('cash_order') }}"><i class="fa fa-money-bill-alt fa-2x"></i></a>
                        </div>
                        <div class="col ms-4">
                            <a href="{{ url('cash_order') }}" style="text-decoration: none"><span>Cash On
                                    Delivery</span></a>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center">
                        <div class="col-1">
                            <button class="btn-wallet" data-bs-target="#exampleModal2" data-bs-toggle="modal"><i
                                    class="fa fa-wallet fa-2x"></i></button>
                        </div>
                        <div class="col ms-3">
                            <button class="btn-wallet" data-bs-target="#exampleModal2"
                                data-bs-toggle="modal"><span>E-Wallet</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-back" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                            class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></button>
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Upload Bukti Pembayaran</h1>
                </div>
                <form method="POST" enctype="multipart/form-data" action="">
                    <div class="modal-body">
                        <h5>Dana : 082271041877</h5> <br>
                        @csrf
                        <input type="file" class="form-control-1" id="image" name="image">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" name="submit" class="btn btn-ok">OK</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>
    @include('sweetalert::alert')

</body>

</html>
