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

    public function Staff() 
     {
        return $this->belongsTo(related: Staff::class, foreignKey: 'staff_id');
       }

       public function Invoices() 
       {
        return $this->hasMany(related: Invoice::class);
       }

}
