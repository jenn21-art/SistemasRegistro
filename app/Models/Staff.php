<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
       protected $perpage = 10;
    protected $fillable = [
        'full_name',
        'code_staff',
        'position_company',
        'gender',
        'telephone',
        'identification',
        'birthday_date',
        'age',
        'academic_level',
        'address',
        'marital_status',
        'blood_type',
        'ethnicity',
        'nationality'
    ];

    public function Corrective_maintenances() 
     {
        return $this->hasMany(Corrective_maintenance::class);
       }

       public function Repairs() 
       {
        return $this->hasMany(related: Repair::class);
       }

}
