<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";
    protected $primaryKey = "category_id";

    public function products(){
    	return $this->hasMany('App\Products', 'category_id', 'category_id');
    }
}
