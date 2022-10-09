<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Receta;//no se crea con el --model=curso

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class RecetaFactory extends Factory
{   
    
    //esto no lo crea con php artisan make:factory CursoFactory --model=Curso
    /**
     * The name of the factory's corresponding model
     * 
     * @var string
     * 
     */
    protected $model = Receta::class;
    //hasta aqui no lo crea



    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->sentence(),
            'categoria' => $this->faker->randomElement(['Guiso', 'Plancha']),
            'ingredientes' => $this->faker->paragraph(),
            'preparacion' => $this->faker->paragraph()
            
        ];
    }
}
