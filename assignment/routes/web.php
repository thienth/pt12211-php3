<?php
use Illuminate\Http\Request;
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




Route::get('posts', function(){
	// $listPost = App\Post::all();
	$listPost = App\Post::paginate(10);
	return view('post-list', compact('listPost'));	
});

Route::get('add-cate', function(){
	$model = new App\Category;
	$cates = App\Category::all();
	return view('cate.form', compact('model', 'cates'));
})->name('cate.add');


Route::get('edit-cate/{id}', function($id){
	$model = App\Category::find($id);
	$cates = App\Category::all();
	return view('cate.form', compact('model', 'cates'));
})->name('cate.add');

Route::post('cate-save', function(Request $request) {
   	if($request->id == null){
   		$model = new App\Category();
   	}else{
   		$model = App\Category::find($request->id);
   	}
   	$model->name = $request->name;
   	$model->parent_id = $request->parent_id;
   	$model->save();
   	dd(App\Category::all());
})->name('cate.save');



