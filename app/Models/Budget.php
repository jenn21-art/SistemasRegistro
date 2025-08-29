<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $perpage = 10;

    protected $fillable = [
        'workshop_name',
        'address',
        'telephone',
        'registration_code',
        'customer_name',
        'vehicle_brand',
        'mileage',
        'model',
        'tuition',
        'description_repairs',
        'parts_list',
        'labour',
        'budget_validity',
        'delivery_time',
        'total_price',
        'record_id',

    ];

    public function Record()
    {
        return $this->belongsTo(record::class);
    }
}
