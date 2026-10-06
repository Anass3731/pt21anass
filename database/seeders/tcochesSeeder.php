<?php

namespace Database\Seeders;

use App\Models\tcoches;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tcochesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tcoches::truncate(); //borra todos los datos de la tabla (PARA NO REPETIR)
    
        tcoches::factory(50)->create();
        }
    }

