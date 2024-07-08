<?php

namespace Database\Seeders;

use App\Models\Subregion;
use Illuminate\Database\Seeder;

class SubregionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subregions = [
            ['region_id' => 6, 'subregion' => 'Antarctica'],
            ['region_id' => 5, 'subregion' => 'Australia and New Zealand'],
            ['region_id' => 2, 'subregion' => 'Caribbean'],
            ['region_id' => 2, 'subregion' => 'Central America'],
            ['region_id' => 3, 'subregion' => 'Central Asia'],
            ['region_id' => 4, 'subregion' => 'Central Europe'],
            ['region_id' => 1, 'subregion' => 'Eastern Africa'],
            ['region_id' => 3, 'subregion' => 'Eastern Asia'],
            ['region_id' => 4, 'subregion' => 'Eastern Europe'],
            ['region_id' => 5, 'subregion' => 'Melanesia'],
            ['region_id' => 5, 'subregion' => 'Micronesia'],
            ['region_id' => 1, 'subregion' => 'Middle Africa'],
            ['region_id' => 1, 'subregion' => 'Northern Africa'],
            ['region_id' => 2, 'subregion' => 'Northern America'],
            ['region_id' => 4, 'subregion' => 'Northern Europe'],
            ['region_id' => 5, 'subregion' => 'Polynesia'],
            ['region_id' => 2, 'subregion' => 'South America'],
            ['region_id' => 3, 'subregion' => 'South-Eastern Asia'],
            ['region_id' => 1, 'subregion' => 'Southern Africa'],
            ['region_id' => 3, 'subregion' => 'Southern Asia'],
            ['region_id' => 4, 'subregion' => 'Southern Europe'],
            ['region_id' => 1, 'subregion' => 'Western Africa'],
            ['region_id' => 3, 'subregion' => 'Western Asia'],
            ['region_id' => 4, 'subregion' => 'Western Europe'],
        ];

        foreach ($subregions as $subregion) {
            $newSubregion = new Subregion();
            $newSubregion->region_id = $subregion['region_id'];
            $newSubregion->subregion = $subregion['subregion'];
            $newSubregion->save();
        }
    }
}
