<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Menu</title>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,300&family=Poppins&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/profilestyle.css">

    <!-- Link CSS -->
    <link rel="stylesheet" href="/css/admin/style.css" />

</head>

<body>

    <h3 class="title-menu">Edit Menu</h3>

    <form action="/admin/menu/{{ $product->id }}" method="POST" enctype="multipart/form-data" class="mb-5">
        @method('put')
        @csrf
        <div class="content">
            <div>
                <div class="add-img">
                   <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                </div>
                <div class="edit-logo">
                    <i class="fa fa-pencil-square-o"></i>
                    <i class="fa fa-trash"></i>
                </div>
            </div>
            <div class="field-edit">
                <div class="input-group">
                    <input type="text" class="form-control-1" id="name" name="name"
                        placeholder="Product Name" value="{{ old('name', $product->name) }}">
                    <span class="input-group-text">
                        <i class="fa fa-pencil-square-o"></i>
                    </span>
                </div>
                <div class="input-group">
                    <input type="file" class="form-control-1" id="image" name="image">
                    <span class="input-group-text">
                        <i class="fa fa-pencil-square-o"></i>
                    </span>
                </div>
                <div class="input-group">
                    <input type="text" class="form-control-1" id="price" name="price" placeholder="Price"
                        value="{{ old('price', $product->price) }}">
                    <span class="input-group-text">
                        <i class="fa fa-pencil-square-o"></i>
                    </span>
                </div>
                <div class="input-group">
                    <input type="number" class="form-control-1" id="stock" name="stock" placeholder="Stock"
                        value="{{ old('stock', $product->stock) }}">
                    <span class="input-group-text">
                        <i class="fa fa-pencil-square-o"></i>
                    </span>
                </div>
                <div class="input-group">
                    <select class="form-select" name="category_id" id="category_id">
                        @foreach ($categories as $category)
                            @if (old('category_id', $product->category_id) == $category->id)
                                <option value=" {{ $category->id }} " selected> {{ $category->name }} </option>
                            @else
                                <option value=" {{ $category->id }}"> {{ $category->name }} </option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="input-group">
                    <input type="text" class="form-control-desc" id="description" name="description"
                        placeholder="Description" value="{{ old('description', $product->description) }}">
                    <span class="input-group-text">
                        <i class="fa fa-pencil-square-o"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="btn-group">
            <a href="/admin/menu" style="text-decoration: none; display: flex; align-items: center; justify-content: center" id="btn-cancel">Cancel</a>
            <button id="btn-save">Save</button>
        </div>
    </form>

    <script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>

    @include('sweetalert::alert')
</body>

</html>
