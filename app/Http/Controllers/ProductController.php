<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    /*
     * 
     */
    public function show($cat, $product_id){
        
        $item = \App\Product::where('id', $product_id)->first();
        //$categories = \App\Category::all();
       
        
        return view('product.show',[
            'item' =>$item
        ]);
    }
    
    public function showCategory($cat_alias){
        
        $cat = \App\Category::where('alias', $cat_alias)->first();
       
        return view('categories.index',[
            'cat'=>$cat
        ]);
    }
}
