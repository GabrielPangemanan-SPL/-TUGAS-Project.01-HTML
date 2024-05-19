// Ambil semua elemen gambar dalam galeri
const images = document.querySelectorAll('.image-wrapper img');

// Tambahkan event listener untuk setiap gambar
images.forEach((image, index) => {
    image.addEventListener('mouseenter', () => {
        // Pilih warna gradien berdasarkan indeks gambar
        let gradientColors;
        switch (index) {
            case 0:
                gradientColors = ['#87CEEB', '#4682B4']; // DeepPink to HotPink
                break;
            case 1:
                gradientColors = ['#FF5733', '#FFC300']; // Orange to Yellow
                break;
            case 2:
                gradientColors = ['#FF1493', '#FF69B4']; // LightSkyBlue to SteelBlue
                break;
            case 3:
                gradientColors = ['#FFD700', '#FFA500']; // Gold to Orange
                break;
        }        

        // Ubah latar belakang gradien saat hover dengan transisi smooth
        changeBackgroundGradientSmooth(gradientColors);
    });

    image.addEventListener('mouseleave', () => {
        // Kembalikan warna latar belakang ke gradien awal dari CSS saat tidak hover
        resetBackgroundSmooth();
    });
});

// Fungsi untuk mengubah warna latar belakang gradien saat hover dengan transisi smooth
function changeBackgroundGradientSmooth(gradientColors) {
    const body = document.querySelector('body');
    body.style.transition = 'background-color 0.5s ease'; // Durasi transisi lebih pendek (0.5 detik)
    
    // Tambahkan jeda sebelum perubahan warna latar belakang terjadi
    setTimeout(() => {
        body.style.background = `linear-gradient(45deg, ${gradientColors[0]}, ${gradientColors[1]})`;
    }, 10);
}

function resetBackgroundSmooth() {
    const body = document.querySelector('body');
    body.style.transition = 'background-color 0.5s ease';

    setTimeout(() => {
        body.style.background = 'linear-gradient(45deg, #ebcbcb, #ddf4b2, #80b6ec)';
    }, 10);
}

function showAlert() {
    alert("bru"); // Menampilkan alert
    // Tetapkan style CSS ke elemen
    document.getElementById("terimakasih").style.color = "white";
}