<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Thana;

class ThanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //1
        Thana::create([
          'name'     => 'Uttara',
        ]);
        //1.1
        Thana::create([
          'name'     => 'Khilkhet',
        ]);
        //1.2
        Thana::create([
          'name'     => 'Vatara',
        ]);
        //1.3
        Thana::create([
          'name'     => 'Badda',
        ]);
        //1.4
        Thana::create([
          'name'     => 'Rampura',
        ]);
    }
}
