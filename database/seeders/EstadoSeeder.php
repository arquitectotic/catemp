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

        $estado->estado_cliente = "Nuevo";
        $estado->save();

        $estado2 = new Estado();

        $estado2->estado_cliente = "Existente";
        $estado2->save();
    }
}
