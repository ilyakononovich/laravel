<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;

    public $table = 'points';
    public $fillable = ['title','longitude','latitude','description'];

    public function attractions(){
        return $this->belongsToMany(AttractionType::class);
    }
}
