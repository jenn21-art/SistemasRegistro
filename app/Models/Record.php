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
        'invoice_id',
        'customer_information_id',
        'vehicle_information_id',
    ];

    public function Inventory() 
     {
        return $this->belongsTo(related: Inventory::class, foreignKey: 'inventory_id');
       }

       public function Invoice() 
       {
        return $this->belongsTo(related: Invoice::class, foreignKey: 'invoice_id');
       }

       public function Customer_information() 
       {
        return $this->belongsTo(related: Customer_information::class, foreignKey: 'customer_information_id');
       }

       public function Vehicle_information() 
       {
        return $this->belongsTo(related: Vehicle_information::class, foreignKey: 'vehicle_information_id');
       }

         public function Mechanical_history() 
         {
          return $this->hasMany(mechanical_history::class);
         }

         
         public function Mechanical_report() 
         {
          return $this->hasMany(mechanical_report::class);
         }


}
