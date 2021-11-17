<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'role_id',
        'type'
    ];
    public function permissions() {
        return $this->belongsToMany(
            permiso::class,
            (new gs_api_role_permissions())->getTable(),
            'role_id',
            'permissions_id'
        );
    }
    
}