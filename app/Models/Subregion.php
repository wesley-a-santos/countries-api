<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $subregion
 * @property int $region_id
 * @property \App\Models\Region $region
 * @property \Illuminate\Database\Eloquent\Collection<int, \App\Models\Country> $countries
 */
class Subregion extends Model
{
    use HasFactory;

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function countries(): HasMany
    {
        return $this->hasMany(Country::class);
    }
}
