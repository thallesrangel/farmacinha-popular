<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // php artisan migrate:refresh --seed
        $this->call(States::class);
        $this->call(City::class);
        $this->call(Unity::class);
        $this->call(Collaborator::class);
        $this->call(Stripe::class);
        $this->call(Laboratory::class);
        $this->call(Measurement::class);
        // \App\Models\User::factory(10)->create();
    }
}
