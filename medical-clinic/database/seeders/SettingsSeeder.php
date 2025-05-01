<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = 1;

        $settings = [
            ['key' => 'language', 'value' => 'ar', 'user_id' => $userId],
            ['key' => 'notifications_enabled', 'value' => '1', 'user_id' => $userId],
            ['key' => 'dark_mode', 'value' => '0', 'user_id' => $userId],
            ['key' => 'timezone', 'value' => 'Asia/Riyadh', 'user_id' => $userId],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(
                ['user_id' => $setting['user_id'], 'key' => $setting['key']],
                ['value' => $setting['value']]
            );
        }
    }
    }

