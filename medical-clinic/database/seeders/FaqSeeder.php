<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'question' => 'كيف أبدأ؟',
                'answer' => 'ابدأ بالتسجيل وتفعيل حسابك.',
                'type' => 'popular',
            ],
            [
                'question' => 'هل التطبيق مجاني؟',
                'answer' => 'نعم، كل الميزات مجانية.',
                'type' => 'popular',
            ],
            [
                'question' => 'هل يمكن تغيير اللغة؟',
                'answer' => 'نعم، من خلال الإعدادات.',
                'type' => 'general',
            ],
            [
                'question' => 'كيف ألغي الاشتراك؟',
                'answer' => 'من خلال إعدادات الحساب.',
                'type' => 'services',
            ],
            [
                'question' => 'ماهي طرق الدفع؟',
                'answer' => 'بطاقة بنكية، PayPal.',
                'type' => 'services',
            ],
        ];

        foreach ($data as $item) {
            Faq::create($item);
        }

    }
}
