<?php

namespace App\Filters;

class PoiFilter extends QueryFilter
{
    public function city_id ($id)
    {
        return $this->builder->where('city_id', $id);
    }

    public function search_string ($search_string){
        return $this->builder
            ->where('name', 'LIKE', '%'.$search_string.'%')
            ->orWhere('address', 'LIKE', '%'.$search_string.'%');
    }
}
