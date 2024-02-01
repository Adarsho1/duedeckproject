<?php

namespace App\Livewire;
use App\Models\Departments;
use Livewire\WithFileUploads;
use Livewire\Component;

class Department extends Component
{
   
    public $departments,$name,$departmentid,$passport;


    public function editdepartment($departmentid){
        $this->departmentid = $departmentid;
        $department = Departments::find($departmentid); 
        $this->name = $department->name; 
    }

    public function updateform()
    {
        $department = ['name'=> $this->name];
        Departments::find($this->departmentid)->update($department);
        $this->cancel();
    }
    public function deletedepartment($departmentid){
        Departments::find($departmentid)->delete(); 
        $this->cancel(); 
    }

    public function render()
    {
        $this->departments = Departments::orderBy('id', 'desc')->get();
        return view('livewire.department');
    }

    public function saveform(){
        // $rules = [
        //     'name' => 'required|string|max:255', // Example validation rules
        // ];

        // $data = ['name' => $this->name];

        // $validatedData = $this->validate($data,$rules);
    
        // If the validation passes, create the department
        $department = ['name' => $this->name];
        $department = ['Passport'=>$this->passport ];
        Departments::find($department);
        $this->cancel();
    }

    public function cancel(){
        $this->name="";
        $this->departmentid="";
        $this->Passport="";
    }
}
