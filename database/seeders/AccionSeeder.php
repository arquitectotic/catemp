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

        $accion->tipo_accion = "Llamada Telefónica";
        $accion->save();

        $accion2 = new Accion(); 

        $accion2->tipo_accion = "Correo Recordatorio";
        $accion2->save();

        $accion3 = new Accion(); 

        $accion3->tipo_accion = "Mensaje Recordatorio";
        $accion3->save();

        $accion4 = new Accion(); 

        $accion4->tipo_accion = "Visita Comercial";
        $accion4->save();

        $accion5 = new Accion(); 

        $accion5->tipo_accion = "Cita";
        $accion5->save();

        $accion6 = new Accion(); 

        $accion6->tipo_accion = "Teleconferencia";
        $accion6->save();

        $accion7 = new Accion(); 

        $accion7->tipo_accion = "Proceso Terminado";
        $accion7->save();

    }
}
