<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $perpage = 10;
    protected $fillable = [
        'invoice_number',
        'customer_name',
        'telephone',
        'date',
        'type_service',
        'ruc_number',
        'workshop_name',
        'employee_name',
        'unit_price',
        'total',
        'corrective_maintenance_id',
        'repair_id'
    ];

    public function Corrective_maintenance() 
    {
        return $this->belongsTo(Corrective_maintenance::class, 'vehicle_information_id');
    }

    public function Repair() 
    {
        return $this->belongsTo(Repair::class, 'repair_id');
    }

    public function Records() 
       {
        return $this->hasMany(related: Record::class);
       }
}
