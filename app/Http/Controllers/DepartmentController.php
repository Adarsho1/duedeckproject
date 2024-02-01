<?php

namespace App\Http\Controllers;
use App\Models\Departments;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function department(){
        if(!Session()->has('loginId')){
            return redirect('login')->with('fail','you Have To Login First');
        } 
        $department= Departments::all();
        return view('department', compact('department'));        
    
}

public function create(Request $request){
    // Validation rules
    $rules = [
        'name' => 'required|string|max:255',
        'passport' => 'nullable|mimes:pdf,jpeg,png|max:100', // Example validation rules
        // Add more validation rules as needed
    ];
    $validatedData = $request->validate($rules);

    // If the validation passes, create the department
    $department = ['name' => $validatedData['name']];
    $department = ['Passport' => $validatedData['Passport']];
                       
    Departments::create($department);

    return redirect('/department');
}


public function update(Request $request){
    $department= ['ename' => $request->input('ename'),
    'department'=> $request->input('department')];
    departments::update($department);

    return redirect('/department');
}
public function delete($id){
    $departments=Departments::find($id)->delete();
    return redirect('/department');

    

   
}
}
