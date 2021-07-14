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

        $poliza->nombre_poliza = "EPS + ARL";
        $poliza->precio = 80000;
        $poliza->save();
        
        /*$poliza2 = new Poliza(); 

        $poliza2->nombre_poliza = "EPS + Caja";
        $poliza2->precio = 0;
        $poliza2->save();
        
        $poliza3 = new Poliza(); 

        $poliza3->nombre_poliza = "EPS + ARL + AFP";
        $poliza3->save();
        
        $poliza4 = new Poliza(); 

        $poliza4->nombre_poliza = "EPS + ARL + Caja";
        $poliza4->save();
        
        $poliza5 = new Poliza(); 

        $poliza5->nombre_poliza = "EPS + ARL + AFP + Caja";
        $poliza5->save();
        
        $poliza6 = new Poliza(); 

        $poliza6->nombre_poliza = "EPS + AFP + Caja";
        $poliza6->save();
        
        $poliza7 = new Poliza(); 

        $poliza7->nombre_poliza = "ARL";
        $poliza7->save();
        
        $poliza8 = new Poliza(); 

        $poliza8->nombre_poliza = "ARL + AFP";
        $poliza8->save();
        
        $poliza9 = new Poliza(); 

        $poliza9->nombre_poliza = "ARL + Caja";
        $poliza9->save();
        
        $poliza10 = new Poliza(); 

        $poliza10->nombre_poliza = "ARL + AFP + Caja";
        $poliza10->save();*/

    }
}
