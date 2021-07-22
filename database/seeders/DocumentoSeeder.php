<?php

namespace Database\Seeders;

use App\Models\Documento;
use Illuminate\Database\Seeder;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $documento = new Documento(); 

        $documento->tipo_documento = "Cédula de Ciudadanía";
        $documento->save();

        $documento2 = new Documento();

        $documento2->tipo_documento = "Tarjeta de Identidad";
        $documento2->save();
        
        $documento3 = new Documento();

        $documento3->tipo_documento = "Salvoconducto de Permanencia";
        $documento3->save();
    
        $documento4 = new Documento();

        $documento4->tipo_documento = "Registro Civil";
        $documento4->save();
        
        $documento5 = new Documento();

        $documento5->tipo_documento = "Permiso Especial de Permanencia";
        $documento5->save();
        
        $documento6 = new Documento();

        $documento6->tipo_documento = "Pasaporte";
        $documento6->save();

        $documento7 = new Documento();

        $documento7->tipo_documento = "Número de Identificación Tributaria";
        $documento7->save();

        $documento8 = new Documento();

        $documento8->tipo_documento = "Cédula de Extranjería";
        $documento8->save();

        $documento9 = new Documento();

        $documento9->tipo_documento = "Carnét Diplomático";
        $documento9->save();
    }
}
