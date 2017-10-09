<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
class CategoryController extends Controller
{
    public function remove($id){
    	$model = Category::find($id);
    	$model->delete();
    	return redirect(route('dashboard'));
    }
}
