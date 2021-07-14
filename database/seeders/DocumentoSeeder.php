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

        $documento->tipo_documento = "CC";
        $documento->save();

        $documento2 = new Documento();

        $documento2->tipo_documento = "CE";
        $documento2->save();
        
        $documento3 = new Documento();

        $documento3->tipo_documento = "NIT";
        $documento3->save();
    
        $documento4 = new Documento();

        $documento4->tipo_documento = "NIP";
        $documento4->save();
        
        $documento5 = new Documento();

        $documento5->tipo_documento = "TI";
        $documento5->save();
        
        $documento6 = new Documento();

        $documento6->tipo_documento = "PEP";
        $documento6->save();


    }
}
