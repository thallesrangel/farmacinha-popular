<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // php artisan migrate:refresh --seed
        $this->call(States::class);
        $this->call(City::class);
        $this->call(Unity::class);
        $this->call(Collaborator::class);
        // \App\Models\User::factory(10)->create();
    }
}
