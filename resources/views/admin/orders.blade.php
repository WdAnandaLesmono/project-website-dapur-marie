@extends('admin.layouts.main')

@section('body')
    {{-- Search Start --}}
    <div class="container-fluid search px-5 my-4">
        <form class="search col-3 d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search Menu" aria-label="Search">
            <button class="btn btn-search" type="submit">Search</button>
        </form>
    </div>
    {{-- Search End --}}

    {{-- Card Start --}}
    @foreach ($orders as $order)
    <div class="container col-8 my-5 px-4 py-3" id="card">
            <div class="card-body">
                <div class="row">
                    <ul class="d-flex flex-col align-items-center">
                        <li class="me-2">
                            <span class="badge list">
                                <i class="fa fa-list-ul fa-2x"></i>
                            </span>
                        </li class="me-2">
                        <li class="me-2">
                            <span class="fw-bold">{{ $order->delivery_status }} |</span>
                        </li>
                        <li class="me-2">
                            <span class="fw-bold">{{ $order->payment_status }}</span>
                        </li>
                        <li class="me-2">
                            <i class="fa fa-check-circle-o fa-2x"></i>
                        </li>
                        <li class="me-2">
                            <i class="fa fa-trash fa-2x"></i>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-2 me-5">
                        <img class="card-img" src="{{ asset('storage/' . $order->product->image) }}" alt="{{ $order->product->name }}">
                    </div>
                    <div class="col">
                        <h5 class="fw-bold">{{ $order->product->name }}</h5>
                        <h5>Rp. {{ $order->product->price }}</h5>
                        <h5 class="fw-bold pe-3" style="text-align: end">{{ $order->quantity }}X</h5>
                        <div class="dashed"></div>
                        <small>Selasa, 19 Maret 2023</small>
                        <br>
                        <small>19.00 WITA</small>
                    </div>
                </div>
                <div class="container col-7 ps-3">
                    <span class="d-block">Alamat Pengiriman:</span>
                    <span class="d-block">{{ $order->user->username }} | (+62) 612-3456-7898</span>
                    <span class="d-block">Lorem ispan sum dolor, sit amet consectetur adipisicing elit. Harum, tempora.
                        GANGNAM, KAB. BUSAN, SOUTH KOREA, ID 12345</span>
                </div>
            </div>
        </div>
        @endforeach
    {{-- Card End --}}
@endsection
