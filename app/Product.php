<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //protected $table = 'products'; //явное указание таблицы модели lifehack !
    public function images(){
        return $this->hasMany('App\ProductImage');
    }
    
    public function category(){
        return $this->belongsTo('App\Category', 'category_id');
    }
}

