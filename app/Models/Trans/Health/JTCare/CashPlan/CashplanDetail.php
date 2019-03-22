<?php

namespace App\Models\Trans\Health\JTCare\CashPlan;

use Illuminate\Database\Eloquent\Model;

class CashplanDetail extends Model
{
    
    protected $table="detail_casplan";

    protected $fillable = [
        'order_id',
        'participant_name',
        'plan',
        'unit_price',
        'resource',
    ];
    
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
