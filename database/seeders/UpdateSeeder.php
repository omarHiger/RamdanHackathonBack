<?php

namespace Database\Seeders;

use App\Models\Update;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $updates = [
            [
                'funding_request_id' => 1, // Replace with actual funding request ID
                'title' => 'مشروع لتطوير تطبيقات الجوال',
                'description' => 'تم إطلاق النموذج الأولي للتطبيق، وجاري جمع التعليقات من المستخدمين.',
                'images' => '',
                'created_at' => Carbon::make('2023-10-26')
            ],
            [
                'funding_request_id' => 1, // Replace with actual funding request ID
                'title' => 'مشروع لتطوير تطبيقات الجوال',
                'description' => 'تم إجراء تعديلات على النموذج الأولي بناءً على التعليقات، وجاري العمل على تحسين الأداء.',
                'images' => '',
                'created_at' => Carbon::make('2024-1-20')
            ],
            [
                'funding_request_id' => 2, // Replace with actual funding request ID
                'title' => 'فكرة لإنشاء منصة تعليمية عبر الإنترنت',
                'description' => ' تم تصميم واجهة المنصة، وجاري العمل على تطوير المحتوى التعليمي',
                'images' => '',
                'created_at' => Carbon::make('2023-8-9')
            ],
            [
                'funding_request_id' => 2, // Replace with actual funding request ID
                'title' => 'فكرة لإنشاء منصة تعليمية عبر الإنترنت',
                'description' => 'تم الانتهاء من تطوير أول 100 دورة تعليمية',
                'images' => '',
                'created_at' => Carbon::make('2023-12-14')
            ],
            [
                'funding_request_id' => 2, // Replace with actual funding request ID
                'title' => 'فكرة لإنشاء منصة تعليمية عبر الإنترنت',
                'description' => 'تم تسجيل 1,000 مستخدم على المنصة.',
                'images' => '',
                'created_at' => Carbon::make('2024-4-19')
            ],
            [
                'funding_request_id' => 3, // Replace with actual funding request ID
                'title' => 'مشروع لإنشاء متجر إلكتروني',
                'description' => 'تم توقيع اتفاقيات مع 50 مورد منتجات',
                'images' => '',
                'created_at' => Carbon::make('2023-05-04')
            ],
            [
                'funding_request_id' => 3, // Replace with actual funding request ID
                'title' => 'مشروع لإنشاء متجر إلكتروني',
                'description' => ' تم إطلاق المتجر الرسمي على الإنترنت.',
                'images' => '',
                'created_at' => Carbon::make('2023-09-03')
            ],
            [
                'funding_request_id' => 4, // Replace with actual funding request ID
                'title' => 'فكرة لتطوير برنامج لإدارة المشاريع',
                'description' => 'تم الانتهاء من تطوير ميزات إدارة المهام وإدارة الوقت.',
                'images' => '',
                'created_at' => Carbon::make('2023-10-04')
            ],
            [
                'funding_request_id' => 4, // Replace with actual funding request ID
                'title' => 'فكرة لتطوير برنامج لإدارة المشاريع',
                'description' => 'تم تحقيق 100 عملية بيع للبرنامج خلال 6 أشهر',
                'images' => '',
                'created_at' => Carbon::make('2024-04-04')
            ],

        ];
        foreach ($updates as $update) {
            Update::create($update);
        }
    }
}
