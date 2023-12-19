@extends('admin.layouts.main')

@section('body')
    {{-- Card Start --}}
    @foreach ($orders as $order)
        @if ($order->delivery_status == 'Completed' || $order->delivery_status == 'Canceled')
            <div class="container col-8 my-5 px-4 py-3" id="card">
                <div class="card-body">
                    <div class="row order">
                        <ul class="d-flex flex-col align-items-center">
                            <li class="me-2">
                                <span class="badge list">
                                    <i class="fa fa-list-ul fa-2x"></i>
                                </span>
                            </li>
                            <li class="me-2">
                                <span class="fw-bold">{{ $order->delivery_status }} |</span>
                            </li>
                            <li class="me-2">
                                <span class="fw-bold">{{ $order->payment_status }}</span>
                            </li>
                            <li class="me-2">
                                <button data-bs-target="#example{{ $order->id }}" data-bs-toggle="modal"
                                    {{ $order->payment_status === 'Cash On Delivery' ? 'disabled' : '' }}
                                    style="background: none; border: none"><i class="fa fa-file fa-2x"></i></button>
                                <div class="modal fade" id="example{{ $order->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header border-0">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Bukti Pembayaran</h1>
                                            </div>
                                            <div class="modal-body border-0">
                                                <div class="container order-image">
                                                    <img src="{{ asset('storage/' . $order->image) }}"
                                                        alt="{{ asset('storage/' . $order->product->name) }}">
                                                </div>
                                            </div>
                                            <div class="modal-footer border-0">
                                                <button type="button" class="btn btn-cancel"
                                                    data-bs-dismiss="modal">Close</button>
                                                <form method="POST" action="{{ route('verify_delivery') }}">
                                                    @csrf
                                                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                                                    <button type="submit" name="submit"
                                                        class="btn btn-verifikasi">Verifikasi</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-2 me-5">
                            <img class="card-img" src="{{ asset('storage/' . $order->product->image) }}"
                                alt="{{ $order->product->name }}">
                        </div>
                        <div class="col">
                            <h5 class="fw-bold">{{ $order->product->name }}</h5>
                            <h5>Rp. {{ $order->product->price * $order->quantity }}</h5>
                            <h5 class="fw-bold pe-3" style="text-align: end">{{ $order->quantity }}X</h5>
                            <div class="dashed"></div>
                            @php
                                $carbon = \Illuminate\Support\Carbon::parse($order->created_at)->timezone('Asia/Makassar');
                                \Carbon\Carbon::setLocale('id');
                            @endphp
                            <small>{{ $carbon->isoFormat('dddd, D MMMM YYYY') }}</small>
                            <br>
                            <small>{{ $carbon->isoFormat('H.mm [WITA]') }}</small>
                        </div>
                    </div>
                    <div class="container col-7 ps-3">
                        <span class="d-block">Alamat Pengiriman:</span>
                        <span class="d-block">{{ $order->user->username }} | {{ $order->user->telephone_number }}</span>
                        <span class="d-block">{{ $order->user->address }}</span>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
    {{-- Card End --}}
@endsection
