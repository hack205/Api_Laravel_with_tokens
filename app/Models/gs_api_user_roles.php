<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gs_api_user_roles extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'role_id',
    ];

    protected $hidden = [
        'pivot'
    ];
}
