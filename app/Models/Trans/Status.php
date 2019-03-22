<?php

namespace App\Models\Trans;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table="status";

    protected $fillable = [
        'order_id',
        'product_tpe',
        'type',
        'status',
        'pay_date',
        'user_id'
    ];
    
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
