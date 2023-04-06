<?php

namespace Database\Seeders;

use App\Models\direccionmodel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class direccionesseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        direccionmodel::factory(50)->create();
    }
}
