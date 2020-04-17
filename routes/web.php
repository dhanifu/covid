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

Auth::routes();


Route::get('/', 'HomeController@index')->name('home');
Route::get('/result', 'HomeController@notFound');
Route::post('/input', 'DeteksiController@store')->name('store');
Route::get('/result/{uniqid}', 'HomeController@result')->name('result');


// // ADMIN
// Route::prefix('admin')->middleware('auth')->name('admin')->group(function(){
//     Route::get('/',  'DeteksiController@dashboard');

//     Route::get('/hasil-test-masyarakat', 'DeteksiController@index')->name('.hasil');
// });
