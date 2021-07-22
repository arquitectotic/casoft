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
        // \App\Models\User::factory(10)->create();
        $this->call(EstadoSeeder::class);
        $this->call(DocumentoSeeder::class);
        $this->call(EtapaSeeder::class);
        $this->call(PolizaSeeder::class);
        $this->call(CanalSeeder::class);
        $this->call(ContactoSeeder::class);
        $this->call(AccionSeeder::class);
    }
}
