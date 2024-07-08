<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $region
 * @property \Illuminate\Database\Eloquent\Collection<int, \App\Models\Subregion> $subregions
 */
class Region extends Model
{
    use HasFactory;

    public function subregions(): HasMany
    {
        return $this->hasMany(Subregion::class);
    }
}
