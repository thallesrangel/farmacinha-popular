<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrugType extends Seeder
{
    public function run()
    {
        DB::table('drug_type')->insert([
            ['name' => 'analgésico'],
            ['name' => 'anfetamina'],
            ['name' => 'antiácido'],
            ['name' => 'antibiótico'],
            ['name' => 'antídoto'],
            ['name' => 'aspirina'],
            ['name' => 'barbitúrico'],
            ['name' => 'bórax'],
            ['name' => 'calmante'],
            ['name' => 'clorofórmio'],
            ['name' => 'efedrina'],
            ['name' => 'fortificante'],
            ['name' => 'insulina'],
            ['name' => 'laxante'],
            ['name' => 'lidocaína'],
            ['name' => 'mercurocromo'],
            ['name' => 'mertiolate'],
            ['name' => 'morfina'],
            ['name' => 'neomicina'],
            ['name' => 'penicilina'],
            ['name' => 'purgante'],
            ['name' => 'sais'],
            ['name' => 'sedativo'],
            ['name' => 'sonífero'],
            ['name' => 'tranquilizante'],
            ['name' => 'vermífugo'],
            ['name' => 'xilocaína']
        ]);
    }
}
