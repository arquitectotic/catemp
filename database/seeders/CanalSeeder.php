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

        $canal->nombre_canal = "Página Web";
        $canal->save();
        
        $canal2 = new Canal();

        $canal2->nombre_canal = "Whatsapp";
        $canal2->save();
        
        $canal3 = new Canal();

        $canal3->nombre_canal = "Instagram";
        $canal3->save();
        
        $canal4 = new Canal();

        $canal4->nombre_canal = "Facebook";
        $canal4->save();
        
        $canal5 = new Canal();

        $canal5->nombre_canal = "Recomendación";
        $canal5->save();
        
        $canal6 = new Canal();

        $canal6->nombre_canal = "En Persona";
        $canal6->save();
        
        $canal7 = new Canal();

        $canal7->nombre_canal = "Oficina";
        $canal7->save();
        
        $canal8 = new Canal();

        $canal8->nombre_canal = "Teléfono";
        $canal8->save();
        
        $canal9 = new Canal();

        $canal9->nombre_canal = "Correo";
        $canal9->save();

    }
}
