<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var \App\Models\Country $this */
        $countries = [
            'id' => $this->id,
            'common' => $this->common,
            'official' => $this->official,
            'cca2' => $this->cca2,
            'ccn3' => $this->ccn3,
            'cca3' => $this->cca3,
            'flag' => $this->flag,
        ];

        if ($request->is('api/*/countries*') || $request->is('api/*/currencies*')) {
            $countries['subregion'] = new SubregionResource($this->subregion);
        }

        if (! $request->is('api/*/currencies*')) {
            $countries['currency'] = new CurrencyResource($this->currency);
        }

        return $countries;
    }
}
