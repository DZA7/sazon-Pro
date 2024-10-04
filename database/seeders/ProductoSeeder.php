<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    public function run()
    {
        // Crear 50 productos ficticios usando la factory
        Producto::factory(50)->create();
    }
}

