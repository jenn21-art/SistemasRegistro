<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
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

    public function corrective_maintenance() 
    {
        return $this->belongsTo(Corrective_maintenance::class);
    }

    public function repair() 
    {
        return $this->belongsTo(Repair::class);
    }

    public function records() 
       {
        return $this->hasMany( Record::class);
       }
}
