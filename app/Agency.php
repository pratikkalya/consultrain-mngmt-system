<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agency extends Model
{
    use SoftDeletes;
    
    public $fillable = [
        'agency_name',
        'agency_phone_number',
        'agency_email',
        'street_name',
        'pincode',
        'city',
        'state',
        'country',
    ];


    public function projectManagement()
    {
        return $this->hasOne(ProjectManagement::class, 'agency_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'agency_product_mappings', 'product_id');
    }
}
