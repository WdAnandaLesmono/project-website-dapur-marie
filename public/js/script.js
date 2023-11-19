document.addEventListener("DOMContentLoaded", function () {
    var addImageButton = document.getElementById("addImageButton");
    var imageInput = document.getElementById("imageInput");
    var imageContainer = document.getElementById("imageContainer");

    addImageButton.addEventListener("click", function () {
        // Membuka dialog pemilihan file saat tombol diklik
        imageInput.click();
    });

    imageInput.addEventListener("change", function () {
        // Menangani perubahan pada input file
        var file = imageInput.files[0];

        if (file) {
            // Membaca file gambar sebagai URL data
            var reader = new FileReader();

            reader.onload = function (e) {
                // Membuat elemen gambar
                var imageElement = document.createElement("img");
                imageElement.src = e.target.result;
                imageElement.alt = "Selected Image";
                imageElement.style.maxWidth = "100%";

                // Menambahkan elemen gambar ke dalam div
                imageContainer.appendChild(imageElement);
            };

            reader.readAsDataURL(file);
        }
    });
});
