<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amc extends Model
{
    protected $table = 'amcs';
    protected $primaryKey = 'id';

    public $fillable = [
        'order_id',
        'purchase_ordr',
        'project_cost',
        'start_plnd_dt',
        'start_actl_dt',
        'period',
        'visit1_dt',
        'payment_1',
        'visit2_dt',
        'payment_2',
        'visit3_dt',
        'payment_3',
        'visit4_dt',
        'payment_4'
           
    ];

    public function projectManagement()
    {
        return $this->belongsTo(projectManagement::class ,'order_id');
    }
}
