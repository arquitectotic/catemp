<?php

namespace Database\Seeders;

use App\Models\Tipo_Empresa;
use Illuminate\Database\Seeder;

class TipoEmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo_empresa = new Tipo_Empresa(); 

        $tipo_empresa->tipo_de_empresa = "comercial";
        $tipo_empresa->save();
    }
}
