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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('BackEnd.Home.index');
})->middleware(['auth'])->name('BackEnd.Home.index');

require __DIR__.'/auth.php';

/*===============Category start here=====================*/
Route::get('/category/add', 'App\Http\Controllers\categoryController@index')->name('show_cate_table');
Route::post('/category/save', 'App\Http\Controllers\categoryController@save')->name('cate_save');
Route::get('/category/manage', 'App\Http\Controllers\categoryController@manage')->name('manage_cate');
Route::get('/category/active/{category_id}', 'App\Http\Controllers\categoryController@active')->name('category_active');
Route::get('/category/inactive/{category_id}', 'App\Http\Controllers\categoryController@inactive')->name('inactive_cate');
Route::get('/category/delete/{category_id}', 'App\Http\Controllers\categoryController@delete')->name('cate_delete');
Route::post('/category/update', 'App\Http\Controllers\categoryController@update')->name('cate_update');
/*===============Category end here=====================*/
