<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    
    public $timestamps = false; 
    protected $table = 'continents';

    protected $fillable = [
        'name'
    ];
}
