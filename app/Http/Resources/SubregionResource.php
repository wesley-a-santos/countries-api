<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubregionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var \App\Models\Subregion $this */
        $subregions = [
            'id' => $this->id,
            'subregion' => $this->subregion,
        ];

        if (! $request->is('api/*/regions*')) {
            $subregions['region'] = new RegionResource($this->region);
        }

        if ($request->is('api/*/regions*') || $request->is('api/*/subregions*')) {
            $subregions['countries'] = CountryResource::collection($this->countries);
        }

        return $subregions;
    }
}
