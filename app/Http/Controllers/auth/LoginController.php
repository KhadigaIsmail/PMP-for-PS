<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function index()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'email' =>'required',
            'password' =>'required'
        ]);
       
        if(!auth()->attempt($request->only('email','password'),$request->remember))
        {
            return back()->with('status','invalid login details');
        } 
            return redirect()->route('index');
    }
}
