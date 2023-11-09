@extends('admin.layouts.main')

@section('body')
<div class="row">
    {{-- Search Start --}}
    <div class="container-fluid search px-5 my-4 col">
        <form class="search col-3 d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search Menu" aria-label="Search">
            <button class="btn btn-search" type="submit">Search</button>
        </form>
    </div>
    {{-- Search End --}}

    {{-- category menu --}}
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
</div>
@endsection
