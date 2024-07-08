<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            ['name' => 'Africa'],
            ['name' => 'Americas'],
            ['name' => 'Asia'],
            ['name' => 'Europe'],
            ['name' => 'Oceania'],
            ['name' => 'Polar'],
        ];

        foreach ($regions as $region) {
            $newRegion = new Region();
            $newRegion->region = $region['name'];
            $newRegion->save();
        }
    }
}
