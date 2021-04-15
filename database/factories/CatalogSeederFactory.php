<?php

namespace Database\Factories;

use App\Models\Catalog;
use Illuminate\Database\Eloquent\Factories\Factory;

class CatalogSeederFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Catalog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

        'catalog'->$this->faker->word,
        'autor'->$this->faker->word,
        'titulo'->$this->faker->sentence,
        'descripcion'->$this->faker->paragraph,
        
        ];
    }
}
