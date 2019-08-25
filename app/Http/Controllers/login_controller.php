<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login_controller extends Controller
{
    public function __construct()
    {
          $this->middleware('guest');
    }

    public function index(){
        return view('login');
    }
    public function login(){
        if (! auth()->attempt(request(['mail',"password"]))) {
            return back();
        }
        return redirect('/');

    }
}
