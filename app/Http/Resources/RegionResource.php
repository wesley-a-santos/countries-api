<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RegionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var \App\Models\Region $this */
        $region = [
            'id' => $this->id,
            'region' => $this->region,
        ];

        if ($request->is('api/*/regions*')) {
            $region['subregions'] = SubregionResource::collection($this->subregions);
        }

        return $region;
    }
}
