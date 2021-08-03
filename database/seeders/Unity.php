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
                'corporate_name' => 'UBS Fundão',
                'cnes' => '12341234',
                'state_id' => 8,
                'city_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'UBS Timbuí',
                'cnes' => '92341524',
                'state_id' => 8,
                'city_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'UBS Praia Grande',
                'cnes' => '9234158',
                'state_id' => 8,
                'city_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'UBS Praia do Canto',
                'cnes' => '9234198',
                'state_id' => 8,
                'city_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'UBS Jardim da Penha',
                'cnes' => '9231198',
                'state_id' => 8,
                'city_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'UBS Cariacica',
                'cnes' => '92312198',
                'state_id' => 8,
                'city_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'UBS Guarapari',
                'cnes' => '923198',
                'state_id' => 8,
                'city_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'UBS Tijuca',
                'cnes' => '00041524',
                'state_id' => 19,
                'city_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'UBS Realengo',
                'cnes' => '9123198',
                'state_id' => 19,
                'city_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'UBS Copa Cabana',
                'cnes' => '9223198',
                'state_id' => 19,
                'city_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'UBS Duque de Caxias',
                'cnes' => '9223998',
                'state_id' => 19,
                'city_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'UBS Brumadinho',
                'cnes' => '00041529',
                'state_id' => 19,
                'city_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
