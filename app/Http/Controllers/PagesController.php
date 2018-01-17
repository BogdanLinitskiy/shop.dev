<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function show_single($id){
        $data['pages'] = Page::find($id);
        return view('pages.show_single',$data);
    }
    public function show(){
        $data['pages'] = Page::all();
        return view('pages.show',$data);
    }
}
