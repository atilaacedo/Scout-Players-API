<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Continent;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Country extends Model
{
    public $timestamps = false;

    protected $table = 'countries';

    protected $fillable = [
        'continent_id',
        'name'
    ];

    public function continent() : BelongsTo
    {
        return $this->belongsTo(Continent::class);
    }

    public function nationalFederation() : hasOne
    {
        return $this->hasOne(NationalFederation::class);
    }
}
