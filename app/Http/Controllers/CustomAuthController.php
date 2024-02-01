<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function Login()
    {
        return view('auth.login');
    }
    public function Registration()
    {
        return view('auth.Registration');
    }
    public function RegisterUser(Request $request)
    {
           $request->validate ([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
           ]);
           $user = new User();
           $user->name = $request->name;
           $user->email = $request->email;
           $user->password = Hash::make($request->password);
           $res = $user->save();
           if($res){
            return back()->with('success','you have registered sucessfully');
            
           }else{
            return back()->with('fail','Something wrong');
            
           }

    }
    public function loginUser(Request $request){
        $request->validate ([
            'email'=>'required|email',
            'password'=>'required'
           ]);  
           $user = User::where('email','=',$request->email)->first(); 
           if($user){ 
            if(Hash::check($request->password,$user->password)){
               $request->session()->put('loginId',$user->id);
               $request->session()->put('name',$user->name);
               return redirect('');
            } else{
                return back()->with('fail','password not matches');

            }      
           }
           else{
            return back()->with('fail','This email is not registered');
           }
    
    }
    public function dashboard()
    {   
    
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id','=',Session::get('loginId'))->first(); 
           
            return view('dashboard', ['user' => $user]);
 
       // return redirect('/dashboard',compact('data'));
    }
}
public function logout()
{
    
    Session()->forget('loginId');
    return redirect('login')->with('success', 'You have been logged out successfully.');
 }

}
    
    

    


