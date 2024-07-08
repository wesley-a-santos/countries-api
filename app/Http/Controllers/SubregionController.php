<?php

namespace App\Http\Controllers;

use App\Http\Resources\SubregionResource;
use App\Models\Subregion;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Cache;

class SubregionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(): AnonymousResourceCollection
    {
        $subregions = Cache::remember('subregions', (int) config('session.lifetime'), function () {
            return Subregion::with('region')->with('countries.currency')->get();
        });

        return SubregionResource::collection($subregions);
    }
}
