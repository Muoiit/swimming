<?php

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
    return view('welcome');
});



Route::resource('/admin/owners','AdminOwnersController');
Route::resource('/admin/sliders','AdminSlidersController');
Route::resource('/admin/centers','AdminCenterController');
Route::resource('/admin/galleries','AdminGallerisController');
