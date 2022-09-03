<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Division;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Division::create([
          'name'     => 'Dhaka',
        ]);
        //
        Division::create([
          'name'     => 'Khulna',
        ]);
        //
        Division::create([
          'name'     => 'Chittagong',
        ]);
        //
        Division::create([
          'name'     => 'Rajshahi',
        ]);
        //
        Division::create([
          'name'     => 'Maymonshing',
        ]);
    }
}
