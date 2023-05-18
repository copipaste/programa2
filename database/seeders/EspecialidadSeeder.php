<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $especialidades = ['INSTRUCTOR CALISTENIA','INSTRUCTOR AEROBIC','INSTRUCTOR ZUMBA','ENTRENADOR PERSONAL'];

        foreach($especialidades as $especialidad){
            DB::table('especialidads')->insert([
                'nombre' => $especialidad,
            ]);
        }
    }
}
