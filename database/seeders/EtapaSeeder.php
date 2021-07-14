<?php

namespace Database\Seeders;

use App\Models\Etapa;
use Illuminate\Database\Seeder;

class EtapaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $etapa = new Etapa(); 

        $etapa->etapa_oportunidad = "Nueva";
        $etapa->save();
        
        $etapa2 = new Etapa(); 

        $etapa2->etapa_oportunidad = "Propuesta";
        $etapa2->save();
        
        $etapa3 = new Etapa(); 

        $etapa3->etapa_oportunidad = "Revisión";
        $etapa3->save();
        
        $etapa4 = new Etapa(); 

        $etapa4->etapa_oportunidad = "Vendida";
        $etapa4->save();
        
        $etapa5 = new Etapa(); 

        $etapa5->etapa_oportunidad = "Perdida";
        $etapa5->save();


    }
}
