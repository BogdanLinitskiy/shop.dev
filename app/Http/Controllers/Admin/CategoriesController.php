<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public $file;
    public function __construct()
    {
        $this->middleware('Admin')->except('show');
    }

    public function show(Category $category)
    {
        return view('categories.show',compact('category'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store()
    {
        $this->validate(request(),[
            'name' => 'required|min:3|unique:categories,name',
            'alias' => 'required|min:3|unique:categories,alias',
            'logo' => 'required'
        ]);
        Category::create(request()->all());
        return redirect('/admin');
    }

    public function edit(Category $category)
    {
        return view('categories.edit',compact('category'));
    }

    public function update(Category $category)
    {
        $this->validate(request(),[
            'name' => 'required|min:3|unique:categories,name,' . $category->id,
            'alias' => 'required|min:3|unique:categories,alias,' . $category->id,
            'logo' => 'required',
        ]);
        $category->update(request(['name','alias','logo']));
        return redirect('/admin');
    }

    public function delete(Category $category){
        return view('categories.delete',compact('category'));
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect('/admin');
    }

}
