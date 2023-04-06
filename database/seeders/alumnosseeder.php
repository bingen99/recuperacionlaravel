<?php

namespace Database\Seeders;

use App\Models\alumnomodel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class alumnosseeder extends Seeder
{

    public function run()
    {
        alumnomodel::factory(50)->create(); //crea 50 alumnos con datos aleatorios
    }
}
