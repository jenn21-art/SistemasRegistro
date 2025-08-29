<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
       
       protected $perpage = 10;
    protected $fillable = [

        'customer_name',
        'telephone',
        'identification',
        'vehicle_brand',
        'date',
        'tution',
        'type_service',
        'who_register',
        'inventory_id',
        'customer_information_id',
    ];

    public function inventory() 
     {
          return $this->belongsTo(Inventory::class);
       }

       public function customer_information() 
       {
        return $this->belongsTo(related: Customer_information::class);
       }

         public function mechanical_history() 
         {
          return $this->hasMany(mechanical_history::class);
         }

         
         public function mechanical_report() 
         {
          return $this->hasMany(mechanical_report::class);
         }


}
