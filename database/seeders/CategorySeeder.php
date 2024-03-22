<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            'البرمجة',
            'التسويق الرقمي',
            'التصميم الجرافيكي',
            'إدارة المشاريع',
            'اللغة الإنجليزية',
            'الكتابة الإبداعية',
            'التصوير الفوتوغرافي',
            'التحليل الإحصائي',
            'التواصل الفعال',
            'القيادة',
            'التطوير الذاتي',
            'الإلقاء والخطابة',
            'الإدارة الزمنية',
            'الريادة والابتكار',
            'العمل الجماعي',
            'العمل تحت الضغط',
            'العمل عن بعد',
            'العمل الحر',
            'العمل الطوعي',
            'العمل الخيري'
        ]; // Add more categories as per your requirements

        $category_records = [];

        foreach ($categories as $category) {
            $category_records[] = [
                'name' => $category,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('categories')->insert($category_records);


    }
}
