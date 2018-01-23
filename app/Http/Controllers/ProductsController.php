<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show(Product $product){
        return view('products.show',compact('product'));
    }

    public function create(Product $product){
        return view('products.create');
    }

    public function store(Product $product){
        $this->validate(request(),[
            'title' => 'required|min:4|unique:products,title',
            'alias' => 'required|min:4|max:40|unique:products,alias',
            'price' => 'required|min:1|max:10',
            'description' => 'min:10|max:500'
        ]);
        Product::create(request(['title','alias','price','description']));
        return redirect('/');
    }

    public function edit(Product $product){
        return view('products.edit',compact('product'));
    }

    public function update(Product $product){
        $this->validate(request(),[
            'title' => 'required|min:4|unique:products,title,' . $product->id,
            'alias' => 'required|min:2|max:20|unique:products,alias,' . $product->id,
            'price' => 'required|min:1|max:50',
            'description' => 'min:10|max:200'
        ]);
        $product->update(request(['title','alias','price','description']));
        return redirect('/');
    }

    public function delete(Product $product){
        return view('products.delete',compact('product'));
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect('/');
    }

}
