<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    
       protected $perpage = 10;
    protected $fillable = [
        'name',
        'brand',
        'company',
        'supplier',
        'entry_date',
        'code',
        'who_receives',
    ];
 
       public function Inventories() 
       {
        return $this->hasMany(Inventory::class);
       }


}
