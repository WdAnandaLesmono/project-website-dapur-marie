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

    <h3 class="title-menu">Add New Menu</h3>

    <form action="/admin/menu" method="POST" enctype="multipart/form-data" class="mb-5">
        @csrf
        <div class="content">
            <div>
                <div class="add-img">
                    <input type="file" id="imageInput" name="image" style="display: none;">
                    <button id="addImageButton"><i class="fa fa-plus fa-7x"></i></button>
                </div>
                <div class="edit-logo">
                    <i class="fa fa-pencil-square-o"></i>
                    <i class="fa fa-trash"></i>
                </div>
            </div>
            <div class="field-edit">
                <div class="input-group">
                    <input type="text" class="form-control-1" id="name" name="name"
                        placeholder="Product Name" value="{{ old('name') }}">
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
                        value="{{ old('price') }}">
                    <span class="input-group-text">
                        <i class="fa fa-pencil-square-o"></i>
                    </span>
                </div>
                <div class="input-group">
                    <select class="form-select" name="category_id" id="category_id" aria-label="Default select example">
                        <option selected disabled>Category</option>
                        @foreach ($categories as $category)
                            <option value=" {{ $category->id }} "> {{ $category->name }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group">
                    <textarea type="text" class="form-control-desc" id="description" name="description" placeholder="Description"
                        value="{{ old('description') }}"></textarea>
                    <span class="input-group-text">
                        <i class="fa fa-pencil-square-o"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="btn-group">
            <button id="btn-cancel">Cancel</button>
            <button id="btn-save">Save</button>
        </div>
    </form>

    <script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>
    {{-- <script src="script.js"></script> --}}

    @include('sweetalert::alert')
</body>

</html>
