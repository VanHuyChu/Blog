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
Route::get('login', 'Admin\LoginController@index');
Route::group(['prefix' => 'admin','namespace'=>'Admin'], function () {
    Route::get('', 'AdminController@index')->name('dashboard.get');
    Route::group(['prefix' => ''], function () {
        Route::get('danh-muc.html', 'CategoryController@index')->name('danhmuc.get');
        Route::get('sua-danh-muc', 'CategoryController@edit');
    });
    Route::group(['prefix' => ''], function () {
        Route::get('hoa-don.html', 'OrderController@orderList')->name('hoadon.get');
        Route::get('chi-tiet-hoa-don.html', 'OrderController@orderDetail');
        Route::get('hoa-don-hoan-thanh.html', 'OrderController@ordeProcessed');
    });
    Route::group(['prefix' => ''], function () {
        Route::get('danh-sach-san-pham.html', 'ProductController@List')->name('sanpham.get');
        Route::get('chinh-sua-san-pham', 'ProductController@Edit');
        Route::get('them-san-pham', 'ProductController@Add');
    });
    Route::group(['prefix' => ''], function () {
        Route::get('danh-sach-quan-tri.html', 'UserController@List')->name('quantri.get');
        Route::get('chinh-sua-quan-tri', 'UserController@Edit');
        Route::get('them-quan-tri', 'UserController@Add');
    });
});

