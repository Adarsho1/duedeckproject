<?php

namespace App\Http\Controllers;
use App\Models\Emp;
use App\Models\Departments;
use App\Models\Dashboards;
use Illuminate\Http\Request;

class EmpController extends Controller
{
    //public function Edit($id){
      //  $employee = Emp::find($id);  
        //$departments = Departments::all();
        //return view('Edit', compact('employee.index','departments'));   
    
    
    public function index(){
          
        $employee = Emp::all();
        return view('employee.index', compact('employee'));        
    }

    public function create(Request $request){
        // Validation rules for the incoming request data
        $rules = [
            'ename' => 'required|string|max:20',
            'dept' => 'required|string|max:50',
            'econtact' => 'required|string|max:20',
            'edob' => 'required|date',
            'eaddress' => 'required|string|max:255',
            'email' => 'required|email|max:50|unique:emp,email',
            'Resume' => 'nullable|mimes:jpg,pdf,jpeg,png,doc,docx',
             // Assuming 'employees' is the table name
        ];

        // Perform validation
        $validatedData = $request->validate($rules);
    
        // If the validation passes, create the employee
        $employee = [
            'ename' => $validatedData['ename'],
            'dept' => $validatedData['dept'],
            'econtact' => $validatedData['econtact'],
            'edob' => $validatedData['edob'],
             'Resume' => $validatedData['Resume'],
            'eaddress' => $validatedData['eaddress'],
            'email' => $validatedData['email']
           
        ];

        if ($request->hasFile('Resume')) {
            $file = $request->file('Resume');
            $fileName = $file->store('EmployeeResume', 'public');
            $data['Resume'] = $fileName;
        }
    
        $newemp = array_merge($employee, ['Resume' => $data['Resume']]);
        Emp::create($newemp);
    
        return redirect('/index');
    }



    public function Edit($id){

        $employee = Emp::find($id);
        $departments = Departments::all();
        return view('employee.Edit', compact('employee', 'departments'));

          
    }

    public function update(Request $request){
        $employee = ['ename' => $request->input('ename'),
        
        'econtact' => $request->input('econtact'),
        'dept' => $request->input('dept'),
        'dob' => $request->input('dob'),
        'eaddress' => $request->input('eaddress'),
        'Resume' => $request->input('Resume'),
        'email'=> $request->input('email')
    ];

        if ($request->hasFile('Resume')) {
            $file = $request->file('Resume');
            $fileName = $file->store('EmployeeResume', 'public');
            $data['Resume'] = $fileName;
        }
      
        $newemp = array_merge($employee, ['Resume' => $data['Resume']]);
        Emp::find($request->input('id'))->update($newemp);

        return redirect('/index');
    }
    

    public function delete($id){
        $employee = Emp::find($id)->delete();
        return redirect('/index');
    }

    public function createemployee(){
        $departments = Departments::all();
        return view('employee.create', compact('departments'));
    }

   
}

