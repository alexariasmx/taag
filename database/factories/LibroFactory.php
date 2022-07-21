<?php

namespace Database\Factories;

use App\Models\libros\libro;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LibroFactory extends Factory
{
    protected $model=libro::class;

    public function definition()
    {
        return [
            "autor"=>$this->faker->text(20),
            "titulo"=>$this->faker->text(25),
            "edicion"=>$this->faker->text(10),
            "datosDePublicación"=>$this->faker->text(15),
            "tipoDeContenido"=>$this->faker->text(80),
            "restricciones"=>$this->faker->text(10),
            "materia"=>$this->faker->text(80),
            "proveedor"=>$this->faker->text(10),
            "imagen"=>$this->faker->text(10),
        ];
    }
}
