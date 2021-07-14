<?php

namespace Database\Seeders;

use App\Models\Contacto;
use Illuminate\Database\Seeder;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $contacto = new Contacto(); 

        $contacto->tipo_contacto = "Primero";
        $contacto->save();
        
        $contacto2 = new Contacto(); 

        $contacto2->tipo_contacto = "Segundo";
        $contacto2->save();
        
        $contacto3 = new Contacto(); 

        $contacto3->tipo_contacto = "Tercero";
        $contacto3->save();

    }
}
