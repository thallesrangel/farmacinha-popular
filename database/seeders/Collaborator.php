<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Collaborator extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('collaborator')->insert([
            [
                'id_unity' => null,
                'first_name' => 'Thalles',
                'last_name' => 'Rangel Lopes',
                'cpf' => '146.535.617-70',
                'birth_date' => "1998-10-10",
                'state_id' => 8,
                'city_id' => 1,
                'role' => 'gestor_geral',
                'email' => 'rangelthr@gmail.com',
                'password' => '21232f297a57a5a743894a0e4a801fc3',
                'professional_record' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_unity' => null,
                'first_name' => 'Fabrício',
                'last_name' => 'Gustavo Carillho',
                'cpf' => '123.123.123.90',
                'birth_date' => "1998-10-10",
                'state_id' => 8,
                'city_id' => 1,
                'role' => 'gestor_estadual',
                'email' => 'fabricio@gmail.com',
                'password' => '21232f297a57a5a743894a0e4a801fc3',
                'professional_record' => '12000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_unity' => 1,
                'first_name' => 'Bruna',
                'last_name' => 'Santos',
                'cpf' => '0012312310',
                'birth_date' => "1998-10-10",
                'state_id' => 8,
                'city_id' => 1,
                'role' => 'gestor_unidade',
                'email' => 'bruna@gmail.com',
                'password' => '21232f297a57a5a743894a0e4a801fc3',
                'professional_record' => '103001',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_unity' => 1,
                'first_name' => 'Silvana',
                'last_name' => 'Paiva Santos',
                'cpf' => '123.123.123.10',
                'birth_date' => "1998-10-10",
                'state_id' => 8,
                'city_id' => 1,
                'role' => 'analista',
                'email' => 'silvana@gmail.com',
                'password' => '21232f297a57a5a743894a0e4a801fc3',
                'professional_record' => '11001',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_unity' => null,
                'first_name' => 'Micaelly',
                'last_name' => 'Karina de Souza Reges',
                'cpf' => '12212399900',
                'birth_date' => "1998-10-10",
                'state_id' => 19,
                'city_id' => 1,
                'role' => 'gestor_estadual',
                'email' => 'micaelly@gmail.com',
                'password' => '21232f297a57a5a743894a0e4a801fc3',
                'professional_record' => '12010',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_unity' => 3,
                'first_name' => 'Penha',
                'last_name' => 'Gomes',
                'cpf' => '0012312210',
                'birth_date' => "1998-10-10",
                'state_id' => 19,
                'city_id' => 1,
                'role' => 'gestor_unidade',
                'email' => 'penha@gmail.com',
                'password' => '21232f297a57a5a743894a0e4a801fc3',
                'professional_record' => '203001',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_unity' => 3,
                'first_name' => 'Amanda',
                'last_name' => 'Petral',
                'cpf' => '92312312300',
                'birth_date' => "1998-10-10",
                'state_id' => 19,
                'city_id' => 1,
                'role' => 'analista',
                'email' => 'amanada@gmail.com',
                'password' => '21232f297a57a5a743894a0e4a801fc3',
                'professional_record' => '19301',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_unity' => 3,
                'first_name' => 'Hugo',
                'last_name' => 'Pablo',
                'cpf' => '92312312301',
                'birth_date' => "1998-10-10",
                'state_id' => 19,
                'city_id' => 1,
                'role' => 'assistente',
                'email' => 'hugo@gmail.com',
                'password' => '21232f297a57a5a743894a0e4a801fc3',
                'professional_record' => '19901',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);

        
    }
}
