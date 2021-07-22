<?php

namespace Database\Seeders;

use App\Models\Accion;
use Illuminate\Database\Seeder;

class AccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $accion = new Accion();

        $accion->tipo_accion = 'Visita';
        $accion->save();
        
        $accion2 = new Accion();

        $accion2->tipo_accion = 'Llamada';
        $accion2->save();
        
        $accion3 = new Accion();

        $accion3->tipo_accion = 'Mensajes';
        $accion3->save();
    }
}
