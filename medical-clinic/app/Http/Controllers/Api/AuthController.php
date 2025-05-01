<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\AuthService;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    protected AuthService $authService;
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $tokenData = $this->authService->register($data);
        return $this->successResponse($tokenData, 'user created successfuly', 201);

    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();
        $tokenData = $this->authService->login($credentials);
        return $this->successResponse($tokenData, 'success', 200);
    }

    public function logout()
    {
        $this->authService->logout();
        return $this->successResponse('null', 'تم تسجيل الخروج بنجاح.', 200);
    }

    public function profile()
    {
        $user = $this->authService->profile();
        return $this->successResponse( $user, 'معلومات الملف الشخصي', 200);

    }

}
