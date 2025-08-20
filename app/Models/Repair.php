<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
        
       protected $perpage = 10;
    protected $fillable = [

        'customer_name',
        'telephone',
        'vehicle_brand',
        'tuition',
        'repair_date',
        'faults_found',
        'repair_date',
        'unit_price',
        'type_repair',
        'total',
        'staff_id'

    ];

    public function Staff() 
     {
        return $this->belongsTo(related: Staff::class, foreignKey: 'staff_id');
       }

       public function Invoices() 
       {
        return $this->hasMany(related: Invoice::class);
       }
}
