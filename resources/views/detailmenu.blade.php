@extends('layouts.main')

@section('body')
    <!-- Detail Menu Start -->
    <div class="container-fluid detail-menu mt-5">
        <img id="abstract-bg" src="image/abstract-bg.png" alt="abstract-bg" />
        <div class="row">
            <div class="col-6 d-flex justify-content-center">
                <img src="image/barongko.jpg" alt="barongko" />
            </div>
            <div class="col-6 d-flex align-items-center justify-content-center">
                <div class="container">
                    <h2 class="title">Barongko</h2>
                    <h4>Rp 50.000</h4>
                    <div class="row order mt-5">
                        <span class="badge me-3" id="shopping-cart"><i class="fa fa-shopping-cart fa-2x"></i></span>
                        <span class="badge me-4" id="orders">Orders</span>
                        <span class="badge me-1" id="add">-</span>
                        <span class="badge me-1" id="sum">1</span>
                        <span class="badge" id="substraction">+</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail Menu End -->

    <!-- Deskripsi Start -->
    <div class="container-fluid deskripsi col-11 p-5">
        <h1>Deskripsi</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium,
            perspiciatis suscipit. Consequuntur error aut nulla deleniti! Iure in
            quod alias aspernatur itaque! Maxime reiciendis quas eveniet minus
            suscipit nihil sit. Lorem ipsum dolor sit, amet consectetur adipisicing
            elit. Voluptatum, aperiam dolorum? Placeat, harum aspernatur. Possimus
            maiores, ex nisi inventore veniam, suscipit accusamus sit ut eveniet
            dignissimos sed aut blanditiis nam.
        </p>
    </div>
@endsection
