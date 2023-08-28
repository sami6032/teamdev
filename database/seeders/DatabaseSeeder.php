<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Entreprise;
use App\Models\Offre;
use App\Models\Service;
use Database\Seeders\UsersSeeder;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         $this->call([
             UsersSeeder::class
         ]);

         $this->call([
             EvenementSeeder::class
         ]);
         $this->call([
            CategorySeeder::class
         ]);

        \App\Models\User::factory(5)->create();
         Entreprise::factory(5)->create();
        Service::factory(5)->create();
        Offre::factory(8)->create();
        Blog::factory(8)->create();
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
