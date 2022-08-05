<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('refresh','AuthController@refresh');
    
	Route::get('lichtrinhxe','AuthController@lichtrinhxe');
    
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');   
        Route::post('chithu/idlichtrinh={id}','AuthController@getChithu');
        Route::get('lichtrinh/idxe={id}','AuthController@getLichtrinh');
        Route::post('addChithu','AuthController@addChithu');
        Route::post('addlichtrinh','AuthController@addlichtrinh');
        Route::get('tongthunhap/idlichtrinh={id}','AuthController@tongthunhap');
        Route::get('tongchitieu/idlichtrinh={id}','AuthController@tongchitieu');
        Route::get('danhsachve/idlichtrinh={id}','AuthController@danhsachve');
        Route::post('addKhachhang','AuthController@addKhachhang');
        Route::get('danhsachhanghoa/idlichtrinh={id}','AuthController@danhsachhanghoa');
        Route::post('addHanghoa','AuthController@addHanghoa');
     
    });
});	


