<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory, SoftDeletes;

    protected $filable = [
        'name',
        'code',
        'province_id',
        'status'
    ];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function users () {
        return $this->hasMany(User::class);
    }
}
