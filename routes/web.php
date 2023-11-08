<?php

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

Route::get('/', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/detailmenu', function () {
    return view('detailmenu');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/loginadmin', function () {
    return view('admin/loginadmin');
});

Route::get('/orders', function () {
    return view('admin/orders');
});

Route::get('/editprofile', function () {
    return view('editprofile');
});
