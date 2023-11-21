@extends('layouts.main')

@section('body')
    <!-- Jumbotron Start-->
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="display-4">Welcome To <br> Dapur Marie</h1>
                    <p>Get your delicious food here!</p>
                    <a class="btn btn-lg" href="menu/" role="button">Buy Now</a>
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
            @if ($products->count())
                <div class="row d-flex align-items-center g-5">
                    @foreach ($products as $product)
                        <div class="col-md-4 d-flex justify-content-center">
                            <div class="card border-black" style="width: 18rem;">
                                <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top"
                                    alt="{{ $product->name }}">
                                <div class="card-body">
                                    <a href="/menu/detailmenu/{{ $product->id }}"
                                        style="text-decoration: none; color:black">
                                        <h5 class="card-title fw-700">{{ $product->name }}</h5>
                                    </a>
                                    <p class="card-text">Rp. {{ $product->price }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
            <h5>No product found</h5>
            @endif
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
            <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque dicta iure doloribus mollitia asperiores
                perspiciatis dolor, voluptas eius veritatis quia non blanditiis ad consequatur. Eligendi ratione magnam
                harum iure nobis!</span>
        </div>
        <div class="container d-flex align-items-center">
            <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque dicta iure doloribus mollitia asperiores
                perspiciatis dolor, voluptas eius veritatis quia non blanditiis ad consequatur. Eligendi ratione magnam
                harum iure nobis!</span>
            <div class="img-border ms-5">
                <img src="image/puding-caramel.jpg" alt="puding-caramel">
            </div>
        </div>
        <div class="container d-flex align-items-center">
            <div class="img-border me-5">
                <img src="image/kacang-telur.jpg">
            </div>
            <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque dicta iure doloribus mollitia asperiores
                perspiciatis dolor, voluptas eius veritatis quia non blanditiis ad consequatur. Eligendi ratione magnam
                harum iure nobis!</span>
        </div>
    </div>
    <!-- Description End -->
@endsection
