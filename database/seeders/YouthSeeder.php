<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class YouthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $education_levels = ['تعليم ابتدائي','تعليم اعدادي','تعليم ثانوي','تعليم جامعي'];

        $first_names = ['هدى', 'سحر', 'علي', 'مالك', 'حسين','عمر','محمود','خالد','معاذ','موفق']; // Add more Arabic first names
        $last_names = ['شاكر', 'جوار', 'الحمصي', 'العزيز', 'المجيد','هيجر','سلامة','الحموي','القباني','دركل']; // Add more Arabic last names
        $phone_numbers = ['+971501234567', '+966501234567', '+973501234567', '+962501234567', '+963937415011','+963988305601', '+966501234567', '+973501234567', '+962501234567', '+965501234567']; // Add more Middle East phone numbers
        $locations = ['دمشق', 'بيروت', 'عمان', 'الرياض', 'أبو ظبي','القاهرة','دمشق', 'بيروت', 'عمان', 'الرياض', 'أبو ظبي']; // Add more Middle East locations
        $user_name = ['huda', 'sahar', 'ali', 'malek', 'hasen','omar','mahmood','khaled','mouaz','mofaq'];
        $youths = [];

        for ($i = 0; $i < 10; $i++) {
            $youths[] = [
                'first_name' => $first_names[$i],
                'last_name' => $last_names[$i],
                'email' => $user_name[$i].'@gmail.com',
                'password' => Hash::make('password'),
                'education_level' => $education_levels[array_rand($education_levels)],
                'location' => $locations[$i],
                'phone_number' => $phone_numbers[$i],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('youths')->insert($youths);

        // mentors
        $positions = [
            "Backend مطور",
            "Frontend مطور",
            "مهندس البرمجيات",
            "محلل النظم",
            "مدير المشروع الفني",
            "مصمم الجرافيك",
            "مصمم الواجهة الأمامية",
            "مصمم UX/UI",
            "مصمم الويب",
            "مدير الفن",
            "مدرب التطوير الشخصي",
            "مدرب التطوير المهني",
            "مدرب التقنية",
            "مدرب اللغات",
            "مدرب القيادة"
        ];

        $abouts = [
            'مدرب محترف في التسويق الرقمي',
            'مدرب محترف في البرمجة',
            'مدرب محترف في التصميم الجرافيكي',
            'مدرب محترف في إدارة المشاريع',
            'مدرب محترف في التحليل المالي',
            'مدرب محترف في الكتابة الإبداعية',
            'مدرب محترف في التصوير الفوتوغرافي',
            'مدرب محترف في التحليل الإحصائي',
            'مدرب محترف في التواصل الفعال',
            'مدرب محترف في القيادة'
        ];



        for ($i = 0; $i < 10; $i++) {
            $mentors[] = [
                'first_name' => 'المدرب ' . $first_names[$i],
                'last_name' => $last_names[$i],
                'email' => $user_name[$i]. '_mentor'.'@gmail.com',
                'password' => Hash::make('password'),
                'position' => $positions[array_rand($positions)],
                'location' => $locations[$i],
                'about' => $abouts[$i],
                'phone_number' => $phone_numbers[$i],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('mentors')->insert($mentors);
    }
}
