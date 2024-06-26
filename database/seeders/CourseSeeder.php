<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Course;
use App\Models\Mentor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
//        $levels = ['مبتدئ', 'متوسط', 'متقدم'];
//        $locations = ['عن بعد', 'دمشق', 'بيروت', 'عمان', 'الرياض', 'أبو ظبي', 'القاهرة', 'المنامة', 'الكويت', 'الدوحة'];
//        $titles = ['دورة في التسويق الرقمي', 'دورة في البرمجة', 'دورة في التصميم الجرافيكي', 'دورة في إدارة المشاريع', 'دورة في التحليل المالي', 'دورة في الكتابة الإبداعية', 'دورة في التصوير الفوتوغرافي', 'دورة في التحليل الإحصائي', 'دورة في التواصل الفعال', 'دورة في القيادة', 'دورة في التطوير الذاتي', 'دورة في الإلقاء والخطابة', 'دورة في الإدارة الزمنية', 'دورة في الريادة والابتكار', 'دورة في العمل الجماعي', 'دورة في العمل تحت الضغط', 'دورة في العمل عن بعد', 'دورة في العمل الحر', 'دورة في العمل الطوعي', 'دورة في العمل الخيري'];
//        $descriptions = ['تعلم أساسيات التسويق الرقمي', 'تعلم أساسيات البرمجة', 'تعلم أساسيات التصميم الجرافيكي', 'تعلم أساسيات إدارة المشاريع', 'تعلم أساسيات التحليل المالي', 'تعلم أساسيات الكتابة الإبداعية', 'تعلم أساسيات التصوير الفوتوغرافي', 'تعلم أساسيات التحليل الإحصائي', 'تعلم أساسيات التواصل الفعال', 'تعلم أساسيات القيادة', 'تعلم أساسيات التطوير الذاتي', 'تعلم أساسيات الإلقاء والخطابة', 'تعلم أساسيات الإدارة الزمنية', 'تعلم أساسيات الريادة والابتكار', 'تعلم أساسيات العمل الجماعي', 'تعلم أساسيات العمل تحت الضغط', 'تعلم أساسيات العمل عن بعد', 'تعلم أساسيات العمل الحر', 'تعلم أساسيات العمل الطوعي', 'تعلم أساسيات العمل الخيري'];
//
//        $courses = [];
//
//        $programming = [
//
//            'تعلم أساسيات البرمجة',
//            'تعلم اساسيات اطار العمل Laravel',
//            'تعلم ال api ضمن اطار العمل laravel',
//            'Html',
//            'Css'
//        ];

        $levels = ['مبتدئ', 'متوسط', 'متقدم'];
        $locations = ['عن بعد', 'دمشق', 'بيروت', 'عمان', 'الرياض', 'أبو ظبي']; // Add more Middle East locations
        $titles = [
            "تطوير مهارات التدريس الفعّال",
            "استراتيجيات التفاعل مع الطلاب في الفصل",
            "تصميم المناهج الدراسية الابتكارية",

            "برمجة تطبيقات الهواتف الذكية باستخدام React Native",
            "تطوير مواقع الويب باستخدام Django",
            "قواعد البيانات وSQL للمطورين",

            "إدارة المشروعات الصغيرة والمتوسطة",
            "استراتيجيات التسويق الرقمي",
            "مهارات القيادة وتطوير الفرق",

            "تغذية صحية وأسس الحمية الغذائية",
            "التعامل مع الضغط النفسي والتوتر",
            "أساسيات الطب والعلوم البيولوجية",

            "فنون الرسم والتصوير الفوتوغرافي",
            "تاريخ الفن والحضارات القديمة",
            "الأدب والشعر: قراءة وتحليل",

            "تعلم اللغة الإنجليزية من الصفر",
            "ترجمة النصوص الأدبية والتقنية",
            "اللغة الألمانية للمبتدئين",

            "علم النفس وفهم السلوك البشري",
            "اقتصاديات الأسرة والمجتمع",
            "تاريخ الحضارات والتطور الثقافي",

            "تصميم الجرافيك والإعلانات",
            "فن الرسم والتصوير الفني",
            "تصميم المنتجات والأثاث",

            "التحول نحو الطاقة المتجددة والحفاظ على البيئة",
            "إدارة المخلفات والتدوير",
            "الزراعة العضوية والزراعة المستدامة",

            "تطوير مهارات الاتصال والتفاوض",
            "التخطيط المهني وتحقيق الأهداف",
            "التفكير الإبداعي وحل المشكلات"
        ];
        $descriptions = [
            "هذا الكورس يهدف إلى تطوير مهارات المعلمين والمعلمات في مجال التدريس. سيتعلم المشاركون كيفية تحسين تجربة التعليم والتفاعل مع الطلاب. سيتم تغطية استراتيجيات فعّالة للتدريس، وكيفية تحفيز المشاركة النشطة من الطلاب، وكيفية التعامل مع التحديات التي يمكن أن تواجه المعلمين في الفصل الدراسي.",
            "هذا الكورس يهدف إلى تزويد المعلمين بمجموعة من الاستراتيجيات الفعّالة للتفاعل مع الطلاب في الفصل الدراسي. سيتعلم المشاركون كيفية خلق بيئة تفاعلية تشجع على المشاركة النشطة من الطلاب. من بين الاستراتيجيات المشمولة:
المناقشات الجماعية: تشجيع الطلاب على المشاركة في مناقشات مجموعية حول الموضوعات المختلفة.
الأنشطة التفاعلية: استخدام ألعاب، وتمارين، وأنشطة تعاونية لتحفيز الطلاب على التفاعل.
التحفيز الإيجابي: تقديم تقدير وتشجيع للطلاب عند المشاركة الفعّالة.
استخدام التكنولوجيا: توظيف الوسائل التقنية مثل الشاشات التفاعلية والتطبيقات لتحفيز الاهتمام والمشاركة.
هذا الكورس يساعد المعلمين على تطوير مهارات التفاعل الفعّال مع الطلاب، مما يسهم في تحسين تجربة التعلم وتحقيق نتائج أفضل.",
            "تصميم المناهج الدراسية الابتكارية يعد عاملاً أساسيًا في تحفيز الطلاب وجعل عملية التعلم أكثر إثارة وإلهامًا. يهدف إلى تحسين تجربة الطلاب من خلال تضمين التقنيات الحديثة واستخدام أساليب تفاعلية في المناهج الدراسية.

بعض النقاط المهمة حول تصميم المناهج الدراسية الابتكارية:

تخصيص الدروس: يتضمن تصميم المناهج تخصيص الدروس والأنشطة لتناسب احتياجات ومستوى الطلاب. يمكن تضمين أنشطة تفاعلية ومشاريع تعليمية تشجع الطلاب على المشاركة والاستكشاف.
استخدام التكنولوجيا: يمكن أن يحدث تحولًا كبيرًا في كيفية فهم الطلاب للمواد من خلال تضمين التقنيات الحديثة مثل الوسائط المتعددة والتطبيقات التفاعلية.
تحسين بيئة التعلم: يمكن لتصميم المناهج أن يساعد في تحسين بيئة الفصل الدراسي من خلال تنظيم الدروس والأنشطة بشكل أكثر كفاءة.
تطوير أهداف التعلم: يمكن للمعلمين تطوير أهداف محددة للفصل الدراسي وتصميم مناهج ملائمة لتحقيق هذه الأهداف.",
            "برمجة تطبيقات الهواتف الذكية باستخدام React Native: يهدف هذا الكورس إلى تعليمك كيفية بناء تطبيقات الهواتف الذكية باستخدام إطار العمل React Native. ستتعلم كيفية تطوير تطبيقات متعددة المنصات (Android و iOS) باستخدام لغة البرمجة JavaScript.",
            "تطوير مواقع الويب باستخدام Django: يركز هذا الكورس على تطوير مواقع الويب باستخدام إطار العمل Django. ستتعلم كيفية بناء تطبيقات الويب الديناميكية وإدارة قواعد البيانات باستخدام Python و Django.",
            "قواعد البيانات وSQL للمطورين: يهدف هذا الكورس إلى تعليمك أساسيات قواعد البيانات واستخدام لغة استعلام قواعد البيانات SQL. ستتعلم كيفية إنشاء وتحديث واستعلام قواعد البيانات باستخدام SQL.",


            "إدارة المشروعات الصغيرة والمتوسطة: يهدف هذا الكورس إلى تزويدك بمهارات إدارة المشروعات الصغيرة والمتوسطة. ستتعلم كيفية تخطيط وتنفيذ المشروعات، وكيفية التعامل مع المخاطر والجداول الزمنية والموارد.",
            "استراتيجيات التسويق الرقمي: يركز هذا الكورس على استراتيجيات التسويق عبر الإنترنت. ستتعلم كيفية استخدام وسائل التواصل الاجتماعي والإعلانات الرقمية وتحليل البيانات لتحقيق أهداف التسويق.",
            "مهارات القيادة وتطوير الفرق: يهدف هذا الكورس إلى تطوير مهارات القيادة الشخصية والفرقية. ستتعلم كيفية تحفيز الفرق وتطوير مهارات التوجيه واتخاذ القرارات الاستراتيجية.",

            "يركز هذا الكورس على توجيهات النظام الغذائي الصحي، مثل تناول الفواكه والخضروات، والحبوب الكاملة، ومنتجات الألبان قليلة الدهون، واللحوم قليلة الدهون، والأسماك، والدجاج.
يهدف إلى تعزيز الصحة العامة من خلال توجيهات غذائية متوازنة ومتنوعة",
            "يقدم هذا الكورس استراتيجيات للتعامل مع التوتر والضغط النفسي.
يشمل تقنيات مثل ممارسة الأنشطة البدنية، والتأمل، والضحك، والتواصل مع الآخرين",
            "يقدم هذا الكورس نظرة شاملة على هيكل ووظيفة وتطور النظم الحيوية.
يغطي مجالات مثل الأحياء الجزيئية، والبيئة، والتطور الحيوي، والعلوم الطبية",

            "يستهدف هذا الكورس المبتدئين والمحترفين على حد سواء. ستتعلم أساسيات الرسم والتصوير الفوتوغرافي، بما في ذلك تقنيات الإضاءة والتكوين والتحرير.
يمكن أن يشمل أيضًا دراسة الأعمال الفنية الكلاسيكية والحديثة.",
            "يقدم هذا الكورس نظرة تاريخية على تطور الفن والحضارات القديمة. ستتعلم عن الفنانين والأعمال الفنية البارزة في مختلف العصور والثقافات.
يمكن أن يشمل دراسة الفن المصري القديم، والفن اليوناني، والفن الروماني، والفن الإسلامي.",
            "يهدف هذا الكورس إلى تطوير مهارات قراءة وتحليل الأدب والشعر. ستتعلم كيفية فهم النصوص وتحليلها من خلال الأساليب الأدبية والسياق التاريخي.
يمكن أن يشمل دراسة الأعمال الأدبية الكلاسيكية والمعاصرة.",

            "يستهدف هذا الكورس المبتدئين الذين يرغبون في تعلم اللغة الإنجليزية. ستتعلم القواعد الأساسية والمفردات والمحادثة اليومية.
يمكن أن يشمل دراسة القواعد النحوية، والمحادثات العامة، والقراءة والكتابة.",
            "يركز هذا الكورس على تطوير مهارات الترجمة من وإلى اللغة الإنجليزية. ستتعلم كيفية التعبير عن المعاني بدقة وأسلوب ملائم.
يمكن أن يشمل ترجمة النصوص الأدبية والمقالات التقنية.",
            "يستهدف هذا الكورس المبتدئين الذين يرغبون في تعلم اللغة الألمانية. ستتعلم الأساسيات مثل المفردات والقواعد النحوية والمحادثة.
يمكن أن يشمل تعلم الألفاظ اليومية، والتحدث باللغة الألمانية، و",

            "يستكشف هذا الكورس مجال علم النفس ويساعدك في فهم العقل البشري وسلوك الأفراد. ستتعلم عن النظريات والتقنيات المستخدمة في تحليل السلوك والعوامل النفسية.",
            "يركز هذا الكورس على دراسة الاقتصاديات من منظور الأسرة والمجتمع. ستتعلم كيفية تحليل القرارات الاقتصادية وتأثيرها على الأفراد والمجتمعات.",
            "يقدم هذا الكورس نظرة تاريخية على تطور الحضارات والثقافات عبر العصور. ستتعلم عن الأحداث الرئيسية والتغييرات الثقافية التي شكلت العالم.",

            "يهدف هذا الكورس إلى تطوير مهارات تصميم الجرافيك والإعلانات. ستتعلم كيفية استخدام البرامج والتقنيات لإنشاء رسومات وإعلانات جذابة.",
            "يركز هذا الكورس على تطوير مهارات الرسم والتصوير الفني. ستتعلم عن تقنيات الرسم والتظليل والتعبير الفني.",
            "يهدف هذا الكورس إلى تعليمك كيفية تصميم منتجات وأثاث فعّالة وجذابة. ستتعلم عن مبادئ التصميم واستخدام البرامج والمواد المختلفة.",

            "يركز هذا الكورس على أهمية استخدام مصادر الطاقة المتجددة مثل الشمس والرياح والماء. ستتعلم كيفية تطوير وتنفيذ مشاريع تعزيز الاستدامة والحفاظ على البيئة.",
            "يهدف هذا الكورس إلى تعليمك كيفية إدارة المخلفات بشكل فعّال وتطبيق مبادئ التدوير. ستتعلم كيفية تقليل النفايات وإعادة استخدام المواد.",
            "يركز هذا الكورس على أسس الزراعة العضوية والمستدامة. ستتعلم عن استخدام الأساليب البيئية في زراعة المحاصيل وتربية المواشي.",

            "يهدف هذا الكورس إلى تطوير مهارات الاتصال الفعّال والتفاوض. ستتعلم كيفية التواصل بفعالية وحل النزاعات.",
            "يركز هذا الكورس على تطوير خطط مهنية وتحقيق الأهداف المهنية. ستتعلم كيفية تحديد الأهداف ووضع استراتيجيات لتحقيقها.",
            "يهدف هذا الكورس إلى تطوير مهارات التفكير الإبداعي وحل المشكلات. ستتعلم كيفية التفكير خارج الصندوق والعثور على حلول مبتكرة.",

        ]; // Add more course descriptions

        $courses = [];
        $category_id = 1;

        $categories = Category::all();
        $index = 0;
        foreach ($categories as $key => $item) {
            for ($j = 0; $j < 3; $j++) {
                $courses[] = [
                    'category_id' => $item->id,
                    'location' => $locations[array_rand($locations)],
                    'title' => $titles[$index],
                    'description' => $descriptions[$index],
                    'image' => 'course/' . ($index + 1) . ".jpg", // Replace with the path to your image
                    'level' => $levels[array_rand($levels)],
                    'should_request' => rand(0, 1), // Randomly assign whether the course should be requested or not
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
                $index++;
            }
//            $courses[] = [
//                'category_id' => $item->id,
//                'location' => $locations[array_rand($locations)],
//                'title' => $titles[$key+1],
//                'description' => $descriptions[$key+1],
//                'image' => 'course/' . ($key + 1+1) . ".jpg", // Replace with the path to your image
//                'level' => $levels[array_rand($levels)],
//                'should_request' => rand(0, 1), // Randomly assign whether the course should be requested or not
//                'created_at' => now(),
//                'updated_at' => now(),
//            ];
//            $courses[] = [
//                'category_id' => $item->id,
//                'location' => $locations[array_rand($locations)],
//                'title' => $titles[$key+2],
//                'description' => $descriptions[$key+2],
//                'image' => 'course/' . ($key + 1+2) . ".jpg", // Replace with the path to your image
//                'level' => $levels[array_rand($levels)],
//                'should_request' => rand(0, 1), // Randomly assign whether the course should be requested or not
//                'created_at' => now(),
//                'updated_at' => now(),
//            ];
        }

        DB::table('courses')->insert($courses);
        $courses = Course::all();
        $mentors = Mentor::all();
        for ($i = 0; $i < 10; $i++) {
            $courses[$i]->mentors()->attach($mentors[$i]);
            $courses[$i + 1]->mentors()->attach($mentors[$i]);
            $courses[$i + 2]->mentors()->attach($mentors[$i]);
        }
    }
}
