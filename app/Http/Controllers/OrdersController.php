<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function show(Order $order){
        return view('orders.show',compact('order'));
    }
}
