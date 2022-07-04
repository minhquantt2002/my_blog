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
    return view('home');
});

Route::get('/bai-viet-hay', function () {
   return view('good-essay');
});

Route::get('/ban-khoa-hoc-dey', function () {
   return view('sell-lesson');
});

Route::get('/video', function () {
   return view('video');
});

Route::get('/gioi-thieu', function () {
   return view('author');
});

Route::get('/admin', function () {
   return view('admin.dashboard');
});
