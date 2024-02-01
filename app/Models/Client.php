<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Industries;

class Client extends Model
{
    use HasFactory;
    
protected $table='client';
 protected $fillable = [
        'cid',
        'cname',
        'ccontact',
        'caddress',
        'Pancard',
        'Adharcard',
        'industry_name',
        'cdob',
        'cdept',
        'cemail',
        'file_column',


        
        
    ];

    public function industry()
    {
        return $this->belongsTo(Industries::class, 'industry_name', 'id');
    }
}
