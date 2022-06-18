<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ListingController::class, 'home'])->name('home');

Route::prefix('listings')->group(function () {
    Route::get('/', [ListingController::class, 'index'])->name('listings.index');
    Route::middleware('auth')->group(function() {
        Route::get('/manage', [ListingController::class, 'manage'])->name('listings.manage');
        Route::get('/create', [ListingController::class, 'create'])->name('listings.create');
        Route::post('/', [ListingController::class, 'store'])->name('listings.store');
        Route::get('/{listing}', [ListingController::class, 'show'])->name('listings.show');
        Route::get('/{listing}/edit', [ListingController::class, 'edit'])->name('listings.edit');
        Route::put('/{listing}', [ListingController::class, 'update'])->name('listings.update');
        Route::delete('/{listing}', [ListingController::class, 'destroy'])->name('listings.destroy');
    });
});

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth')->name('users.logout');
Route::middleware('guest')->group(function() {
    Route::get('/register', [UserController::class, 'create'])->name('users.create');
    Route::get('/login', [UserController::class, 'login'])->name('users.login');
    Route::post('/authenticate', [UserController::class, 'authenticate'])->name('users.authenticate');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
});