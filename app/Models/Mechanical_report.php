<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mechanical_report extends Model
{
         protected $perpage = 10;
     protected $fillable = [
    
          'date',
          'code',
          'engine',
          'transmission_system',
          'brake_system',
          'suspension',
          'electrical_system',
          'bodywork',
          'chassis',
          'repairs',
          'equipment_used',
          'recommendations',
          'in_charge',
          'record_id',
        
        ];

        public function Record() 
         {
          return $this->belongsTo(related: Record::class, foreignKey: 'record_id');
         }
}
