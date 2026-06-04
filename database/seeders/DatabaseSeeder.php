<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
   public function run(): void
{
    $this->call(CourseSeeder::class);
    $this->call(CourseSeeder2::class);
    $this->call(TestimonialSeeder::class);
    $this->call(ExamSeeder::class);
    $this->call(ExamPrepSeeder::class);
}
}
