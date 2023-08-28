<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entreprise>
 */
class EntrepriseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user_id= User::pluck('id');

        return [
            'name' => $this->faker->name(),
            'domaine' =>$this->faker->sentence(1, true),
            'anne' => $this->faker->date,
            'photo' => $this->faker->imageUrl(),
            'mission' => $this->faker->paragraph(2),
            'vision' => $this->faker->paragraph(1),
            'user_id' => $this-> faker->randomElement($user_id),      
          ];
    }
}
