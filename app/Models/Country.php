<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $common
 * @property string $official
 * @property string $cca2
 * @property string $ccn3
 * @property string $cca3
 * @property string $flag
 * @property int $subregion_id
 * @property int $currency_id
 * @property \App\Models\Subregion $subregion
 * @property \App\Models\Currency $currency
 */
class Country extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function subregion(): BelongsTo
    {
        return $this->belongsTo(Subregion::class);
    }

    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class);
    }
}
