<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Stripe extends Seeder
{
    public function run()
    {
        DB::table('stripe')->insert([
            ['id' => 1, 'name' => 'Sem tarja'],
            ['id' => 2, 'name' => 'Tarja vermelha sem restrição'],
            ['id' => 3, 'name' => 'Tarja vermelha com restrição'],
            ['id' => 4, 'name' => 'Tarja preta'],
            ['id' => 5, 'name' => 'Tarja amarela (Genérico)'],
        ]);
    }
}
