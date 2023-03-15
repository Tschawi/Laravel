<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Application;
use App\Models\Event;
use Database\Factories\ApplicationFactory;
use Database\Factories\EventFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        Event::truncate();
        Application::truncate();

        Event::factory()->count(50)->create();
        Application::factory()->count(50)->create();
    }
}
