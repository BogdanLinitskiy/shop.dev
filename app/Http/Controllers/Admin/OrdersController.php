<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    public function show(Order $order){
        return view('orders.show',compact('order'));
    }

    public function create(){
        return view('orders.create');
    }

    public function store(){
        $this->validate(request(),[
            'customer_name' => 'required|min:4',
            'email' => 'required|min:4|max:40|unique:orders,email',
            'phone' => 'required|min:8|max:20',
            'feedback' => 'min:5|max:200'
        ]);
        Order::create(request(['customer_name','email','phone','feedback']));
        return redirect('/admin/main');
    }

    public function edit(Order $order){
        return view('orders.edit',compact('order'));
    }

    public function update(Order $order){
        $this->validate(request(),[
            'customer_name' => 'required|min:4',
            'email' => 'required|min:4|max:40|unique:orders,email,' . $order->id,
            'phone' => 'required|min:8|max:20',
            'feedback' => 'min:5|max:200'
        ]);
        $order->update(request(['customer_name','email','phone','feedback']));
        return redirect('/admin/main');
    }

    public function delete(Order $order){
        return view('orders.delete',compact('order'));
    }

    public function destroy(Order $order){
        $order->delete();
        return redirect('/admin/main');
    }

}
