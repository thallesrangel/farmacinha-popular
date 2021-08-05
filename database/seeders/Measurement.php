<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Measurement extends Seeder
{
    public function run()
    {
        DB::table('measurement')->insert([
                ['id' => 1, 'name' => 'Comprimido', 'abbreviation' => 'cp'],
                ['id' => 2, 'name' => 'Drágea', 'abbreviation' => 'dg'],
                ['id' => 3, 'name' => 'Cápsula', 'abbreviation' => 'cap'],
                ['id' => 4, 'name' => 'Mililítros', 'abbreviation' => 'ml'],
                ['id' => 5, 'name' => 'Grama', 'abbreviation' => 'g'],
                ['id' => 6, 'name' => 'MiliGrama', 'abbreviation' => 'mg'],
                ['id' => 7, 'name' => 'Unidade', 'abbreviation' => 'un'],
                ['id' => 8, 'name' => 'Ampola', 'abbreviation' => 'amp'],
        ]);
    }
}
