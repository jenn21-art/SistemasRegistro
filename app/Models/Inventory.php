<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{

        protected $perpage = 10;
    protected $fillable = [
    'name',
    'date',
    'code',
    'description',
    'tools',
    'spare_parts',
    'materials',
    'equipment',
    'amount'

];


    public function Tools() 
     {
        return $this->hasMany(tool::class);
       }

       public function Records() 
       {
        return $this->hasMany(related: Record::class);
       }

}
