<?php

use Illuminate\Database\Seeder;
use App\Departamento;
use App\Empleado;
class Prueba9TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Empleado::class, 5)->create();
        factory(Departamento::class, 5)->create();
    }
}
