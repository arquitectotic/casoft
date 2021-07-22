<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plan = new Plan();

        $plan->tipo_plan = 'EPS + ARL';
        $plan->save();
        
        $plan2 = new Plan();

        $plan2->tipo_plan = 'EPS + ARL + AFP';
        $plan2->save();
        
        $plan3 = new Plan();

        $plan3->tipo_plan = 'EPS + ARL + CAJA';
        $plan3->save();
        
        $plan4 = new Plan();

        $plan4->tipo_plan = 'ARL';
        $plan4->save();

    }
}
