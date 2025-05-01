<?php

namespace App\Http\Controllers\Api;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Services\SettingService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SettingRequest;

class SettingController extends Controller
{
    protected $settingService;

    public function __construct(SettingService $settingService)
    {
        $this->settingService = $settingService;
    }

    public function show()
    {
        $settings = $this->settingService->getSettings(Auth::id());
        return $this->successResponse($settings, 'this is the settings', 200);
    }

    public function update(SettingRequest $request)
    {
        $settings = $this->settingService->updateSettings(Auth::id(), $request->settings);
        return $this->successResponse($settings, 'Settings updated successfully.', 200);

    }
}
