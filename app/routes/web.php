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
Route::resource('roomdetail','RoomDetailController');
Route::resource('roomtype','RoomTypeController');
Route::resource('viewroomtype', 'VRTController');
Route::resource('customertype', 'CustomerTypeController');
Route::resource('viewcustomertype', 'VCTController');

Route::get('/', function () {
    return view('index');
});
