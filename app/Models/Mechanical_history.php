<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mechanical_history extends Model
{
    
       protected $perpage = 10;
    protected $fillable = [

        'customer_name',
        'vehicle_brand',
        'maintenance_list',
        'last_check',
        'repair_log',
        'accident_damage',
        'odometer_reading',
        'record_id'


    ];

    public function Record() 
     {
        return $this->belongsTo(related: Record::class, foreignKey: 'record_id');
       }

       public function Customer_information() 
       {
        return $this->belongsTo(related: Customer_information::class, foreignKey: 'customer_information_id');
       }

}
