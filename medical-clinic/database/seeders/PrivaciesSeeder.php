<?php

namespace Database\Seeders;

use App\Models\Privacy;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PrivaciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $privacies = [
            [
                'title' => 'Privacy Policy 1',
                'content' => 'This is the content of the privacy policy 1.',
                'last_updated' => Carbon::now()->toDateString(),
            ],
            [
                'title' => 'Privacy Policy 2',
                'content' => 'This is the content of the privacy policy 2.',
                'last_updated' => Carbon::now()->toDateString(),
            ],
            [
                'title' => 'Privacy Policy 3',
                'content' => 'This is the content of the privacy policy 3.',
                'last_updated' => Carbon::now()->toDateString(),
            ],
        ];

        foreach ($privacies as $privacy) {
            Privacy::create($privacy);
        }
    }
}
