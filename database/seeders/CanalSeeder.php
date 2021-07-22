<?php

namespace Database\Seeders;

use App\Models\Canal;
use Illuminate\Database\Seeder;

class CanalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $canal = new Canal();

        $canal->nombre_canal = "En Persona";
        $canal->save();
        
        $canal2 = new Canal();

        $canal2->nombre_canal = "Referido";
        $canal2->save();
        
        $canal3 = new Canal();

        $canal3->nombre_canal = "Whatsapp";
        $canal3->save();
        
        $canal4 = new Canal();

        $canal4->nombre_canal = "Teléfono";
        $canal4->save();
        
        $canal5 = new Canal();

        $canal5->nombre_canal = "Referido Redes Sociales";
        $canal5->save();
    }
}
