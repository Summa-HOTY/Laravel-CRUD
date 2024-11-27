<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Car::create([
            'license_plate' => 'AB12CD',
            'owner_name' => 'Henk',
            'brand' => 'Bugatti',
            'color' => 'Paars',
            'construction_year' => 2022,
        ]);

        Car::create([
            'license_plate' => 'CD74HD',
            'owner_name' => 'Klaas',
            'brand' => 'Nissan',
            'color' => 'Geel',
            'construction_year' => 2001,
        ]);

        Car::create([
            'license_plate' => 'RK345T',
            'owner_name' => 'Gerard',
            'brand' => 'Ford',
            'color' => 'Zwart',
            'construction_year' => 2017,
        ]);
    }
}
