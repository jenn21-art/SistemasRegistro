<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Corrective_maintenance extends Model
{
    protected $perpage = 10;
    protected $fillable = [
        'customer_name',
        'telephone',
        'vehicle_brand',
        'tuition',
        'maintenance_date',
        'faults_found',
        'maintenance_manager',
        'total',
        'staff_id'
    ];

    public function staff() 
     {
        return $this->belongsTo( Staff::class);
       }

       public function invoices() 
       {
        return $this->hasMany( Invoice::class);
       }

}
