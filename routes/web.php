<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|   ,'middleware' => 'checkClient'
*/
Route::group(['namespace' => 'Client','middleware' => 'checkClient'],function(){
    Route::get('/','FrontendController@getHome');
    Route::get('detail/{id}/{slug}.html','FrontendController@getDetail');
    Route::post('detail/{id}/{slug}.html','FrontendController@postCom');
    Route::get('danhmuc/{id}/{slug}.html','FrontendController@getDanhmuc');
    Route::get('search','FrontendController@getSearch');
    Route::group(['prefix'=>'giohang'],function(){
        # code...
        Route::get('them/{id}','CartController@addCart');
        Route::get('show','CartController@showCart');
        Route::post('show','CartController@datHang');
        Route::get('xoa/{id}','CartController@deleteCart');
        Route::get('update','CartController@updateCart');
    });
});

Route::group(['prefix' => 'login','middleware' => 'CheckLogedIn'], function() {
    Route::get('/', 'LoginController@getLogin');
    Route::post('/', 'LoginController@postLogin');
    Route::post('dangki', 'LoginController@postDangki');
    Route::get('dangki', 'LoginController@getDangki');
});

Route::get('logout','LoginController@getLogout');

Route::group(['namespace' => 'Admin'], function() {
    Route::group(['prefix' => 'admin','middleware' => ['CheckLogedOut','checkAdmin']], function() {
      	Route::get('home','HomeController@getHome');
    	Route::group(['prefix' => 'danhmuc'], function() {
    	    Route::get('/','DanhMucController@getDanhmuc');
            Route::post('/','DanhMucController@postDanhmuc');

    	    Route::get('edit/{id}','DanhMucController@getEditDanhmuc');
            Route::post('edit/{id}','DanhMucController@postEditDanhmuc');

    	    Route::get('delete/{id}','DanhMucController@getDeleteDanhmuc');
    	});

        Route::group(['prefix' => 'sanpham'], function() {
            Route::get('/','SanPhamController@getSanPham');

            Route::get('add','SanPhamController@getAddSanPham');
            Route::post('add','SanPhamController@postAddSanPham');

            Route::get('edit/{id}','SanPhamController@getEditSanPham');
            Route::post('edit/{id}','SanPhamController@postEditSanPham');

            Route::get('delete/{id}','SanPhamController@getDeleteSanPham');
        });

        Route::group(['prefix' => 'user'], function() {
            Route::get('/','UserController@getUser');
            Route::post('/','UserController@postUser');

            Route::get('edit/{id}','UserController@getEditUser');
            Route::post('edit/{id}','UserController@postEditUser');

            Route::get('delete/{id}','UserController@getDeleteUser');
        });
    });
});
