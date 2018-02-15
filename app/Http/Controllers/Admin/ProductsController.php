<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Product;
use App\Thumbnail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('Admin')->except('show');
    }

    public function index()
    {
        $products = Product::all();
        return view('admin.index_pages.products',compact('products'));
    }

    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    public function create(Category $category)
    {
        return view('products.create',compact('category'));
    }

    public function store(Category $category)
    {
        $this->validate(request(),[
            'title' => 'required|min:4|unique:products,title',
            'alias' => 'required|min:4|unique:products,alias',
            'price' => 'required|min:1|max:10',
            'description' => 'min:10|max:500',
        ]);

        $product = Product::create(
            [
            'title' => request('title'),
            'alias' => request('alias'),
            'price' => request('price'),
            'description' => request('description'),
            'category_id' => $category->id
            ]);

        if(count(request()->files->get('thumbnail'))){
            foreach (request()->files->get('thumbnail') as $file){
                $file = $file->move(public_path().'/uploads/products', time().'_'.$file->getClientOriginalName());

                $thumbnail = Thumbnail::create([
                    'name' => basename($file->getRealPath()),
                    'size' => basename($file->getSize())
                ]);

                $product->thumbnails()->attach($thumbnail->id);
            }
        }

        return redirect('/admin');
    }

    public function edit(Product $product,Category $category){
        return view('products.edit',compact('product','category'));
    }

    public function update(Product $product,Category $category){
        $this->validate(request(),[
            'title' => 'required|min:4|unique:products,title,' . $product->id,
            'alias' => 'required|min:2|unique:products,alias,' . $product->id,
            'price' => 'required|min:1|max:10',
            'description' => 'min:10|max:200',
        ]);

        $product->update([
            'title' => request('title'),
            'alias' => request('alias'),
            'price' => request('price'),
            'description' => request('description'),
            'category_id' => $product->category_id
        ]);

        if(count(request()->files->get('thumbnail'))){
            foreach (request()->files->get('thumbnail') as $file){
                $file = $file->move(public_path().'/uploads/products', time().'_'.$file->getClientOriginalName());

                $thumbnail = Thumbnail::create([
                    'name' => basename($file->getRealPath()),
                    'size' => basename($file->getSize())
                ]);

                $product->thumbnails()->attach($thumbnail->id);
            }
        }
        return redirect('/admin');
    }

    public function delete(Product $product){
        return view('products.delete',compact('product'));
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect('/admin');
    }
}
