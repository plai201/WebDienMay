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

Route::get('/home', function () {
    return view('home');
});

Route::prefix('danh-muc-san-pham')->group(function () {
    Route::get('/',[
        'as' => 'danh-muc-san-pham.trangChu',
        'uses' => 'App\Http\Controllers\DanhMucSanPhamController@trangChu'
    ]);

    Route::get('/them',[
       'as' => 'danh-muc-san-pham.them',
        'uses' => 'App\Http\Controllers\DanhMucSanPhamController@them'
    ]);
});
