<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function show(Page $page){
        return view('pages.show',compact('page'));
    }

    public function create(Page $page){
        return view('pages.create');
    }

    public function store(Page $page){
        $this->validate(request(),[
            'title' => 'required|min:4|unique:pages,title',
            'alias' => 'required|min:2|max:20|unique:pages,alias',
            'intro' => 'required|min:10|max:50',
            'content' => 'min:10|max:200'
        ]);
        Page::create(request(['title','alias','intro','content']));
        return redirect('/admin/main');
    }

    public function edit(Page $page){
        return view('pages.edit',compact('page'));
    }

    public function update(Page $page){
        $this->validate(request(),[
            'title' => 'required|min:4|unique:pages,title,' . $page->id,
            'alias' => 'required|min:2|max:20|unique:pages,alias,' . $page->id,
            'intro' => 'required|min:10|max:50',
            'content' => 'min:10|max:200'
        ]);
        $page->update(request(['title','alias','intro','content']));
        return redirect('/admin/main');
    }

    public function delete(Page $page){
        return view('pages.delete',compact('page'));
    }

    public function destroy(Page $page){
        $page->delete();
        return redirect('/admin/main');
    }
}
