<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hotel;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Hotel::create(['name'=>'ibis']);
        Hotel::create(['name'=>'novotel']);

        User::create([
            'name' => 'admin',
            'email' => 'admin@qstar.in',
            'password' => bcrypt('xeon1980')
        ]);
    }
}
