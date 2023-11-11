<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Menu</title>

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

    <h3 class="title-menu">Edit Menu</h3>

    <div class="content">
        <div>
            <img src="../image/barongko.jpg" alt="">
        
            <div class="edit-logo">
                <i class="fa fa-pencil-square-o"></i>
                <i class="fa fa-trash"></i>
            </div>
        </div>

        <div class="field-edit">  
            
            <div class="field-name">Barongko
                <i class="fa fa-pencil-square-o"></i>
            </div>  

            <div class="field-price">Rp. 10.000,00
                <i class="fa fa-pencil-square-o"></i>
            </div>  

            <div class="field-category">Cake
                <i class="fa fa-caret-square-o-down"></i>
            </div>  

            <div class="field-desc">Deskripsi
                <i class="fa fa-pencil-square-o"></i>
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