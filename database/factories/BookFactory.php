<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'date_publication' => now(),
            'page_nbr' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'user_id' =>  User::factory(),
            'authors_id' => Author::factory() 
         

        ];
    }
}
