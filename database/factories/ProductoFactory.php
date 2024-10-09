<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->word(), // Genera una palabra aleatoria
            'descripcion' => $this->faker->sentence(), // Genera una oración aleatoria
            'precio' => $this->faker->randomFloat(2, 10, 1000), // Precio aleatorio entre 10 y 1000
            'stock' => $this->faker->numberBetween(0, 100), // Stock aleatorio entre 0 y 100
        ];
    }
}


