<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/shop/home');
});

use App\Http\Controllers\ShopController;

Route::prefix('/shop')->group(function(){

    Route::get('/home', [
        ShopController::class, 'home']);

    Route::get('/blog', [
        ShopController::class, 'blog']);

    Route::get('/about', [
        ShopController::class, 'about']);

    Route::get('/login', [
        ShopController::class, 'login']);

    Route::get('/register', [
        ShopController::class, 'register']);


    Route::group(['middleware' => ['auth']], function(){

        Route::get('/product', [
            ShopController::class, 'product']);

        Route::get('/contact', [
            ShopController::class, 'contact']);
    
        Route::get('/cart', [
            ShopController::class, 'cart']);

        Route::get('/pdetail', [
            ShopController::class, 'pdetail']);
            
        Route::get('/bdetail', [
            ShopController::class, 'bdetail']);

        Route::get('/checkout', [
            ShopController::class, 'checkout'])->name('produk.checkout');
    
        Route::get('/pay', [
            ShopController::class, 'pay'])->name('pesanan.pay');
    
        Route::get('/produk', [
            ShopController::class, 'produk'])->name('produk.produk');
    
        Route::post('/toko', [
            ShopController::class, 'toko'])->name('produk.toko');
    
        route::get('/{produks}/edit', [
            ShopController::class, 'edit'])->name('produk.edit');
        
        route::delete('/{produks}/destroy', [
            ShopController::class, 'destroy'])->name('produk.destroy');
        
        route::put('/{produks}/update', [
            ShopController::class, 'update'])->name('produk.update');
    
        Route::get('/pesanan', [
            ShopController::class, 'pesanan'])->name('pesanan.pesanan');
    
        Route::post('/store', [
            ShopController::class, 'store'])->name('pesanan.store');
    
        route::get('/{pesanans}/tambah', [
            ShopController::class, 'tambah'])->name('pesanan.tambah');    
        
        route::delete('/{pesanans}/hapus', [
            ShopController::class, 'hapus'])->name('pesanan.hapus');
    
        route::put('/{pesanans}/ubah', [
            ShopController::class, 'ubah'])->name('pesanan.ubah');

    });
    
});


Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
