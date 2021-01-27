<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WidgetController;

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

Auth::routes();

/*===============Delivery Boy start here=====================*/
Route::get('/delivery/boy/add', 'App\Http\Controllers\deliverBoyController@index')->name('show_deliveryBoy_add_table');
Route::post('/delivery/boy/save', 'App\Http\Controllers\deliverBoyController@save')->name('delivery_save');
Route::get('/delivery/boy/manage', 'App\Http\Controllers\deliverBoyController@manage')->name('delivery_boy_manage');
Route::get('/delivery/boy/delete{delivery_boy_id}', 'App\Http\Controllers\deliverBoyController@active')->name('delivery_boy_active');
Route::get('/delivery/boy/inactive{delivery_boy_id}', 'App\Http\Controllers\deliverBoyController@inactive')->name('delivery_boy_inactive');
Route::get('/delivery/boy/active{delivery_boy_id}', 'App\Http\Controllers\deliverBoyController@delete')->name('delivery_boy_delete');
Route::post('/delivery/boy/update', 'App\Http\Controllers\deliverBoyController@update')->name('delivery_boy_update');

/*===============Delivery Boy end here=====================*/

/*===============Dish start here=====================*/
Route::get('/dish/add','App\Http\Controllers\DishController@index')->name('show_dish_table');
Route::post('/dish/save','App\Http\Controllers\DishController@save_dish')->name('save_dish_data');
Route::get('/dish/manage','App\Http\Controllers\DishController@manage_dish')->name('manage_dish_table');
Route::get('/dish/inactive/{dish_id}','App\Http\Controllers\DishController@inactive')->name('dish_inactive');
Route::get('/dish/active/{dish_id}','App\Http\Controllers\DishController@active')->name('dish_active');
Route::get('/dish/delete/{dish_id}','App\Http\Controllers\DishController@dish_delete')->name('dish_delete');
Route::post('/dish/update', 'App\Http\Controllers\DishController@update')->name('dish_update');

/*===============Dish end here=====================*/

/*===============User start here=====================*/
Route::get('/user/add','App\Http\Controllers\UserContoller@index')->name('show_user_add_table');
Route::post('/user/save','App\Http\Controllers\UserContoller@save_user')->name('save_user_data');
Route::get('/user/manage','App\Http\Controllers\UserContoller@manage_user')->name('manage_user_table');
Route::get('/user/delete/{id}','App\Http\Controllers\UserContoller@user_delete')->name('user_delete');
Route::post('/user/update', 'App\Http\Controllers\UserContoller@update')->name('user_update');
/*===============User end here=====================*/

Route::group(['middleware'=>['auth','admin']], function(){
    Route::get('/dashboard', [WidgetController::class, 'displayRecordusers']);

});
/*===============BackEnd end here=====================*/

/*===============FrontEnd start here=====================*/
Route::get('/display', [WidgetController::class, 'displayRecord']);
Route::get('/order','App\Http\Controllers\FoodOrder@index')->name('order');
Route::get('/backhome','App\Http\Controllers\FoodOrder@backhome')->name('backhome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*===============FrontEnd end here=====================*/



