<?php

namespace Database\Seeders;

use App\Models\area;
use Illuminate\Database\Seeder;

class areasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $area = new area();
        $area->nombre = "RH";
        $area->save();

        $area2 = new area();
        $area2->nombre = "Contabilidad";
        $area2->save();
    }
}
