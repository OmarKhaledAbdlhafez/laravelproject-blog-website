<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class register_controller extends Controller
{
    function index(){
        return view('register');
    }
    function create(){
        $this->validate(request(),[
            "name"=>"required",
            "email=>'required|email",
            "password"=>"required|confirmed"
        ]);
        $user = new User();
        $user->name=request("name");
        $user->email=request("mail");
        $user->password=request("password");
        $user->save();
        auth()->login($user);
        return redirect("/");
    }

}
