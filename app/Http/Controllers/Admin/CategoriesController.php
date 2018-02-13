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

}
