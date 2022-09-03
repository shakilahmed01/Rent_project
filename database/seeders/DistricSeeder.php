<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Distric;
class DistricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Distric::create([
          'name'     => 'Dhaka',
        ]);
        //
        Distric::create([
          'name'     => 'Tangail',
        ]);
        //
        Distric::create([
          'name'     => 'Jamalpur',
        ]);
        //
        Distric::create([
          'name'     => 'Pabna',
        ]);
        //
        Distric::create([
          'name'     => 'Shirajgonj',
        ]);
        //
        Distric::create([
          'name'     => 'Kustiya',
        ]);
        //
        Distric::create([
          'name'     => 'Narayongonj',
        ]);
    }
}
