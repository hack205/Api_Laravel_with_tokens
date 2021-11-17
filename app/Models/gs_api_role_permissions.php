<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gs_api_role_permissions extends Model
{
    protected $table = 'gs_api_role_permissions';
    public $timestamps = false;

    protected $fillable = [
        'permissions_id',
        'role_id'
    ];

    protected $hidden = [
        'pivot'
    ];
}
