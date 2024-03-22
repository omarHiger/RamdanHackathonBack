<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $goals = [
            'أرغب في تطوير مهاراتي في التسويق الرقمي',
            'أرغب في تعلم البرمجة',
            'أرغب في تعلم التصميم الجرافيكي',
            'أرغب في تعلم إدارة المشاريع',
            'أرغب في تعلم التحليل المالي',
            'أرغب في تعلم الكتابة الإبداعية',
        ]; // Add more goals as per your requirements

        $course_requests = [];

        $has_rating = false;

        for ($i = 0; $i < 6; $i++) {
            $course_requests[] = [
                'rating' => $has_rating ? rand(1, 5) : null, // Randomly assign a rating from 1 to 5
                'is_accepted' => rand(0, 1), // Randomly assign whether the request is accepted or not
                'youth_id' => $i + 1, // Assuming that the youths IDs are from 1 to 10
                'course_id' => $i + 1, // Assuming that the courses IDs are from 1 to 10
                'goal' => $goals[$i],
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $has_rating = !$has_rating;
        }

        DB::table('course_requests')->insert($course_requests);

    }
}
