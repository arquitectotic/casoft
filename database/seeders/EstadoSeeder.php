<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estado = new Estado();

        $estado->tipo_estado = "Propuesta";
        $estado->save();
        
        $estado2 = new Estado();

        $estado2->tipo_estado = "Revisión";
        $estado2->save();
        
        $estado3 = new Estado();

        $estado3->tipo_estado = "Vendida";
        $estado3->save();
        
        $estado4 = new Estado();

        $estado4->tipo_estado = "Perdida";
        $estado4->save();
    }
}
