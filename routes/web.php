<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SignupController;
use App\Models\Product;
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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/signup', [SignupController::class, 'index'])->middleware('guest');
Route::post('/signup', [SignupController::class, 'store']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/menu/categories/{category}', [CategoryController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/menu', [MenuController::class, 'index']);
Route::get('/menu/detailmenu/{product}', [MenuController::class, 'show'])->middleware('auth');

Route::get('/profile', function () {
    return view('profile');
});


Route::get('/admin/orders', function () {
    return view('admin/orders');
});

Route::resource('/admin/menu', ProductController::class);

Route::get('/editprofile', [EditProfileController::class, 'index']);
Route::post('/editprofile', [EditProfileController::class, 'updateProfile']);

Route::get('/carts', function () {
    return view('carts');
});

Route::get('/selectaddress', function () {
    return view('selectaddress');
});
