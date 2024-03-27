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
            "التعليم والتدريب المعلمي",
            "التكنولوجيا والبرمجة",
            "الأعمال والإدارة",
            "الصحة والعلوم الطبية",
            "الفنون والثقافة",
            "اللغات والترجمة",
            "العلوم الاجتماعية والإنسانية",
            "التصميم والفنون الإبداعية",
            "البيئة والاستدامة",
            "التطوير الشخصي والمهني"
        ];

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
