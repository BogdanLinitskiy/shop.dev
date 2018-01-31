<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Order;
use App\Page;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index(){
        return view('admin_panel.auth_check');
    }

    public function main(){
        $data['pages'] = Page::all();
        $data['orders'] = Order::all();
        $data['products'] = Product::all();
        $data['categories'] = Category::all();
        return view('admin_panel.main',$data);
    }
}
