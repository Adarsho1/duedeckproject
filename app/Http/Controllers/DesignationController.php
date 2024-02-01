<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignationController extends Controller
{
    
    public function designation(){
        if(!Session()->has('loginId')){
            return redirect('login')->with('fail','you Have To Login First');
        }
        $designations= Designation::all();
        return view('designation', compact('designation'));        
    
}

public function create(Request $request){
    // Validation rules
    $rules = [
        'name' => 'required|string|max:255', // Example validation rules
        // Add more validation rules as needed
    ];
    $validatedData = $request->validate($rules);

    // If the validation passes, create the department
    $designations = ['name' => $validatedData['name']];
    Designations::create($designations);

    return redirect('/designation');
}


public function update(Request $request){
    $designations= ['name' => $request->input('name'),
    'designation'=> $request->input('designation')];
    Designations::update($designations);

    return redirect('/designation');
}
public function delete($id){
    $designations=Designations::find($id)->delete();
    return redirect('/designation');  

   
}

}
