<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Laboratory extends Seeder
{
    public function run()
    {
        DB::table('laboratory')->insert([
            ['id' => 1, 'name' => 'EMS Corp'],
            ['id' => 2, 'name' => 'Hypera Pharma'],
            ['id' => 3, 'name' => 'Aché'],
            ['id' => 4, 'name' => 'Bayer'],
            ['id' => 5, 'name' => 'EuroFarma'],
        ]);
    }
}
