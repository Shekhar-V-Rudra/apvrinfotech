<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Portfolio;
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
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Portfolio::query()->insert([
            [
                'title' => 'Product Website',
                'category' => 'website',
                'image' => 'assets/portfolio01.png',
                'short_details' => 'Laravel, Tailwind',
                'description' => 'A modern product marketing website.',
                'project_url' => null,
                'is_active' => true,
                'sort_order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Yamikart Mobile App',
                'category' => 'mobile-app',
                'image' => 'assets/portfolio13.png',
                'short_details' => 'Flutter, Firebase',
                'description' => 'E-commerce mobile app.',
                'project_url' => null,
                'is_active' => true,
                'sort_order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Graphics Campaign',
                'category' => 'graphic-design',
                'image' => 'assets/portfolio04.png',
                'short_details' => 'Photoshop, Illustrator',
                'description' => 'Branding and digital graphics.',
                'project_url' => null,
                'is_active' => true,
                'sort_order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // rakeshApvr@183   // admin@apvrinfotech.com
    }
}
