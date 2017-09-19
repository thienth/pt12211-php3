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

Route::get('/', function () {
    return view('welcome');
});
Route::get('thienth', 'HomeController@index');
Route::get('test-param/{batBuoc}', function($batBuoc){
	return $batBuoc;
});
Route::get('test-optional-param/{kBatBuoc?}', function($kBatBuoc = 'tri dep trai'){
	return $kBatBuoc;
});

Route::group(['prefix' => 'quan-tri'], function(){
	Route::get('thanh-vien/{id}', function($id) {
	    return $id;
	})->where(['id' => '[0-9]+']);
	Route::get('san-pham/{id}', function($id) {
	    return $id;
	});
});

Route::get('login', function() {
    return 'login page';
})->name('login');

Route::get('user-age/{age}', function($age){
	return 'ban da la nguoi lon';
})->middleware('check.age.25');










