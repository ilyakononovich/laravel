<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poi extends Model
{
    use HasFactory;

    protected $fillable = ['name','latitude','longitude','liked','viewed','priority','description',
        'city_id','detail','detail_info_copyright','address','website','working_hours','zoom','radius'
    ];
}
