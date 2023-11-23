@extends('admin.layouts.main')

@section('body')
    <a href="/admin/menu/create" class="act-btn">
        +
    </a>
    <div class="container-fluid search px-5 my-4 col">
        <div class="container menu-type p-2 mt-2 mb-4 col">
            <ul class="type me-auto mb-2 mb-lg-0">
                <li class="nav-item me-4">
                    <a class="badge category-menu" href="#">All</a>
                </li>
                @foreach ($categories as $category)
                    <li class="nav-item me-4">
                        <a class="badge category-menu{{ Request::is('admin/menu/categories/' . $category->id) ? 'active' : '' }}"
                            href="menu/categories/{{ $category->id }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <form class="search d-flex align-items-center" role="search">
            <input class="form-control" type="search" placeholder="Search Menu" name="search" aria-label="Search" value="{{ request('search') }}">
            <button class="btn btn-search" type="submit">Search</button>
        </form>
    </div>

    @foreach ($products as $product)
        <div class="detail-order mb-4">
            <div class="product-detail">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                    <div class="ms-4 mt-2">
                        <a href="/menu/detailmenu/{{ $product->id }}" style="text-decoration: none; color:black">
                            <h5 class="nama-produk"><b>{{ $product->name }}</b></h5>
                        </a>
                        <p class="harga">Rp. {{ $product->price }}</p>
                        <p class="stock">Stock: {{ $product->stock }}</p>
                    </div>
                </div>
                <div class="trash-logo">
                    <a href="/admin/menu/{{ $product->id }}/edit" style="text-decoration: none"><i
                            class="fa fa-pencil-square-o fa-2x"></i></a>
                    <form action="/admin/menu/{{ $product->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="border-0" style="background-color: #EED6C4;"><i
                                class="fa fa-trash fa-2x"></i></button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
