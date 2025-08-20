<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer_information extends Model
{
    
        protected $perpage = 10;
    protected $fillable = [
        'name',
        'vehicle_brand',
        'code',
        'tuition',
        'identification',
        'address',
        'telephone',
        'gender'
];
    public function Records() 
     {
        return $this->hasMany(related: Record::class);
       }

       public function Mechanical_histories() 
       {
        return $this->hasMany(Mechanical_history::class);
       }
}
