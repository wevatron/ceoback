<?php

use Illuminate\Database\Seeder;

class estadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
    //     $estados = DB::connection('estados')->table('c_estados')->get();

    //    foreach ($estados as $estado) {
    //     DB::connection('mysql')->table('c_estados_reps')->insert([
    //         'clave' => $estado->clave,
    //         'nombre' => $estado->nombre
    //     ]);
    //    }
    DB::connection('mysql')->table('estados')->insert([
        'descripcion' => 'Bazar',
        'accion' => 'ninguno'
    ]);
    DB::connection('mysql')->table('estados')->insert([
        'descripcion' => 'Aprende',
        'accion' => 'ninguno'
    ]);
   

    }
}
