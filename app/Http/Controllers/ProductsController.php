<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show_single($id){
        $data['products'] = Product::find($id);
        return view('products.show_single',$data);
    }

    public function show(){
        $data['products'] = Product::all();
        return view('products.show',$data);
    }


}
