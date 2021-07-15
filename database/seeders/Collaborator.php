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
                'id_unity' => 1,
                'first_name' => 'Fabrício',
                'last_name' => 'Gustavo Carillho',
                'cpf' => '123.123.123.90',
                'states' => 'rj',
                'role' => 'gestor',
                'email' => 'fabricio@gmail.com',
                'password' => '21232f297a57a5a743894a0e4a801fc3',
                'professional_record' => '123000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_unity' => 1,
                'first_name' => 'Silvana',
                'last_name' => 'Paiva Santos',
                'cpf' => '123.123.123.10',
                'states' => 'sp',
                'role' => 'analista',
                'email' => 'silvana@gmail.com',
                'password' => '21232f297a57a5a743894a0e4a801fc3',
                'professional_record' => '123001',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);

        
    }
}
