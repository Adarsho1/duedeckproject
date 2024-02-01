<?php

namespace App\Http\Controllers;
use App\Models\Emp;
use App\Models\Dashboards;
use App\Models\Departments;
use App\Models\User;
use Illuminate\Http\Request;
use Session;

class DashboardController extends Controller
{
    public function dashboard()
    
    {
        if(session()->has('loginId')){
            return redirect('login')->with('fail','you Have To Login First');
       }else{
           return view('dashboard'); 
       }
        return view('dashboard'); 
    }
    public function showDashboardForm()
{
    // dd(session()->has('loginId'));
    
    if(session()->has('loginId')) {
        return view('dashboard');
    } else {
        return redirect('login')->with('fail', 'You have to login first.');
    }
}
}
