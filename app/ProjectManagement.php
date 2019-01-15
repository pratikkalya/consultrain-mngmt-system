<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectManagement extends Model
{
    protected $table = 'project_managements';
    protected $primaryKey = 'id';
    
    public $fillable=[
        
        'customer_id',
        'iso_product_id',
        'agency_id',
        'tender_no',
        'tender_amount',
        'tender_date',
        'order_no',
        'order_amount',
        'order_date',
        'reference',
        'project_lead',
        'start_plnd_dt',
        'start_actual_dt',
        'gap_assessment',
        'amc',
    ];

    public function documentation() 
    {
       return $this->hasOne(Documentation::class, 'order_id');
    }

    public function implementation() 
    {
       return $this->hasOne(Implementation::class, 'order_id');
    }

    public function audit() 
    {
       return $this->hasOne(Audit::class, 'order_id');
    }

    public function assessment() 
    {
       return $this->hasOne(Assessment::class, 'order_id');
    }

    public function payment() 
    {
       return $this->hasOne(Payment::class, 'order_id');
    }


    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'iso_product_id');
    }

    public function agency()
    {
        return $this->belongsTo(Agency::class, 'agency_id');
    }

    
    public function amc()
    {
        return $this->hasOne(Amc::class, 'order_id');
    }
}
