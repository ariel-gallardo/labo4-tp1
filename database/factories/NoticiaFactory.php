<?php

namespace Database\Factories;

use App\Models\Noticia;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoticiaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Noticia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->title(),
            'resumen' => $this->faker->realText(),
            'imagen' => $this->faker->imageUrl(),
            'contenido' => $this->faker->realText(),
            'publica' => $this->faker->regexify('[yn]'),
            'fecha' => $this->faker->date(),
            'idEmpresa' => $this->faker->numberBetween(1,50)
        ];
    }
}
