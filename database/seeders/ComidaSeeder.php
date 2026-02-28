<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comida;

class ComidaSeeder extends Seeder
{
    public function run(): void
    {
        Comida::create([
            'nombre_comida' => 'Tacos al pastor',
            'costo' => 65.50,
            'detalle_comida' => 'Con todo y piña',
            'id_tipo_comida' => 3 
        ]);
        
        Comida::create([
            'nombre_comida' => 'Coca-Cola bien fría',
            'costo' => 25.00,
            'detalle_comida' => 'Para bajar los tacos',
            'id_tipo_comida' => 1 
        ]);
    }
}