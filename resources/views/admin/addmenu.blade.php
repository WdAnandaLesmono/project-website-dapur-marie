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
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,300&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/profilestyle.css">
   
    <!-- Link CSS -->
    <link rel="stylesheet" href="/css/admin/style.css" />

</head>
<body>

    <h3 class="title-menu">Add New Menu</h3>

    <div class="content">
        <div>
            <div class="add-img">
                <i class="fa fa-plus fa-7x"></i>
            </div>

        
            <div class="edit-logo">
                <i class="fa fa-pencil-square-o"></i>
                <i class="fa fa-trash"></i>
            </div>
        </div>

        <div class="field-edit">  
            
            <div class="input-group">
                <input type="text" class="form-control-1" placeholder="Product Name">
                <span class="input-group-text">
                    <i class="fa fa-pencil-square-o"></i>
                </span>
            </div>

            <div class="input-group">
                <input type="text" class="form-control-1" placeholder="Price">
                <span class="input-group-text">
                    <i class="fa fa-pencil-square-o"></i>
                </span>
            </div>

            <div class="input-group">
                <input type="text" class="form-control-1" placeholder="Category">
                {{-- <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button> --}}
                <span class="input-group-text">
                    <i class="fa fa-caret-square-o-down"></i>
                </span>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
              </div>

            <div class="input-group">
                <input type="text" class="form-control-desc" placeholder="Description">
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
    
    <script 
        src="https://kit.fontawesome.com/206142bfe3.js"
        crossorigin="anonymous">
    </script>

</body>
</html>