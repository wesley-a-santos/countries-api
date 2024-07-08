<?php

namespace App\Http\Controllers;

use App\Http\Resources\RegionResource;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Cache;

class RegionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(): AnonymousResourceCollection
    {
        $regions = Cache::remember('regions', (int) config('session.lifetime'), function () {
            return Region::with('subregions.countries.currency')->get();
        });

        return RegionResource::collection($regions);
    }
}
