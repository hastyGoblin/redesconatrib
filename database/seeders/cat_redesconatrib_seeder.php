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
        	'red'=>"Reunión de la Red de Cooperación para la Protección de la Niñez",
        	'activo'=> 1,
            'landingPage'=> "HTML1",
        	'created_at'=>Carbon::now(),
        	'updated_at'=>Carbon::now(),
        ]);//

        DB::table('cat_redesconatrib')->insert([
        	'red'=>"Reunión de la Red Nacional de Estadísticas Judiciales",
        	'activo'=> 1,
            'landingPage'=> "HTML2",
        	'created_at'=>Carbon::now(),
        	'updated_at'=>Carbon::now(),
        ]);//

        DB::table('cat_redesconatrib')->insert([
        	'red'=>"Reunión Nacional del Sistema Integral de Justicia Penal para Adolescentes",
        	'activo'=> 1,
            'landingPage'=> "HTML3",
        	'created_at'=>Carbon::now(),
        	'updated_at'=>Carbon::now(),
        ]);//
        DB::table('cat_redesconatrib')->insert([
        	'red'=>"Reunión de la Red de Escuelas Judiciales de los Estados de los Estados de la República Mexicana",
        	'activo'=> 1,
            'landingPage'=> "HTML4",
        	'created_at'=>Carbon::now(),
        	'updated_at'=>Carbon::now(),
        ]);//
        DB::table('cat_redesconatrib')->insert([
        	'red'=>"Reunión de la Red de Centros de Convivencias Familiar Supervisada",
        	'activo'=> 1,
            'landingPage'=> "HTML5",
        	'created_at'=>Carbon::now(),
        	'updated_at'=>Carbon::now(),
        ]);//
        DB::table('cat_redesconatrib')->insert([
        	'red'=>"Reunión de la Red de Juezas y Jueces Orales, Civiles, Mercantiles y de Extinción de Dominio",
        	'activo'=> 1,
            'landingPage'=> "HTML6",
        	'created_at'=>Carbon::now(),
        	'updated_at'=>Carbon::now(),
        ]);//
        DB::table('cat_redesconatrib')->insert([
        	'red'=>"Reunión de la Red de Oficiales Mayores y Directores Generales de Administración de los Poderes Judiciales de la República Mexicana",
        	'activo'=> 1,
            'landingPage'=> "HTML7",
        	'created_at'=>Carbon::now(),
        	'updated_at'=>Carbon::now(),
        ]);//
        DB::table('cat_redesconatrib')->insert([
        	'red'=>"Red Nacional de Archivos Judiciales",
        	'activo'=> 1,
            'landingPage'=> "HTML8",
        	'created_at'=>Carbon::now(),
        	'updated_at'=>Carbon::now(),
        ]);//
        /*DB::table('cat_redesconatrib')->insert([
        	'red'=>"RED NACIONAL DE OFICIALES MAYORES Y DIRECTORES GENERALES DE ADMINISTRACION DE LOS PODERES JUDICIALES DE LA REPUBLICA MEXICANA",
        	'activo'=> 1,
            'landingPage'=> "HTML9",
        	'created_at'=>Carbon::now(),
        	'updated_at'=>Carbon::now(),
        ]);*/
    }
}
