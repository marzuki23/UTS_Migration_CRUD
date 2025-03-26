<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = "Homapage-Gramedia";
    return view('web.homepage',['title'=>$title]);
});

Route::get('products', function(){
    $title = "products";
    return view('web.products',['title'=>$title]);
});

Route::get('product/{slug}', function($slug){
    $title = "products $slug";
    return view('web.single_product',['title' => $title, 'slug' => $slug]);
});

Route::get('categories', function(){
    $title = "categories";
    return view('web.categories',['title'=>$title]);
});

Route::get('category/{slug}', function ($slug) {
    $title = "Category $slug";
    return view('web.single_category', ['title' => $title, 'slug' => $slug]); // Tambahkan 'slug'
});

Route::get('cart', function(){
    $title = "cart";
    return view('web.cart',['title'=>$title]);
});

Route::get('checkout', function(){
    $title = "checkout";
    return view('web.checkout',['title'=>$title]);
});

require __DIR__ . '/auth.php';