<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    
    public $fillable = [
        'name',
        'detail',
     ];


     public function projectManagement()
     {
         return $this->hasOne(ProjectManagement::class, 'iso_product_id');
     }

     public function agencies()
     {
         return $this->belongsToMany(Agency::class, 'agency_product_mappings', 'agency_id');
     }

}
