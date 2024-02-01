<?php

namespace App\Livewire;
use App\Models\Designations;
use Livewire\Component;

class Designation extends Component
{
    //public properties within a class
    public $designations,$name,$designationid;

    //The function returns a view named 'livewire.industry'(fetches data from the database[$this->industries])
    public function render()
    {
        $this->designations=Designations::orderBy('id', 'desc')->get();
        return view('livewire.designation');
    }

        // takes necessary data for editing an industry.
    public function editdesignation($designationsid){ //This function takes an $industriesid parameter when it's called
        $this->designationsid = $designationsid;
        $designations=Designations::find($designationsid); 
        $this->name = $designations->name; 
    }

    //upadte the specific field(like id,name)
    public function updateform()
    {
        $designations= ['name'=> $this->name];
        Designations::find($this->designationsid)->update($designations);
        $this->cancel();
    }
         // delete the  specific field from  table
    public function deletedesignation($designationsid){
        Designations::find($designationsid)->delete(); 
        $this->cancel(); 
    }

    

    public function saveform(){
        $rules = [
            'name' => 'required|string|max:255',]; // Example validation rules
        $designations = ['name' => $this->name];
        Designations::create($designations);
        $this->cancel();
        $this->validate($rules);
    }

    // cancels the the operation while upadating a tables data
    public function cancel(){
        $this->name="";
        $this->designationsid="";
    }
}

   
