<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Continent;
class Country extends Model
{
    public $timestamps = false;

    protected $table = 'countries';

    protected $fillable = [
        'continent_id',
        'name'
    ];

    public function continent()
    {
        return $this->belongsTo(Continent::class);
    }
}
