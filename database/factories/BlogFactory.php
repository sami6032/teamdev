<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        $user_id= User::pluck('id');
        $category_id= Category::pluck('id');
        return [
            'titre' => $this->faker->sentence,
            'photo' => $this->faker->imageUrl(),
            'contenu' => $this->faker->paragraph,
            'user_id' =>  $this-> faker->randomElement($user_id),
            'category_id' => $this-> faker->randomElement($category_id),      
          ];
    }
}
