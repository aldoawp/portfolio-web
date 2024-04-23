<?php

namespace Database\Seeders;

use App\Models\Projects;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Aldo Arista',
            'email' => 'aristaaldo2@gmail.com',
            'password' => bcrypt('password'),
        ]);

        Projects::factory(30)->create([
            'project_name' => 'Test Project',
            'category' => 'Web Application',
            'members' => 1,
            'company' => 'Augmentum',
            'time_completion' => 4,
            'overview' => 'Lorem Ipsum',
            'scale' => 'medium',
            'status' => 'finished',
            'challenges' => 'Lorem Ipsum',
            'solutions' => 'Lorem Ipsum',
            'tech_stack' => 'Lorem Ipsum',
            'performance_metrics' => 'Lorem Ipsum',
            'impacts' => 'Lorem Ipsum',
            'lesson_learned' => 'Lorem Ipsum',
        ]);
        
    }
}
