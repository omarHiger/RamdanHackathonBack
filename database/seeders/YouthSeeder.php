<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Course;
use App\Models\Mentor;
use App\Models\Youth;
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
        $education_levels = ['تعليم ابتدائي', 'تعليم اعدادي', 'تعليم ثانوي', 'تعليم جامعي'];

        $first_names = ['هدى', 'سحر', 'علي', 'مالك', 'حسين', 'عمر', 'محمود', 'خالد', 'معاذ', 'موفق']; // Add more Arabic first names
        $last_names = ['شاكر', 'جوار', 'الحمصي', 'العزيز', 'المجيد', 'هيجر', 'سلامة', 'الحموي', 'القباني', 'دركل']; // Add more Arabic last names
        $phone_numbers = ['+971501234567', '+966501234567', '+973501234567', '+962501234567', '+963937415011', '+963988305601', '+966501234567', '+973501234567', '+962501234567', '+965501234567']; // Add more Middle East phone numbers
        $locations = ['دمشق', 'بيروت', 'عمان', 'الرياض', 'أبو ظبي', 'القاهرة', 'دمشق', 'بيروت', 'عمان', 'الرياض', 'أبو ظبي']; // Add more Middle East locations
        $user_name = ['huda', 'sahar', 'ali', 'malek', 'hasen', 'omar', 'mahmood', 'khaled', 'mouaz', 'mofaq'];
        $youths = [];

        for ($i = 0; $i < 10; $i++) {
            $youths[] = [
                'first_name' => $first_names[$i],
                'last_name' => $last_names[$i],
                'email' => $user_name[$i] . '@gmail.com',
                'password' => Hash::make('password'),
                'education_level' => $education_levels[array_rand($education_levels)],
                'location' => $locations[$i],
                'phone_number' => $phone_numbers[$i],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('youths')->insert($youths);

        $youths = Youth::all();
        $levels = ['مبتدئ', 'متوسط', 'متقدم'];
        $cats = [];
        $categories = Category::all();
        foreach ($youths as $youth) {
            $cats[] = [
                "user_id" => $youth->id,
                'user_type' => Youth::class,
                "category_id" => $categories[array_rand($categories->toArray())]->id,
                "level" => $levels[array_rand($levels)]
            ];
        }
        DB::table('user_category')->insert($cats);

        // mentors
        $positions = [
            "مشرف تربوي",
            "مطور برمجيات",
            "مدير موارد بشرية",
            "طبيب / طبيبة",
            "منتج ثقافي",
            "مترجم / مترجمة",
            "باحث اجتماعي",
            "مدير إبداعي",
            "مهندس بيئي",
            "مستشار مهني",
        ];

        $abouts = [
            'يعمل على توجيه وإشراف المعلمين والمعلمات في المدارس. يسعى لتحسين العملية التعليمية والتربوية',
            'متخصص في تطوير البرمجيات والتطبيقات. يكتب ويختبر الشيفرة لإنشاء حلول تقنية',
            'يدير الجوانب المتعلقة بالموظفين في المؤسسة، مثل التوظيف والتدريب والتطوير وإدارة الأجور',
            'متخصص في تشخيص وعلاج الأمراض والإصابات. يعمل في المستشفيات أو العيادات الطبية',
            'يعمل على تطوير وتسويق المنتجات الثقافية مثل الكتب والأفلام والمعارض الفنية',
            'يقوم بترجمة النصوص من لغة إلى أخرى. يعمل في مجالات مثل الأدب والأعمال والترجمة الفورية',
            'يدرس الظواهر الاجتماعية ويحللها. يجمع البيانات ويقدم توصيات للمجتمع والحكومة',
            'يشرف على الجوانب الإبداعية في المشاريع والحملات التسويقية. يسعى لتطوير أفكار جديدة ومبتكرة',
            'يعمل على حماية البيئة وتطوير حلول مستدامة للقضايا البيئية',
            'يقدم استشارات متخصصة في مجالات مثل الأعمال والتطوير الشخصي والتوجيه المهني'
        ];

        for ($i = 0; $i < 10; $i++) {
            $mentors[] = [
                'first_name' => $first_names[$i],
                'last_name' => $last_names[$i],
                'email' => $user_name[$i] . '_mentor@gmail.com',
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
