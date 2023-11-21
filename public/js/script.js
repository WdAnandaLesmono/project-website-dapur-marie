// Ambil elemen-elemen HTML yang dibutuhkan
const decreaseBtn = document.getElementById("decreaseBtn");
const increaseBtn = document.getElementById("increaseBtn");
const counterValue = document.getElementById("counterValue");

// Inisialisasi value
let value = 0;

// Tambahkan event listener untuk tombol decrease
decreaseBtn.addEventListener("click", () => {
    if (value > 0) {
        value--;
        counterValue.innerText = value;
    }
});

// Tambahkan event listener untuk tombol increase
increaseBtn.addEventListener("click", () => {
    // Tambahkan kondisi untuk maksimum pesanan adalah 10
    if (value < 10000) {
        value++;
        counterValue.innerText = value;
    }
});
