<?php

use App\Http\Controllers\arrayController;
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

//Route landing page
Route::get('/', function () {
    return view('landingPage');
});

//Route about us page
Route::get('/about', function () {
    return view('about');
});

//Route cotact us page
Route::get('/contact',function () {
    return view('contact');
});

Route::get('/product',function () {
    return view('product');
});

Route::get('/cart',function () {
    return view('cart');
});

Route::get('/blog',function () {
    return view('blog');
});

Route::get('/productDes',function () {
    return view('productDes');
});


Route::get('array', [arrayController::class, 'show']);
