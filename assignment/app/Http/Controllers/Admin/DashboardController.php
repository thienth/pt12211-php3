<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class DashboardController extends Controller
{
    public function index(){
    	$cates = Category::all();
    	$name = 'Le quang hung';
    	return view('admin.dashboard', 
    					compact('cates', 'name'));
    }
}
