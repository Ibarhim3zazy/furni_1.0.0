<?php

use App\Http\Controllers\FurniController;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Promise\Create;

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

Route::controller(FurniController::class)->group(function () {
   Route::get('about', 'about')->name('about');
   Route::get('contact', 'contact')->name('contact');
   Route::get('services', 'services')->name('services');
});