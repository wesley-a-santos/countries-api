<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $symbol
 * @property \Illuminate\Database\Eloquent\Collection<int, \App\Models\Country> $countries
 */
class Currency extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function countries(): HasMany
    {
        return $this->hasMany(Country::class);
    }
}
