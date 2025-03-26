@props(['img', 'judul', 'text'])

<div class="card shadow-lg rounded-4 overflow-hidden border-0 d-flex flex-column h-100 transition-effect">
    <img src="{{ $img }}" class="card-img-top img-fixed" alt="Gambar">
    <div class="card-body p-3 d-flex flex-column text-center">
        <h5 class="card-title">{{ $judul }}</h5>
        <p class="card-text text-muted flex-grow-1">{{ $text }}</p>
        <a href="#" class="btn transition-button fw-bold mt-auto">Kunjungi Produk</a>
    </div>
</div>

<style>
/* Menyesuaikan ukuran gambar */
.img-fixed {
    object-fit: cover;
    height: 250px; /* Sesuaikan tinggi gambar */
}

/* Efek hover pada card */
.transition-effect {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
}
.transition-effect:hover {
    transform: translateY(-8px);
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
}

/* Tombol awal abu-abu, berubah jadi biru saat hover */
.transition-button {
    background-color: rgb(195, 196, 196); /* Abu-abu */
    color: white;
    transition: background-color 0.3s ease, transform 0.2s ease;
}
.transition-button:hover {
    background-color: #0d6efd; /* Biru saat hover */
    transform: scale(1.05);
}
</style>
