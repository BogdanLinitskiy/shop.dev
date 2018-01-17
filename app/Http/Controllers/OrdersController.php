<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function orders(){
        return view('orders');
    }
    public function show(){
        $data['orders'] = Order::all();
        return view('orders.show')->with($data);
    }
}
