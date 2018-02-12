<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{

    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        $this->validate(request(),[
            'title' => 'required|min:4|unique:products,title',
            'alias' => 'required|min:4|max:40|unique:products,alias',
            'price' => 'required|min:1|max:10',
            'description' => 'min:10|max:500',
            'category_id' => 'required'
        ]);
        Product::create(request(['title','alias','price','description','category_id']));
        return redirect('/admin/main');
    }

    public function edit(Product $product){
        return view('products.edit',compact('product'));
    }

    public function update(Product $product){
        $this->validate(request(),[
            'title' => 'required|min:4|unique:products,title,' . $product->id,
            'alias' => 'required|min:2|max:20|unique:products,alias,' . $product->id,
            'price' => 'required|min:1|max:50',
            'description' => 'min:10|max:200',
            'category_id' => 'required'
        ]);
        $product->update(request(['title','alias','price','description','category_id']));
        return redirect('/admin/main');
    }

    public function delete(Product $product){
        return view('products.delete',compact('product'));
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect('/admin/main');
    }
}
