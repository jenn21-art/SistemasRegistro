<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle_information extends Model
{
    
       protected $perpage = 10;
    protected $fillable = [
        'name',
        'brand',
        'chassis_number',
        'tuition',
        'type_suspension',
        'weight',
        'repairs',
        'year',
        'maintenance',
        'mileage',
        'type_paint',
        'body_type',
        'type_parts',
        'engine',
        'transmission',
        'brakes'
    ];
    public function Records() 
     {
        return $this->hasMany(related: Record::class);
       }

       public function Budgets() 
       {
        return $this->hasMany(Budget::class);
       }
}
