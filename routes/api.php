<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\SubregionController;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {
    Route::get('/regions', [RegionController::class, 'index'])->name('regions.index');
    Route::get('/subregions', [SubregionController::class, 'index'])->name('subregions.index');
    Route::get('/countries', [CountryController::class, 'index'])->name('countries.index');
    Route::get('/currencies', [CurrencyController::class, 'index'])->name('currencies.index');
});
