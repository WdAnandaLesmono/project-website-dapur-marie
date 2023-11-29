@extends('layouts.main')

@section('body')
    <!-- Detail Menu Start -->
    <div class="container-fluid detail-menu mt-5">
        <img id="abstract-bg" src="/image/abstract-bg.png" alt="abstract-bg" />
        <div class="row">
            <div class="col-6 d-flex justify-content-center">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" />
            </div>
            <div class="col-6 d-flex align-items-center justify-content-center">
                <div class="container">
                    <h2 class="title">{{ $product->name }}</h2>
                    <h4>Rp. {{ $product->price }}</h4>
                    <div class="row order mt-5">
                        <form id="addToCart" class="d-flex" method="POST" action="{{ url('add_cart', $product->id) }}">
                            @csrf
                            <button class="badge badge-order me-3" value="Add To Cart" id="shopping-cart"><i class="fa fa-shopping-cart fa-2x"></i></button>
                            <button class="badge badge-order me-4" id="orders">Orders</button>
                            <input type="number" name="quantity" class="badge-order text-center" value="1" min="1" style="width: 60px">

                        </form>
                        {{-- <button class="badge badge-order me-1" id="decreaseBtn">-</button>
                        <span class="badge badge-order me-1" id="counterValue">0</span>
                        <button class="badge badge-order" id="increaseBtn">+</button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail Menu End -->

    <!-- Deskripsi Start -->
    <div class="container-fluid deskripsi col-11 p-5">
        <h1>Deskripsi</h1>
        <p>{{ $product->description }}</p>
    </div>
@endsection
