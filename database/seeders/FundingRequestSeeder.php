<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FundingRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $descriptions = [
            'مشروع لتطوير تطبيقات الجوال',
            'فكرة لإنشاء منصة تعليمية عبر الإنترنت',
            'مشروع لإنشاء متجر إلكتروني',
            'فكرة لتطوير برنامج لإدارة المشاريع',
            'مشروع لإنشاء موقع ويب للتجارة الإلكترونية',
            'إقامة فاعلية لتقديم لابتوبات للطلاب',
            'فكرة لإنشاء منصة للتواصل الاجتماعي',
            'مشروع لإنشاء تطبيق للتجارة الإلكترونية',
            'فكرة لتطوير برنامج لإدارة الأعمال',
            'مشروع لإنشاء موقع ويب للتسوق الإلكتروني'
        ]; // Add more descriptions as per your requirements

        $amounts = [5000, 10000, 15000, 20000, 25000, 30000, 35000, 40000, 45000, 50000]; // Add more amounts as per your requirements

        $funding_requests = [];

        for ($i = 0; $i < 10; $i++) {
            $funding_requests[] = [
                'youth_id' => $i + 1, // Assuming that the youths IDs are from 1 to 10
                'admin_id' => null, // Assuming that the request is sent by a youth
                'is_accepted' => rand(0, 1), // Randomly assign whether the request is accepted or not
                'description' => $descriptions[$i],
                'amount' => $amounts[$i],
                'file' => 'path/to/file.pdf', // Replace with the path to your file
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('funding_requests')->insert($funding_requests);
    }
}
