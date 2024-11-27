<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'license_plate',
        'owner_name',
        'brand',
        'color',
        'construction_year',
    ];
}
