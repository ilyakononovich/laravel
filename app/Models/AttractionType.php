<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttractionType extends Model
{
    use HasFactory;

    public $table = 'attraction_types';
    public $fillable = ['title'];
}
