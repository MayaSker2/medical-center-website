<?php

namespace App\Services;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

class SettingService
{

    protected function cacheKey($userId)
    {
        return "user_settings_{$userId}";
    }


    public function getSettings($userId)
    {
        return Cache::remember($this->cacheKey($userId), now()->addHours(1), function () use ($userId) {
            return Setting::where('user_id', $userId)->pluck('value', 'key');
        });
    }


    public function updateSettings($userId, array $settings)
    {
        foreach ($settings as $setting) {
            Setting::updateOrCreate(
                ['user_id' => $userId, 'key' => $setting['key']],
                ['value' => $setting['value']]
            );
        }

        Cache::forget($this->cacheKey($userId));
    }
}
