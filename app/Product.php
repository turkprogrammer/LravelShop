<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //protected $table = 'products'; //явное указание таблицы модели lifehack !
    public function images(){
        return $this->hasMany('App\ProductImage');
    }
}
