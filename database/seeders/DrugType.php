<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrugType extends Seeder
{
    public function run()
    {
        DB::table('drug_type')->insert([
            ['name' => 'Analgésico'],
            ['name' => 'Antiácido'],
            ['name' => 'Antirretrovirais'],
            ['name' => 'Antiemético'],
            ['name' => 'Antiarrítmico'],
            ['name' => 'Anti-hipertensivo'],
            ['name' => 'Antivirais'],
            ['name' => 'Antidepressivo'],
            ['name' => 'Anticancerosos'],
            ['name' => 'Antiepilépticos'],
            ['name' => 'Anti-psicóticos'],
            ['name' => 'Antilipêmico'],
            ['name' => 'Antidiabéticos'],
            ['name' => 'Anti-inflamatório'],
            ['name' => 'Anticoagulantes'],
            ['name' => 'Antibióticos'],
            ['name' => 'Antídoto'],
            ['name' => 'Calmante'],
            ['name' => 'Laxante'],
            ['name' => 'Purgante'],
            ['name' => 'Sais'],
            ['name' => 'Antitússico'],
            ['name' => 'Cicatrizante'],
            ['name' => 'Vitamínico'],
            ['name' => 'Sedativo'],
            ['name' => 'Sonífero'],
            ['name' => 'Diurético'],
            ['name' => 'Tranquilizante'],
            ['name' => 'Vermífugo'],
            ['name' => 'Hipertensão'],
            ['name' => 'Antidiarreico'],
            ['name' => 'Bactericida'],
            ['name' => 'Antialérgico'],
        ]);
    }
}
