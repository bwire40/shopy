<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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
    return view('pages.home');
});

Route::get('/home', [GuestController::class, 'index'])->name('home');
Route::get('/about', [GuestController::class, 'about'])->name('about');
Route::get('/contact', [GuestController::class, 'contact'])->name('contact');


// products
Route::resource('products', ProductController::class)
    ->only(['index', 'store', 'create'])
    ->middleware(['auth', 'admin', 'verified']);

// Route::get('/products/create', [ProductController::class, 'create'])->name('create');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';