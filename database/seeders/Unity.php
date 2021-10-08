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
                'corporate_name' => 'HOSPITAL SAO CAMILO ARACRUZ',
                'cnes' => '2770326',
                'state_id' => 8,
                'city_id' => 813,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'PRONTO ATENDIMENTO DR CESAR AGOSTINI',
                'cnes' => '2626748',
                'state_id' => 8,
                'city_id' => 830,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'FARMACIA BASICA DE FUNDAO',
                'cnes' => '9670289',
                'state_id' => 8,
                'city_id' => 830,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'UNIDADE ESPECIALIZADA DE SAUDE DE FUNDAO',
                'cnes' => '3499065',
                'state_id' => 8,
                'city_id' => 830,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'UNIDADE SAUDE DA FAMILIA DE TIMBUI',
                'cnes' => '2652811',
                'state_id' => 8,
                'city_id' => 830,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'UNIDADE DE SAUDE DA FAMILIA DE PRAIA GRANDE',
                'cnes' => '2652838',
                'state_id' => 8,
                'city_id' => 830,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'HOSPITAL SAO LUCAS',
                'cnes' => '0011819',
                'state_id' => 8,
                'city_id' => 882,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'HOSPITAL UNIVERSITARIO CASSIANO ANTONIO MORAES HUCAM',
                'cnes' => '4044916',
                'state_id' => 8,
                'city_id' => 882,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'HOSPITAL SANTA RITA DE CASSIA',
                'cnes' => '0011738',
                'state_id' => 8,
                'city_id' => 882,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'HOSPITAL INFANTIL NOSSA SENHORA DA GLORIA',
                'cnes' => '0011800',
                'state_id' => 8,
                'city_id' => 882,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'HOSPITAL PEDRO FONTES',
                'cnes' => '2546973',
                'state_id' => 8,
                'city_id' => 821,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'HOSPITAL MERIDIONAL',
                'cnes' => '2494450',
                'state_id' => 8,
                'city_id' => 821,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'HOSPITAL NOSSA SENHORA DA CONCEICAO',
                'cnes' => '923198',
                'state_id' => 8,
                'city_id' => 833,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'HOSPITAL SAO JUDAS TADEU',
                'cnes' => '2652757',
                'state_id' => 8,
                'city_id' => 833,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'HOSPITAL 4 CENTENARIO',
                'cnes' => '2271907',
                'state_id' => 19,
                'city_id' => 3659,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'HOSPITAL CENTRAL DO IASERJ',
                'cnes' => '3562271',
                'state_id' => 19,
                'city_id' => 3659,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'HOSPITAL ALCIDES CARNEIRO',
                'cnes' => '2275562',
                'state_id' => 19,
                'city_id' => 3646,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'HOSPITAL NOSSA SENHORA APARECIDA HNSA',
                'cnes' => '0088935',
                'state_id' => 19,
                'city_id' => 3646,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'HOSPITAL DR NELSON DOS SANTOS GONCALVES',
                'cnes' => '2708078',
                'state_id' => 19,
                'city_id' => 3683,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'HOSPITAL ALFREDO ABRAHAO',
                'cnes' => '0616036',
                'state_id' => 9,
                'city_id' => 898,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'corporate_name' => 'HOSPITAL MUNICIPAL DE BARRO ALTO',
                'cnes' => '2381885',
                'state_id' => 9,
                'city_id' => 913,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
