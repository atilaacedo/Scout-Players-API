<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorldFederation extends Model
{
    
    public $timestamps = false;

    protected $table = "world_federations";

    protected $filable = [
        'name',
        'is_independent'
    ];
}
