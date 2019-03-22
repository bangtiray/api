<?php

namespace App\Models\Trans\Health\JTCare\CashPlan;

use Illuminate\Database\Eloquent\Model;

class Cashplan extends Model
{
    protected $table="casplan";

    protected $fillable = [
        'user_id',
        'order_id',
        'transaction_id',
        'payment_code',
        'payment_type',
        'gross_amount',
        'time',
        'status',
    ];
    
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
