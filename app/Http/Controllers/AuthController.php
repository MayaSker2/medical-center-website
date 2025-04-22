<?php

namespace App\Http\Controllers;

use auth;

use App\Models\User;
use App\Jobs\sendResetLink;
use Illuminate\Support\Str;
use App\Services\AuthService;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\email_request;
use App\Http\Requests\resetpasswordrequest;

class AuthController extends Controller
{
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login(AuthRequest $request)
    {
        $data = $this->authService->login($request->validated());

        return response()->json([
            'message' => 'login successful',
            'expires_in_minutes' => config('jwt.ttl'),
            'token' => $data,

        ]);
    }

    public function me()
    {
        $user = auth('api')->user();

        if ($user) {
            return response()->json([
                'message' => 'تم استرجاع بيانات المستخدم بنجاح.',
                'data' => $user
            ], 200);
        }
        return response()->json([
            'message' => 'التوكن غير صالح أو انتهت صلاحيته.',
        ], 401);
    }

    public function sendResetLink(email_request $request)
    {
        $token = hash('sha256', Str::random(60));
        $user = User::where('email', $request->validated()['email'])->first();
        if ($user) {
            $user->reset_token = $token;

            $user->save();
        }
        sendResetLink::dispatch($request->validated()['email'], $token);
        return response()->json(['message' => 'Reset link sent.']);
    }


    public function resetPassword(resetpasswordrequest $request)
    {
        $user = $this->authService->resetPassword($request->validated());

        return $user != null ? response()->json([
            'message' => 'password reset successfully.',
            'expires_in_minutes' => config('jwt.ttl'),
            'token' => $user
        ])
            : response()->json(['message' => 'fail.']);
    }
}
