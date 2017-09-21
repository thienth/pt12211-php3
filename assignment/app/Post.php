<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table = 'posts';

    public function getCate(){
    	$cate = Category::find($this->cate_id);
    	return $cate;
    }
}
