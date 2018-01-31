<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('admin_panel.main');
    }

    public function store()
    {
        if(!auth()->attempt(request(['email','password']))){
            return back()->withErrors([
                'message' => 'Wrong password or email'
            ]);
        }
        return redirect('/admin_panel/main');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}
