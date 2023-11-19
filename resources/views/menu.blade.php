@extends('layouts.main')

@section('body')
    <!-- Card Start -->
    <h2 class="menu text-center">Menu</h2>
    <div class="container menu-type p-2 mt-2 mb-4">
        <ul class="type me-auto mb-2 mb-lg-0">
            <li class="nav-item me-4">
                <a class="badge {{ Request::is('menu') ? 'active' : '' }}" href="/menu">All</a>
            </li>
            @foreach ($categories as $category)
            <li class="nav-item me-4">
                <a class="badge {{ Request::is('menu/categories/' . $category->id) ? 'active' : '' }}" href="/menu/categories/{{ $category->id }}">{{ $category->name }}</a>
            </li>             
            @endforeach
        </ul>
        <i class="fa fa-shopping-cart fa-2x"></i>
    </div>
    <div class="container menu-gallery mt-2 mb-5">
        <div class="row align-items-center g-5">
            @foreach ($products as $product)
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card border-black" style="width: 18rem;">
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top"
                            alt="{{ $product->name }}">
                        <div class="card-body">
                            <a href="/menu/detailmenu/{{ $product->id }}" style="text-decoration: none; color:black">
                                <h5 class="card-title fw-700">{{ $product->name }}</h5>
                            </a>
                            <p class="card-text">Rp. {{ $product->price }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Card End -->
@endsection
