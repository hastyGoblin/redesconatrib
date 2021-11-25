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
        	'red'=>"RED DE LOS CENTROS DE CONVIVENCIA FAMILIAR SUPERVISADA Y AFINES DE LA REPUBLICA MEXICANA",
        	'activo'=> 1,
            'landingPage'=> "HTML1",
        	'created_at'=>Carbon::now(),
        	'updated_at'=>Carbon::now(),
        ]);//

        DB::table('cat_redesconatrib')->insert([
        	'red'=>"RED LAS ESCUELAS JUDICIALES DE LOS ESTADOS DE LA REPUBLICA MEXICANA",
        	'activo'=> 1,
            'landingPage'=> "HTML2",
        	'created_at'=>Carbon::now(),
        	'updated_at'=>Carbon::now(),
        ]);//

        DB::table('cat_redesconatrib')->insert([
        	'red'=>"RED NACIONAL DE ESTADISTICAS JUDICIALES",
        	'activo'=> 1,
            'landingPage'=> "HTML3",
        	'created_at'=>Carbon::now(),
        	'updated_at'=>Carbon::now(),
        ]);//
        DB::table('cat_redesconatrib')->insert([
        	'red'=>"RED NACIONAL DE JUEZAS Y JUECES ORALES CIVILES, MERCANTILES Y DE EXTINCION DE DOMINIO",
        	'activo'=> 1,
            'landingPage'=> "HTML4",
        	'created_at'=>Carbon::now(),
        	'updated_at'=>Carbon::now(),
        ]);//
        DB::table('cat_redesconatrib')->insert([
        	'red'=>"RED NACIONAL DE MECANISMOS ALTERNATIVOS DE SOLUCION DE CONTROVERSIAS",
        	'activo'=> 1,
            'landingPage'=> "HTML5",
        	'created_at'=>Carbon::now(),
        	'updated_at'=>Carbon::now(),
        ]);//
        DB::table('cat_redesconatrib')->insert([
        	'red'=>"RED MEXICANA DE COOPERACION JUDICIAL PARA LA PROTECCION DE LA NIÑEZ",
        	'activo'=> 1,
            'landingPage'=> "HTML6",
        	'created_at'=>Carbon::now(),
        	'updated_at'=>Carbon::now(),
        ]);//
        DB::table('cat_redesconatrib')->insert([
        	'red'=>"RED NACIONAL DEL SISTEMA INTEGRAL DE JUSTICIA PENAL PARA ADOLECENTES",
        	'activo'=> 1,
            'landingPage'=> "HTML7",
        	'created_at'=>Carbon::now(),
        	'updated_at'=>Carbon::now(),
        ]);//
        DB::table('cat_redesconatrib')->insert([
        	'red'=>"RED NACINAL DE ARCHIVOS JUDICIALES",
        	'activo'=> 1,
            'landingPage'=> "HTML8",
        	'created_at'=>Carbon::now(),
        	'updated_at'=>Carbon::now(),
        ]);//
        DB::table('cat_redesconatrib')->insert([
        	'red'=>"RED NACIONAL DE OFICIALES MAYORES Y DIRECTORES GENERALES DE ADMINISTRACION DE LOS PODERES JUDICIALES DE LA REPUBLICA MEXICANA",
        	'activo'=> 1,
            'landingPage'=> "HTML9",
        	'created_at'=>Carbon::now(),
        	'updated_at'=>Carbon::now(),
        ]);//
    }
}
