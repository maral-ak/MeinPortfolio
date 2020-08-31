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
->name('products.singleProduct')
|
*/

Route::get('/', function () {
    return view('layout', [
        'products'=> App\Product::all()
    ]);
});
/* Route::get('/', function () {
    return view('singleProduct');
}); */
Route::get('/products/{product}', 'ProductController@showSingleProduct');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

Route::get('/admin/login', 'AdminController@showLoginForm')->name('admin.view_login');
Route::post('/admin/login', 'AdminController@login')->name('admin.login');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard')->middleware('auth:admin');
