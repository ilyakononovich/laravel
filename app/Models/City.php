<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['name','country_id','latitude','longitude','ne_latitude',
        'ne_longitude','sw_latitude','sw_longitude','purchase_id','zoom','radius',
        'radius','price'
    ];
}
