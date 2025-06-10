<?php
use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerAuthController;


Route::get('/', [HomePageController::class, 'index'])->name('home');

Route::get('products', [HomePageController::class, 'products']);

Route::get('product/{slug}', [HomePageController::class, 'product']);

Route::get('categories', [HomePageController::class, 'categories']);

Route::get('category/{slug}', [HomePageController::class, 'category']);

Route::get('cart', [HomePageController::class, 'cart']);

Route::get('checkout', [HomePageController::class, 'checkout']);

Route::group(['prefix' => 'customer'], function () {
   Route::controller(CustomerAuthController::class)->group(function () {
       Route::group(['middleware'=>'check_customer_login'], function(){
      //tampilkan halaman login
      Route::get('login', 'login')->name('customer.login');
      //aksi login
      Route::post('login', 'store_login')->name('customer.store_login');
      //tampilkan halaman register
      Route::get('register', 'register')->name('customer.register');
      //aksi register
      Route::post('register', 'store_register')->name('customer.store_register');
       });
       
      //aksi logout
      Route::post('logout', 'logout')->name('customer.logout');
   });
});


Route::group(['prefix' => 'costumer'], function () {

   // tampilkan halaman login dan register
   Route::get('login', [HomepageController::class, 'login']);
   Route::get('register', [HomepageController::class, 'login']);
});

Route::group(['prefix' => 'dashboard','middleware'=>['auth', 'verified']], function () {
   Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

   Route::resource('categories', ProductCategoryController::class);
   Route::resource('product', ProductController::class);
});

Route::view('dashboard', 'dashboard')
   ->middleware(['auth', 'verified'])
   ->name('dashboard');
Route::middleware(['auth'])->group(function () {
   Route::redirect('settings', 'settings/profile');
   Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
   Volt::route('settings/password', 'settings.password')->name('settings.password');
   Volt::route(
      'settings/appearance',
      'settings.appearance'
   )->name('settings.appearance');
});
require __DIR__ . '/auth.php';