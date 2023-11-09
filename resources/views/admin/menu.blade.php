@extends('admin.layouts.main')

@section('body')

    <div class="container-fluid search px-5 my-4 col">
        <div class="container menu-type p-2 mt-2 mb-4 col">
            <ul class="type me-auto mb-2 mb-lg-0">
                <li class="nav-item me-4">
                    <a class="badge category-menu" href="#">All</a>
                </li>
                <li class="nav-item me-4">
                    <a class="badge category-menu" href="#">Cake</a>
                </li>
                <li class="nav-item me-4">
                    <a class="badge category-menu" href="#">Snack</a>
                </li>
            </ul>
        </div>
        
        <form class="search d-flex" role="search">
            <input class="form-control" type="search" placeholder="Search Menu" aria-label="Search">
            <button class="btn btn-search" type="submit">Search</button>
        </form>
    </div>

    <div class="detail-order">
        <div class="product-detail">
            <div class="d-flex align-items-center">
                <img src="../image/barongko.jpg" alt="">
                <div class="ms-4">
                    <h5 class="nama-produk"><b>Barongko</b></h5>
                    <p class="harga">Rp. 50.000</p>
                </div>
            </div>
            <div class="trash-logo">
                <i class="fa fa-pencil-square-o fa-2x"></i>
                <i class="fa fa-trash fa-2x"></i>
            </div>
        </div>
    </div>

    <div class="detail-order">
        <div class="product-detail">
            <div class="d-flex align-items-center">
                <img src="../image/barongko.jpg" alt="">
                <div class="ms-4">
                    <h5 class="nama-produk"><b>Barongko</b></h5>
                    <p class="harga">Rp. 50.000</p>
                </div>
            </div>
            <div class="trash-logo">
                <i class="fa fa-pencil-square-o fa-2x"></i>
                <i class="fa fa-trash fa-2x"></i>
            </div>
        </div>
    </div>

    <div class="detail-order">
        <div class="product-detail">
            <div class="d-flex align-items-center">
                <img src="../image/barongko.jpg" alt="">
                <div class="ms-4">
                    <h5 class="nama-produk"><b>Barongko</b></h5>
                    <p class="harga">Rp. 50.000</p>
                </div>
            </div>
            <div class="trash-logo">
                <i class="fa fa-pencil-square-o fa-2x"></i>
                <i class="fa fa-trash fa-2x"></i>
            </div>
        </div>
    </div>

{{-- </div> --}}
@endsection
