<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoComida;

class TipoComidaSeeder extends Seeder
{
    public function run(): void
    {
        $categorias = ['Bebidas', 'Postres', 'Platillos Fuertes', 'Entradas', 'Sopas'];
        
        foreach ($categorias as $categoria) {
            TipoComida::create(['nombre_categoria' => $categoria]);
        }
    }
}