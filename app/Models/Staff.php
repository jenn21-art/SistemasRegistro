<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Corrective_maintenance;
use App\Models\Repair;


class Staff extends Model
{
    protected $table = 'staffs';
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

    public function Corrective_maintenance() 
     {
        return $this->hasMany(Corrective_maintenance::class);
       }

       public function Repairs() 
       {
        return $this->hasMany(related: Repair::class);
       }

}
