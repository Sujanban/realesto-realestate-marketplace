<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\PropertyController;
// use App\Http\Controllers\UsersController;

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PropertyController;
use App\Http\Controllers\Backend\UserController;

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
Route::get('/policy', [PolicyController::class, 'index']);
Route::get('/terms', [TermsController::class, 'index']);


Route::get('/buy/product', [ProductController::class, 'index']);
Route::get('/property/{slug}', [PostController::class,'postCategory']);
// Route::get('/rent/product', [ProductController::class, 'index']);

// Route::get('/buy/{{contact}}', [ProductController::class, 'viewPost']);


// Route::get('/', function () {
//     return view('index');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
        // Route::get('/dashboard', function () {
    //         return view('dashboard');
    //     })->name('dashboard');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::get('/property', [PropertyController::class, 'index'])->name('property');
    // Route::get('/user', [UserController::class, 'index'])->name('user');



    Route::get('/post',[PostController::class,'index']);

    Route::get('/create',function(){
    return view('create');
    });
    
    Route::get('/post/create',function(){
        return view('post.create');
        });
    
    
    Route::post('/post',[PostController::class,'store']);
    Route::delete('/post/delete/{id}',[PostController::class,'destroy']);
    Route::get('/post/edit/{id}',[PostController::class,'edit']);
    
    Route::delete('/deleteimage/{id}',[PostController::class,'deleteimage']);
    Route::delete('/deletecover/{id}',[PostController::class,'deletecover']);
    
    Route::put('/update/{id}',[PostController::class,'update']);
    
    





    Route::get('/admin', [HomeController::class, 'logged']);
Route::get('/admin/buy', [BuyController::class, 'logged']);
Route::get('/admin/rent', [RentController::class, 'logged']);
Route::get('/admin/sell', [SellController::class, 'logged']);
Route::get('/admin/about', [AboutController::class, 'logged']);
Route::get('/admin/contact', [ContactController::class, 'logged']);
Route::get('/admin/policy', [PolicyController::class, 'logged']);
Route::get('/admin/terms', [TermsController::class, 'logged']);


Route::get('/admin/buy/product', [ProductController::class, 'logged']);
// Route::get('/rent/product', [ProductController::class, 'logged']);

// Route::get('/buy/{{contact}}', [ProductController::class, 'viewPost']);
Route::get('/admin/property/{slug}', [PostController::class,'loggedPostCategory']);

});




