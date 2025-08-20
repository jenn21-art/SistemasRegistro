<?php

namespace App\Models;

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
        'year',
        'mileage',
        'model',
        'tuition',
        'description_repairs',
        'parts_list',
        'labour',
        'budget_validity',
        'delivery_time',
        'total_price',
        'vehicle_information_id',

    ];

    public function Vehicle_information()
    {
        return $this->belongsTo(Vehicle_information::class, 'vehicle_information_id');
    }

    public function Vehicle_informations()
    {
        return $this->hasMany(Vehicle_information::class);
    }
}
