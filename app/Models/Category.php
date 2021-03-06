<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name','icon_image'];

    public function pois()
    {
        return $this->belongsToMany(Poi::class, 'poi_category');
    }
}
