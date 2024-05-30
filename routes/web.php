<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::controller(ContactController::class)->prefix('contact')->name('contact.')->group(function () {
    Route::get('/', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::delete('delete/{id}', 'destroy')->name('delete');
    Route::get('edit/{id}', 'edit')->name('edit');
    Route::put('update/{id}', 'update')->name('update');
    Route::get('/displayContacts', 'index')->name('display');
});

Route::controller(AboutController::class)->prefix('about')->name('about.')->group(function () {
    Route::get('/', 'index')->name('view');
});

Route::controller(ServicesController::class)->prefix('services')->name('services.')->group(function () {
    Route::get('/', 'index')->name('view');
});

Route::view('/', 'index')->name('index');
Route::view('/blog', 'blog')->name('blog');
Route::view('/shop', 'shop')->name('shop');
Route::view('/cart', 'cart')->name('cart');
Route::view('/checkout', 'checkout')->name('checkout');
Route::view('/thankyou', 'thankyou')->name('thankyou');