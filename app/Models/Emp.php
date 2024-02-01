<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emp extends Model
{
    use HasFactory;
    
protected $table='emp';
 protected $fillable = [
        
        'ename',
        'econtact',
        'eaddress',
        'edob',
        'dept',
        'Resume',
        'email',
        'file_column',
      
        
        
    ];
    public function department()
    {
        return $this->belongsTo(Departments::class, 'dept', 'id');
    }
}
