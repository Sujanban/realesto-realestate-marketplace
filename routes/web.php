<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BuyController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\PolicyController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\RentController;
use App\Http\Controllers\Frontend\SellController;
use App\Http\Controllers\Frontend\SignupController;
use App\Http\Controllers\Frontend\TermsController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/buy', [BuyController::class, 'index']);
Route::get('/rent', [RentController::class, 'index']);
Route::get('/sell', [SellController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
// Route::get('/signup', [SignupController::class, 'index']);
// Route::get('/login', [LoginController::class, 'index']);
Route::get('/policy', [PolicyController::class, 'index']);
Route::get('/terms', [TermsController::class, 'index']);
Route::get('/product', [ProductController::class, 'index']);




// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route::group(['middleware' => 'auth'], function () {
//     Route::resource('property', \App\Http\Controllers\PropertyController::class);

//     Route::resource('users', \App\Http\Controllers\UsersController::class);
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/property', function () 
    {
        return view('property');
    })->name('property');
    Route::get('/property', function () 
    {
        return view('property');
    })->name('property');
    Route::get('/property', function () 
    {
        return view('property');
    })->name('property');
});