<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    public function run()
    {
        // Crea 50 productos ficticios
        Producto::factory()->count(50)->create();
    }
}

