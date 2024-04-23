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

        Projects::factory()->create([
            'project_name' => 'PT Karyamega Putra Mandiri: POS Software',
            'category' => 'Web Application',
            'members' => 1,
            'company' => 'PT KPM',
            'time_completion' => 4,
            'overview' => 'PT Kaymega Putra Mandiri, a leading retail company in Indonesia, recognized the need to streamline their sales processes and enhance customer experience. To achieve this goal, they decided to invest in a modern Point of Sale (POS) system that could efficiently manage transactions, inventory, and customer interactions.',
            'scale' => 'Medium',
            'status' => 'Progress',
            'challenges' => 'Developing a POS system for PT Kaymega Putra Mandiri presented several challenges: Complexity of Retail Operations, Integration with Existing Systems, User-Friendly Interface.',
            'solutions' => 'To address these challenges, we adopted the following strategies: Customization, API Integration, User-Centric Design.',
            'tech_stack' => 'The POS website application for PT Kaymega Putra Mandiri was developed using a robust tech stack, including: Frontend: HTML5, CSS3, JavaScript (Vue.js), Backend: Laravel (PHP), MySQL database, API Integration: RESTful APIs, JSON, Security: HTTPS, encryption algorithms, Deployment: Docker, AWS (Amazon Web Services).',
            'impacts' => "The implementation of the POS website application has led to several positive impacts on PT Kaymega Putra Mandiri's business: Increased Efficiency, Enhanced Data Visibility, Improved Customer Experience.",
            'lesson_learned' => 'The development of the POS website application for PT Kaymega Putra Mandiri taught us valuable lessons, including: Importance of Collaboration, Continuous Feedback Loop, Adaptability and Scalability.',
        ]);
        
        /* 
        Create me a case study with following context: I make a POS website application for PT Kaymega Putra Mandiri company.

        'overview'
        'challenges'
        'solutions'
        'tech_stack'
        'impacts'
        'lesson_learned'
        */
    }
}
