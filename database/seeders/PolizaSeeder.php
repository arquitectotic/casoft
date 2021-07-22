<?php

namespace Database\Seeders;

use App\Models\Poliza;
use Illuminate\Database\Seeder;

class PolizaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $poliza = new Poliza(); 
        
        $poliza->tipo_poliza = "AV + AP";
        $poliza->monto = "$10.000.000";
        $poliza->save();
    }
}
