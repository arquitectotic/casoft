<?php

namespace Database\Seeders;

use App\Models\Actividad;
use Illuminate\Database\Seeder;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actividad = new Actividad();
        
        $actividad->tipo_actividad = 'Hotelería';
        $actividad->save();
        
        $actividad2 = new Actividad();

        $actividad2->tipo_actividad = 'Restaurante';
        $actividad2->save();
        
        $actividad3 = new Actividad();

        $actividad3->tipo_actividad = 'Construcción';
        $actividad3->save();
        
        $actividad4 = new Actividad();

        $actividad4->tipo_actividad = 'Servicios Generales';
        $actividad4->save();
        
        $actividad5 = new Actividad();

        $actividad5->tipo_actividad = 'Comerciante';
        $actividad5->save();
        
        $actividad6 = new Actividad();

        $actividad6->tipo_actividad = 'Mecánica';
        $actividad6->save();
        
        $actividad7 = new Actividad();

        $actividad7->tipo_actividad = 'Peluquería';
        $actividad7->save();
        
        $actividad8 = new Actividad();

        $actividad8->tipo_actividad = 'Otros';
        $actividad8->save();
    }
}
