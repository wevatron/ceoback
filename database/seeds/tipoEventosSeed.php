<?php

use Illuminate\Database\Seeder;

class tipoEventosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("c_tipo_eventos")->insert([
            'descripcion' => 'Talleres'
        ]);
        DB::table("c_tipo_eventos")->insert([
            'descripcion' => 'Conferencia'
        ]);
        DB::table("c_tipo_eventos")->insert([
           'descripcion' => 'Magistral' 
        ]);
        DB::table("c_tipo_eventos")->insert([
            'descripcion' => 'Panoramico'
        ]);
    }
}