<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products(){
        return view('products');
    }
    public function show(){
        $data['products'] = Product::all();
        return view('products.show',$data);
    }
}
