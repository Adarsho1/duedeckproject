<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Client;
use \App\Models\Emp;
use \App\Models\Industries;


class ClientController extends Controller
{
    public function adarsh($id){
        $client = Client::find($id);  
        $industries = Industries::all();
        return view('adarsh', compact('client','industries'));   
    }

    public function createclient(){
        $industries =Industries ::all();   
        return view('createclient', compact('industries'));   
    }
   
    public function client(){
        if(!Session()->has('loginId')){
            return redirect('login')->with('fail','you Have To Login First');
        }
        $client = Client::all();   
        return view('Client', compact('client'));   
}   
public function submit($id)
{
    $client = Client::find($id);
    $industries = Industry::all();

    return view('client.submit', compact('client', 'industries'));
}

  
//2
public function create(Request $request){
    // Validation rules for the incoming data
    $rules = [
        'cname' => 'required|string|max:20',
        'ccontact' => 'required|string|max:20',
        'cdob' => 'required|date',
        'industry_name' => 'required',
        'caddress' => 'required|string|max:50',
        'cemail' => 'required|email|unique:client,cemail', // assuming 'clients' is the table name for clients
        'Pancard' => 'nullable|mimes:jpg,pdf,jpeg,png,doc,docx',
        'Adharcard' => 'nullable|mimes:jpg,pdf,jpeg,png,doc,docx',
    ];

 // Perform validation
 $validatedData = $request->validate($rules);
//
 $client = [
    'cname' => $validatedData['cname'],
    'ccontact' => $validatedData['ccontact'],
    'cdob' => $validatedData['cdob'],
    'industry_name' => $validatedData['industry_name'],
    'caddress' => $validatedData['caddress'],
    'Pancard' => $validatedData['Pancard'],
    'Adharcard' => $validatedData['Adharcard'],
    'cemail' => $validatedData['cemail']
];

    if ($request->hasFile('Pancard')) {
    $file = $request->file('Pancard');
    $fileName = $file->store('clientPancard', 'public');
    $data['Pancard'] = $fileName;
}

$newclient = array_merge($client, ['Pancard' => $data['Pancard']]);
    Client::create($newclient);
///////////////////////////////////////////////////

    if ($request->hasFile( 'Adharcard')) {
        $file = $request->file( 'Adharcard');
        $fileName = $file->store('clientAdharcard', 'public');
        $data[ 'Adharcard'] = $fileName;
    }
    
    $newclient = array_merge($client, [ 'Adharcard' => $data[ 'Adharcard']]);
        Client::create($newclient);
    

    return redirect('/client');
}

//upadate form
public function update(Request $request )
    { $rules = [
        'cname' => 'required|string|max:20',
        'ccontact' => 'required|max:20',
        'cdob' => 'required|date',
        'industry_name' => 'required',
        'caddress' => 'required|string|max:50',
        'Pancard' => 'nullable|mimes:jpg,pdf,jpeg,png,doc,docx',
        'Adharcard' => 'nullable|mimes:jpg,pdf,jpeg,png,doc,docx',
        'cemail' => 'required|email', // assuming 'clients' is the table name for clients
    ];
 // Perform validation
 $validatedData = $request->validate($rules);
        $client= ['ename' => $request->input('ename'),
        'cemail' => $request->input('cemail'),
        'ccontact' => $request->input('ccontact'),
        'industry_name' => $request->input('industry_name'),
        'cdob' => $request->input('cdob'),
        'Pancard' => $validatedData['Pancard'],
        'Adharcard' => $validatedData['Adharcard'],
        'caddress' => $request->input('caddress')
    ];
    //update
    ////pancard

    if ($request->hasFile('Pancard')) {
        $file = $request->file('Pancard');
        $fileName = $file->store('clientPancard', 'public');
        $data['Pancard'] = $fileName;
    }
    
    $newclient = array_merge($client, ['Pancard' => $data['Pancard']]);
        Client::find($request->input('id'))->update( $newclient);
///////     ///////////   ////////////////////////////////////////////////////////////
// adharcard update

if ($request->hasFile( 'Adharcard')) {
    $file = $request->file( 'Adharcard');
    $fileName = $file->store('clientAdharcard', 'public');
    $data[ 'Adharcard'] = $fileName;
}

$newclient = array_merge($client, [ 'Adharcard' => $data[ 'Adharcard']]);
Client::find($request->input('id'))->update( $newclient);


        return redirect('/client');
    }

  public function delete($id){
    $client= Client::find($id)->delete();
    return redirect('/client');

}
}

  

