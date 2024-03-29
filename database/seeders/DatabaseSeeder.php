<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // User::factory(10)->create();

        $this->call([
            CategorySeeder::class,
            YouthSeeder::class,
            AdminSeeder::class,
            CourseSeeder::class,
            FundingRequestSeeder::class,
            CourseRequestSeeder::class,
            UpdateSeeder::class,
        ]);

    }
}
