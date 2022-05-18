<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'handel' =>'required',
            'password' =>'required'
        ]);
       
        if(!auth()->attempt($request->only('handel','password'),$request->remember))
        {
            return back()->with('status','invalid login details');
        } 
            return redirect()->route('index');
    }
}
