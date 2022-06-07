<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','poi_type_color','icon_image'];

    public function pois()
    {
        return $this->belongsToMany(Poi::class, 'poi_type');
    }
}
