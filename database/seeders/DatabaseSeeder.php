<?php

namespace Database\Seeders;

use App\Models\Empresa;
use App\Models\Noticia;
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
        // \App\Models\User::factory(10)->create();
        Empresa::factory(50)->create();
        Noticia::factory(300)->create();
    }
}
