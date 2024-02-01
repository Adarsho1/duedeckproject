<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function Loginuser(Request $request)
    {
        
        $request->validate ([
            'user' => 'required',
            'password' =>'required',
            
        ]);

}
} 