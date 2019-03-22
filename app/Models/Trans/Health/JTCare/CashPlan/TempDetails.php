<?php

namespace App\Models\Trans\Health\JTCare\Cashplan;

use Illuminate\Database\Eloquent\Model;

class TempDetails extends Model
{
    protected $table="temp_detail_casplan";

    protected $fillable = [
        'participant_name',
        'jk',
        'tempat',
        'tanggal',
        'nip',
        'plan',
        'unit_price',
        'user_id'
    ];
    
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
