<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Poi extends Model
{
    use HasFactory;

    protected $fillable = ['name','latitude','longitude','liked','viewed','priority','description',
        'city_id','detail','detail_info_copyright','address','website','working_hours','zoom','radius'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class,'poi_category');
    }

    public function types()
    {
        return $this->belongsToMany(Type::class, 'poi_type');
    }

    public function scopeFilter(Builder $builder, QueryFilter $filter)
    {
        return $filter->apply($builder);
    }
}
