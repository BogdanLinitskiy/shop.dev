<?php

namespace App\Http\Controllers;

use App\Order;
use App\Page;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $data['pages'] = Page::all();
        $data['orders'] = Order::all();
        $data['products'] = Product::all();
        return view('main',$data);
    }
}
