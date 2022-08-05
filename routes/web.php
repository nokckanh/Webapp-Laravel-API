<?php

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

Route::any('/trangchu',[
	'as' => 'trangchu',
	'uses' => 'FordendController@index'
]);

Route::get('/about-us', [
	'as' =>'aboutus',
	'uses' => 'FordendController@about'
]);
Route::get('/question',[
	'as' => 'question',
	'uses' => 'FordendController@question'
]);
Route::get('/timkiem',[
	'as' => 'timkiem',
	'uses' => 'FordendController@timkiem'
]);
Route::get('/datvexe/{id}',[
	'as' => 'datvexe',
	'uses' => 'FordendController@datvexe'
]);
Route::post('/khachdatve', [
		'as' =>	'khachdatve',
		'uses'=>'FordendController@khachdatve'
	]);

Route::group(['prefix' => 'service'], function() {
	Route::get('',[
	'as' => 'service',
	'uses' => 'FordendController@service'
]);
    Route::get('xekhachlientinh', [
   		'as' => 'trancer',
   		'uses' => 'FordendController@servicetraner'
	]);
	Route::get('vanchuyenhanghoa', [
	   	'as' => 'ware',
		'uses' => 'FordendController@serviceware'
	]);
});
Route::get('/lich-trinh',[
   	'as' => 'lich-trinh',
	'uses' => 'FordendController@lichtrinhxe'
]);
Route::get('/lienhe',[
   	'as' => 'lienhe',
	'uses' => 'FordendController@contact'
]);

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','admin']], function() {
	
	// user

	Route::get('/role-register',[
		'as' =>	'role-register',
		'uses'=>'Admin\DashboardController@register'
	]);
	Route::get('/role-edit/{id}', [
		'as' =>	'role-edit',
		'uses'=>'Admin\DashboardController@registeredit'
	]);
	Route::put('/role-register-update/{id}', [
		'as' =>	'role-register-update',
		'uses'=>'Admin\DashboardController@registerupdate'
	]);
	Route::delete('/role-delete/{id}', [
		'as' =>	'role-delete',
		'uses'=>'Admin\DashboardController@registerdelete'
	]);
	Route::post('/add-acc', [
		'as' =>	'add-acc',
		'uses'=>'Admin\DashboardController@registeradd'
	]);

	//nhà xe
	Route::get('/nhaxe', [
	    'as' =>	'nhaxe',
		'uses'=>'Admin\DashboardController@nhaxe'
 	]);

 	Route::post('/add-nhaxe', [
		'as' =>	'add-nhaxe',
		'uses'=>'Admin\DashboardController@nhaxeadd'
	]);
	
	Route::delete('/delete-nhaxe/{id}', [
		'as' =>	'delete-nhaxe',
		'uses'=>'Admin\DashboardController@nhaxedelete'
	]);

	Route::get('/edit-nhaxe/{id}', [
		'as' =>	'edit-nhaxe',
		'uses'=>'Admin\DashboardController@nhaxeedit'
	]);

	Route::put('/update-nhaxe/{id}', [
		'as' =>	'update-nhaxe',
		'uses'=>'Admin\DashboardController@nhaxeupdate'
	]);

	// xe
	Route::get('/add-xe/{id}', [
		'as' =>	'add-xe',
		'uses'=>'Admin\DashboardController@nhaxeaddxe'
	]);

	Route::put('/update-addxe-nhaxe/{id}', [
		'as' =>	'update-addxe-nhaxe',
		'uses'=>'Admin\DashboardController@nhaxeupdateaddxe'
	]);

	
	Route::get('/xe', [
	    'as' =>	'xe',
		'uses'=>'Admin\DashboardController@xe'
	]);

	Route::delete('/delete-xe/{id}', [
		'as' =>	'delete-xe',
		'uses'=>'Admin\DashboardController@xedelete'
	]);

	Route::get('/tuyen', [
	    'as' =>	'tuyen',
		'uses'=>'Admin\DashboardController@tuyen'
	]);

	Route::get('/add-xe/{id}', [
		'as' =>	'add-xe',
		'uses'=>'Admin\DashboardController@nhaxeaddxe'
	]);

	Route::get('/edit-xe/{id}', [
		'as' =>	'edit-xe',
		'uses'=>'Admin\DashboardController@xeedit'
	]);

	Route::put('/addacc-actor/{id}', [
		'as' =>	'addacc-actor',
		'uses'=>'Admin\DashboardController@xeaddactor'
	]);

	Route::put('/update-xe/{id}', [
		'as' =>	'update-xe',
		'uses'=>'Admin\DashboardController@xeupdate'
	]);

	Route::get('/xe-lichtrinh/{id}', [
		'as' =>	'xe-lichtrinh',
		'uses'=>'Admin\DashboardController@xelichtrinh'
	]);

	Route::put('/update-xe-lichtrinh/{id}', [
		'as' =>	'update-xe-lichtrinh',
		'uses'=>'Admin\DashboardController@xeupdatelichtrinh'
	]);

	// tuyến
	Route::post('/add-tuyen', [
		'as' =>	'add-tuyen',
		'uses'=>'Admin\DashboardController@tuyenadd'
	]);

	Route::delete('/delete-tuyen/{id}', [
		'as' =>	'delete-tuyen',
		'uses'=>'Admin\DashboardController@tuyendelete'
	]);

	//lịch trình

	Route::get('/lichtrinh', [
		'as' =>	'lichtrinh',
		'uses'=>'Admin\DashboardController@lichtrinh'
	]);

	Route::delete('/delete-lichtrinh/{id}', [
		'as' =>	'delete-lichtrinh',
		'uses'=>'Admin\DashboardController@lichtrinhdelete'
	]);

	Route::get('/edit-lichtrinh/{id}', [
		'as' =>	'edit-lichtrinh',
		'uses'=>'Admin\DashboardController@lichtrinhedit'
	]);
	Route::put('/update-lichtrinh/{id}', [
		'as' =>	'update-lichtrinh',
		'uses'=>'Admin\DashboardController@lichtrinhupdate'
	]);

});
Auth::routes();
Route::group(['middleware' => ['auth','employee']], function() {
	
	Route::get('/dashemployee/idxe={id}', [
		'as' =>	'dashemployee',
		'uses'=>'Employee\dbemployeeController@dashemployee'
	]);


    Route::get('/danhsachve/idlichtrinh={id}', [
		'as' =>	'danhsachve',
		'uses'=>'Employee\dbemployeeController@dashemployeedanhsachve'
	]);
    
    // Thêm khách
	Route::post('/add-khachhang', [
		'as' =>	'add-khachhang',
		'uses'=>'Employee\dbemployeeController@khachhangadd'
	]);
	
	Route::get('/updatett/{id}', [
		'as' =>	'updatett',
		'uses'=>'Employee\dbemployeeController@updatett'
	]);
	
	// Vé
	Route::get('/chondsve/idxe={id}', [
		'as' =>	'chondsve',
		'uses'=>'Employee\dbemployeeController@chondsve'
	]);

	Route::get('/danhsachvenhap/idxe={id}', [
		'as' =>	'danhsachvenhap',
		'uses'=>'Employee\dbemployeeController@danhsachvenhap'
	]);

	// Hàng hóa
	Route::get('/chondshang/idxe={id}', [
		'as' =>	'chondshang',
		'uses'=>'Employee\dbemployeeController@chondshang'
	]);


	Route::get('/danhsachhangnhap/idxe={id}', [
		'as' =>	'danhsachhangnhap',
		'uses'=>'Employee\dbemployeeController@danhsachhangnhap'
	]);

	Route::get('/updatehanghoa/{id}', [
		'as' =>	'updatehanghoa',
		'uses'=>'Employee\dbemployeeController@updatehanghoa'
	]);

	Route::post('/add-hanghoa', [
		'as' =>	'add-hanghoa',
		'uses'=>'Employee\dbemployeeController@hanghoaadd'
	]);

});



