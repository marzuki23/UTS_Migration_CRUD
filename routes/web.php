<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "<h1 style='text-align: center; font-size: 3rem; margin-top: 20%;'>INI ADALAH HALAMAN UTAMA WEBSITE E-COMMERCE (TOKOPEDIA)</h1>";
});

Route::get('/p', function () {
    return "<h1 style='text-align: center; font-size: 3rem; margin-top: 20%;'>INI ADALAH HALAMAN SEMUA KATEGORI</h1>";
});

Route::get('/p/elektronik', function () {
    return "<h1 style='text-align: center; font-size: 3rem; margin-top: 20%;'>INI ADALAH HALAMAN KATEGORI BARANG ELEKTRONIK</h1>";
});

Route::get('/p/fashion-pria', function () {
    return "<h1 style='text-align: center; font-size: 3rem; margin-top: 20%;'>INI ADALAH HALAMAN KATEGORI FASHION PRIA</h1>";
});

Route::get('/p/fashion-wanita', function () {
    return "<h1 style='text-align: center; font-size: 3rem; margin-top: 20%;'>INI ADALAH HALAMAN KATEGORI FASHION WANITA</h1>";
});

Route::get('/p/kesehatan', function () {
    return "<h1 style='text-align: center; font-size: 3rem; margin-top: 20%;'>INI ADALAH HALAMAN KATEGORI KESEHATAN</h1>";
});

Route::get('/product', function () {
    return "<h1 style='text-align: center; font-size: 3rem; margin-top: 20%;'>INI ADALAH HALAMAN DETAIL PRODUK</h1>";
});

Route::get('/shop', function () {
    return "<h1 style='text-align: center; font-size: 3rem; margin-top: 20%;'>INI ADALAH HALAMAN TOKO PENJUAL</h1>";
});

Route::get('/account', function () {
    return "<h1 style='text-align: center; font-size: 3rem; margin-top: 20%;'>INI ADALAH HALAMAN AKUN</h1>";
});

Route::get('/account/login', function () {
    return "<h1 style='text-align: center; font-size: 3rem; margin-top: 20%;'>INI ADALAH HALAMAN LOGIN</h1>";
});

Route::get('/account/register', function () {
    return "<h1 style='text-align: center; font-size: 3rem; margin-top: 20%;'>INI ADALAH HALAMAN REGISTRASI AKUN</h1>";
});

Route::get('/account/settings', function () {
    return "<h1 style='text-align: center; font-size: 3rem; margin-top: 20%;'>INI ADALAH HALAMAN PENGATURAN AKUN</h1>";
});

Route::get('/cart', function () {
    return "<h1 style='text-align: center; font-size: 3rem; margin-top: 20%;'>INI ADALAH HALAMAN KERANJANG BELANJA</h1>";
});

Route::get('/checkout', function () {
    return "<h1 style='text-align: center; font-size: 3rem; margin-top: 20%;'>INI ADALAH HALAMAN CHECKOUT</h1>";
});

Route::get('/order', function () {
    return "<h1 style='text-align: center; font-size: 3rem; margin-top: 20%;'>INI ADALAH HALAMAN DAFTAR PESANAN PENGGUNA</h1>";
});

Route::get('/payment', function () {
    return "<h1 style='text-align: center; font-size: 3rem; margin-top: 20%;'>INI ADALAH HALAMAN PEMBAYARAN</h1>";
});

Route::get('/promo', function () {
    return "<h1 style='text-align: center; font-size: 3rem; margin-top: 20%;'>INI ADALAH HALAMAN PROMO</h1>";
});

Route::get('/flash-sale', function () {
    return "<h1 style='text-align: center; font-size: 3rem; margin-top: 20%;'>INI ADALAH HALAMAN FLASH SALE</h1>";
});

Route::get('/cashback', function () {
    return "<h1 style='text-align: center; font-size: 3rem; margin-top: 20%;'>INI ADALAH HALAMAN CASHBACK</h1>";
});

Route::get('/help', function () {
    return "<h1 style='text-align: center; font-size: 3rem; margin-top: 20%;'>INI ADALAH HALAMAN PUSAT BANTUAN</h1>";
});

Route::get('/contact', function () {
    return "<h1 style='text-align: center; font-size: 3rem; margin-top: 20%;'>INI ADALAH HALAMAN KONTAK TOKOPEDIA</h1>";
});

require __DIR__ . '/auth.php';