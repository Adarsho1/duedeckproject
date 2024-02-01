<?php

namespace App\Livewire;
use App\Models\Industries;

use Livewire\Component;

class Industry extends Component
{
    //public properties within a class
    public $industries,$name,$industryid;

    //The function returns a view named 'livewire.industry'(fetches data from the database[$this->industries])
    public function render()
    {
        $this->industries = Industries::orderBy('id', 'desc')->get();
        return view('livewire.industry');
    }

        // takes necessary data for editing an industry.
    public function editindustry($industriesid){ //This function takes an $industriesid parameter when it's called
        $this->industriesid = $industriesid;
        $industries = Industries::find($industriesid); 
        $this->name = $industries->name; 
    }

    //upadte the specific field(like id,name)
    public function updateform()
    {
        $industries = ['name'=> $this->name];
        Industries::find($this->industriesid)->update($industries);
        $this->cancel();
    }
         // delete the  specific field from  table
    public function deleteindustry($industriesid){
        Industries::find($industriesid)->delete(); 
        $this->cancel(); 
    }

    

    public function saveform(){
        $rules = [
            'name' => 'required|string|max:30',];
       
        $industries = ['name' => $this->name];
        Industries::create($industries);
        $this->cancel();
        $this->validate($rules);

        
    }

    // cancels the the operation while upadating a tables data
    public function cancel(){
        $this->name="";
        $this->industriesid="";
    }
}
