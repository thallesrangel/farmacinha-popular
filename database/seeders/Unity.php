<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Unity extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unity')->insert([
            [
                'corporate_name' => 'FARMÁCIA BÁSICA DE FUNDÃO',
                'cnes' => '12341234',
                'states' => 'ES',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'FARMÁCIA BÁSICA DE TIMBUÍ',
                'cnes' => '92341524',
                'states' => 'ES',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'FARMÁCIA BÁSICA DA TIJUCA',
                'cnes' => '00041524',
                'states' => 'RJ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
