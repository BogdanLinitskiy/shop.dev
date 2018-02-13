<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function show(Order $order){
        return view('orders.show',compact('order'));
    }

    public function create()
    {
        $cart = Cart::getCartArray();
        if(count($cart)<1){
            return redirect('/');
        }
        $products = Cart::getCartProducts($cart);
        return view('orders.create_user_order',compact('products','cart'));
    }

    public function store()
    {
        $cart = Cart::getCartArray();
        if(count($cart)<1){
            return redirect('/products');
        }

        $this->validate(request(),[
            'customer_name' => 'required|min:4',
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        $order = Order::create(request(['customer_name','email','phone','feedback']));

        foreach ($cart as $productID => $productAr){
            $order->products()->attach($productID,['amount' => $productAr['amount']]);
        }

        return redirect('/')->withCookie('cart',json_encode([]));
    }
}
