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
Route::get('customerdetail/calbill','CustomerDetailController@calbill')->name('customerdetail.calbill');
Route::resource('roomdetail','RoomDetailController');
Route::resource('roomtype','RoomTypeController');
Route::resource('viewroomtype', 'VRTController');
Route::resource('customertype', 'CustomerTypeController');
Route::resource('viewcustomertype', 'VCTController');
Route::resource('customerdetail', 'CustomerDetailController');
Route::resource('delcustomerdetail', 'DelCustomerDetailController');
Route::resource('histcustomerdetail', 'HistCustomerDetailController');
Route::resource('delroomdetail','DelRoomDetailController');
Route::resource('histroomdetail','HistRoomDetailController');

Route::get('/', function () {
    return view('index');
});
