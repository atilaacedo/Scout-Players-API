<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Continent;
use App\Models\WorldFederation;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ContinentFederation extends Model
{
    public $timestamps = false;

    protected $table = 'continent_federations';

    protected $fillable = [
        'name',
        'continent_id',
        'world_federation_id'
    ];

    public function continent() : BelongsTo
    {
        return $this->belongsTo(Continent::class);
    }

    public function worldFederation() : BelongsTo
    {
        return $this->belongsTo(WorldFederation::class);
    }
}
