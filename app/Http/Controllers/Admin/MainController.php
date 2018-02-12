<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Order;
use App\Page;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('Admin');
    }

    public function index()
    {
        $data['pages'] = Page::all();
        $data['orders'] = Order::all();
        $data['products'] = Product::all();
        $data['categories'] = Category::all();
        return view('admin.main',$data);
    }


}
