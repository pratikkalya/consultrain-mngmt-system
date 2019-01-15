<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    protected $table = 'assessments';
    protected $primaryKey = 'id';

    public $fillable = [
        'order_id',
        'pre_assmnt_plnd_date',
        'pre_assmt_actual_date',
        'pre_assmt_comment',
        'final_assmt__plnd_date',
        'final_assmt_actual_date',
        'final_assmt_comment',
    ];

    public function projectManagement()
    {
        return $this->belongsTo(ProjectManagement::class);
    }
}
