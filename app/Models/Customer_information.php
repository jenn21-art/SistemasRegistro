<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


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
    public function records() 
     {
        return $this->hasMany(Record::class);
       }

       public function mechanical_histories() 
       {
        return $this->hasMany(Mechanical_history::class);
       }
}
