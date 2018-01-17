<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function pages(){
        return view('pages');
    }
    public function show(){
        $data['pages'] = Page::all();
        return view('pages.show',$data);
    }
}
