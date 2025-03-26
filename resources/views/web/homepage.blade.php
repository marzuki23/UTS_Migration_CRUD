<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container text-center py-5">
        <h2 class="fw-bold">Best Seller</h2>
        <hr class="w-50 mx-auto mb-4">    
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col">
            <x-card 
                img="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/picture_meta/2023/4/10/sqew3j5qexpsolyjghtrom.jpg" 
                judul="Si Putih" 
                text="Si Putih adalah novel karya Tere Liye yang merupakan bagian dari serial Bumi. Novel ini merupakan buku kesepuluh dari serial Bumi." 
            />
        </div>
        <div class="col">
            <x-card 
                img="https://s3-ap-southeast-1.amazonaws.com/ebook-previews/45496/168985/1.jpg" 
                judul="Filosofi Teras" 
                text="Sebuah buku pengantar filsafat Stoa yang dibuat khusus sebagai panduan moral anak muda." 
            />
        </div>
        <div class="col">
            <x-card 
                img="https://ebooks.gramedia.com/ebook-covers/93408/image_highres/BLK_AYSLH1720512980933.jpg" 
                judul="Aku Yang Sudah Lama Hilang" 
                text="“Diramu untuk memahami dirimu, ditulis untuk mengembalikan jiwa yang lama kamu abaikan.”" 
            />
        </div>
        <div class="col">
            <x-card 
                img="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/picture_meta/2023/4/10/hwwjhrajpbdc4ctutxpzxa.jpg" 
                judul="Negeri Para Bedebah" 
                text="Jika biasanya kita selalu melihat kisah romantis, kali ini Tere Liye mengajak kita masuk ke dalam dunia baru yang lebih luas: politik, ekonomi, hingga hukum." 
            />
        </div>
    </div>
        <hr class="w-50 mx-auto mb-4">
        <div id="liveAlertPlaceholder"></div>
        <button type="button" class="btn btn-primary px-4 py-2 fw-bold shadow-sm" id="liveAlertBtn">
            🔔 Tampilkan Notifikasi
        </button>
        <x-alert message="Produk terbaru telah diperbarui!" />
    </div>
</x-layout>
