<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request,
        [
            'handel' => 'required|max:255',
            'password' =>'required|confirmed',

        ]);
       
        User::create([
            'handel' => $request->handel,
            'password'=> Hash::make($request->password),
            'admin'=>false,
            
        ]);
        auth()->attempt($request->only('handel','password')); //sign in user
        return redirect()->route('/admin');
    }
}
