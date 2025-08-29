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
    'amount',
    'tool_id'

];


    public function tool() 
     {
        return $this->belongsTo(Tool::class);
       }

       public function records() 
       {
        return $this->hasMany( Record::class);
       }

}
