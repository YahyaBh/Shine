<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PetDash;
use App\Models\pets;
use Illuminate\Support\Facades\Route;


Route::get('/', [PetDash::class, 'index_home'])->name('home');


Route::middleware('admin')->group(function () {
    Route::get('/dashboard', [PetDash::class, 'index'])->name('dashboard');
    Route::post('/dashboard', [PetDash::class, 'add_new_pet'])->name('AddPet');
    Route::post('/update_pet/{id}', [PetDash::class, 'update_pet'])->name('UpdatePet');
    Route::post('/delete_pet/{id}', [PetDash::class, 'delete_pet'])->name('DeletePet');
});



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/sell_register', [PetDash::class, 'store_to_cart'])->name('seller_register');

    Route::get('pets', [PetDash::class, 'index'])->name('pets');
    Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
    Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
    Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
    Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
    Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

    Route::get('/contact', function () {
        return view('dashboard');
    })->name('contact');
});
