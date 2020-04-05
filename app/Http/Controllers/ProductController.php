<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function allProdcts(){
        $products = Product::get();
        
        return view('products.all',[
            'products'=>$products
        ]);
    }

    public function specialProducts(){
        $products = Product::where('price','>',100)->get();
        
        return view('products.specialProducts',[
            'products'=>$products
        ]);
    }
}


//specialProducts