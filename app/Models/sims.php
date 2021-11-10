<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sims extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'phone',
        'ICCID',
        'COMPANY',
        'mb',
        'CELLPHONE_MINUTES'
    ];
    
}
