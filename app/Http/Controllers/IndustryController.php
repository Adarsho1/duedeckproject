<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    

    public function industry(){
        if(!Session()->has('loginId')){
            return redirect('login')->with('fail','you Have To Login First'); }
        $industries= industry::all();
        return view('industry', compact('industry'));        
    
}

public function create(Request $request){
    // Validation rules
    $rules = [
        'name' => 'required|string|max:30', // Example validation rules
        // Add more validation rules as needed
    ];
    $validatedData = $request->validate($rules);

    // If the validation passes, create the department
    $industries = ['name' => $validatedData['name']];
    Industries::create($industries);

    return redirect('/industry');
}

public function Edit($id){

    $industries =Industries ::find($id);
    return view('industry', compact('industry'));

    
}


public function update(Request $request){
    $industries= ['name' => $request->input('name'),
    'industry'=> $request->input('industry')];
    Industries::update($industries);

    return redirect('/industry');
}
public function delete($id){
    $industries=Industry::find($id)->delete();
    return redirect('/industry');

    

   
}
}

