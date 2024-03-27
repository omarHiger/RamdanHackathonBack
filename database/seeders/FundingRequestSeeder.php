<?php

namespace Database\Seeders;

use App\Models\Donation;
use App\Models\Donor;
use App\Models\FundingRequest;
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
        $titles = [
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
        $descriptions = [
            'يهدف هذا المشروع إلى تطوير تطبيقات محمولة تلبي احتياجات المستخدمين على الهواتف الذكية. يمكن أن يكون التطبيق متعلقًا بالترفيه، الصحة، التعليم، أو أي مجال آخر.',
            'تهدف هذه الفكرة إلى إنشاء منصة تعليمية توفر محتوى تعليمي متنوع للطلاب والمتعلمين عبر الإنترنت. يمكن أن تشمل دروسًا في مجموعة متنوعة من المواضيع.',
            'يهدف هذا المشروع إلى إنشاء متجر إلكتروني يبيع منتجات مختلفة عبر الإنترنت. يمكن أن يكون المتجر متخصصًا في فئة معينة أو يقدم مجموعة متنوعة من المنتجات.',
            'يهدف هذا البرنامج إلى تسهيل إدارة المشاريع وتنظيم المهام والموارد. يمكن أن يكون مفيدًا للشركات والمؤسسات',
            'يهدف هذا المشروع إلى إنشاء موقع ويب يسمح للمستخدمين بشراء وبيع المنتجات عبر الإنترنت. يمكن أن يكون الموقع متعلقًا بفئة معينة أو يشمل مجموعة متنوعة من المنتجات.',
            'إقامة فاعلية لتقديم لابتوبات للطلاب',
            ' يمكن أن تكون هذه الفاعلية جزءًا من مبادرة لتوفير اللابتوبات للطلاب الذين يحتاجون إلى أجهزة للتعلم عن بُعد أو للدراسة',
            'مشروع لإنشاء تطبيق للتجارة الإلكترونية',
            'تهدف هذه الفكرة إلى إنشاء منصة تمكن المستخدمين من التواصل والتفاعل مع بعضهم البعض عبر الإنترنت. يمكن أن تكون المنصة متخصصة في مجال معين أو تكون عامة.',
            'يهدف هذا المشروع إلى تطوير تطبيق محمول'
        ]; // Add more descriptions as per your requirements

        $amounts = [5000, 10000, 15000, 20000, 25000, 30000, 35000, 40000, 45000, 50000]; // Add more amounts as per your requirements

        $funding_requests = [];

        for ($i = 0; $i < 10; $i++) {
            $funding_requests[] = [
                'youth_id' => $i + 1, // Assuming that the youths IDs are from 1 to 10
                'admin_id' => null, // Assuming that the request is sent by a youth
                'is_accepted' => rand(0, 1), // Randomly assign whether the request is accepted or not
                'title' => $titles[$i],
                'description' => $descriptions[$i],
                'amount' => $amounts[$i],
                'file' => 'path/to/file.pdf', // Replace with the path to your file
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('funding_requests')->insert($funding_requests);
        $requests = FundingRequest::all();
        $donors = Donor::all();
        $amounts = [100, 200, 300, 400, 500, 600];
        foreach ($requests as $item) {
            foreach ($donors as $donor) {
                Donation::create(
                    [
                        'donor_id' => $donor->id,
                        'funding_request_id' => $item->id,
                        'amount' => $amounts[array_rand($amounts)]
                    ]);
            }
        }
    }
}
