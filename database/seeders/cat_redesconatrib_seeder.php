<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class cat_redesconatrib_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_redesconatrib')->insert([
            'id'=>"1",
            'red'=>"Reunión de la Red de Cooperación para la Protección de la Niñez",
            'fechaInicio'=>"2023-11-28",
            'fechaFin'=>"2023-11-30",
            'activo'=> 1,
            'landingPage'=> "HTML1",
        ]);

        DB::table('cat_redesconatrib')->insert([
            'id'=>"2",
            'red'=>"Reunión de la Red Nacional de Estadísticas Judiciales",
            'fechaInicio'=>"2023-11-30",
            'fechaFin'=>"2023-12-01",
            'activo'=> 1,
            'landingPage'=> "HTML2",
        ]);

        //Red desabiltada
        DB::table('cat_redesconatrib')->insert([
            'id'=>"3",
            'red'=>"Reunión Nacional del Sistema Integral de Justicia Penal para Adolescentes",
            'fechaInicio'=>"2023-11-08",
            'fechaFin'=>"2023-11-15",
            'activo'=> 0,
            'landingPage'=> "HTML3",
        ]);

        DB::table('cat_redesconatrib')->insert([
            'id'=>"4",
            'red'=>"Reunión de la Red de Escuelas Judiciales de los Estados de los Estados de la República Mexicana",
            'fechaInicio'=>"2023-11-27",
            'fechaFin'=>"2023-11-28",
            'activo'=> 1,
            'landingPage'=> "HTML4",
        ]);

        DB::table('cat_redesconatrib')->insert([
            'id'=>"5",
            'red'=>"Reunión de la Red de Mecanismos Alternativos de Solución de Controversias",
            'fechaInicio'=>"2023-11-27",
            'fechaFin'=>"2023-11-30",
            'activo'=> 1,
            'landingPage'=> "HTML5",
        ]);

        DB::table('cat_redesconatrib')->insert([
            'id'=>"6",
            'red'=>"Reunión de la Red de Centros de Convivencias Familiar Supervisada",
            'fechaInicio'=>"2023-11-27",
            'fechaFin'=>"2023-11-30",
            'activo'=> 1,
            'landingPage'=> "HTML6",
        ]);

        //Red desabiltada
        DB::table('cat_redesconatrib')->insert([
            'id'=>"7",
            'red'=>"Reunión de la Red de Juezas y Jueces Orales, Civiles, Mercantiles y de Extinción de Dominio",
            'fechaInicio'=>"2023-11-08",
            'fechaFin'=>"2023-11-15",
            'activo'=> 0,
            'landingPage'=> "HTML7",
        ]);

        //Red desabiltada
        DB::table('cat_redesconatrib')->insert([
            'id'=>"8",
            'red'=>"Reunión de la Red de Oficiales Mayores y Directores Generales de Administración de los Poderes Judiciales de la República Mexicana",
            'fechaInicio'=>"2023-11-08",
            'fechaFin'=>"2023-11-15",
            'activo'=> 0,
            'landingPage'=> "HTML8",
        ]);

        DB::table('cat_redesconatrib')->insert([
            'id'=>"9",
            'red'=>"Red Nacional de Archivos Judiciales",
            'fechaInicio'=>"2023-11-27",
            'fechaFin'=>"2023-11-28",
            'activo'=> 1,
            'landingPage'=> "HTML9",
        ]);
    }
}
