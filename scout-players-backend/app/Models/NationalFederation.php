<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NationalFederation extends Model
{
    public $timestamps = false;

    protected $table = "national_federations";

    protected $fillable = [
        'name',
        'country_id',
        'continent_federation_id'
    ];

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function continentFederation(){
        return $this->belongsTo(ContinentFederation::class);
    }

}
