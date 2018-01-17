<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function show_single($id){
        $data['orders'] = Order::find($id);
        return view('orders.show_single',$data);
    }
    public function show(){
        $data['orders'] = Order::all();
        return view('orders.show')->with($data);
    }
}
