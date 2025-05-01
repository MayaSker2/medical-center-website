<?php

namespace App\Services;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Traits\ApiResposeTrait;


class AuthService

{
    use ApiResposeTrait;
    public function register(array $data)
    {
        $user = User::create([
            'full_name' => $data['full_name'],
            'email' => $data['email'],
            'mobile_number' => $data['mobile_number'],
            'password' => Hash::make($data['password']),
        ]);

        return $this->generateTokenResponse($user);
    }

    public function login(array $credentials)
    {

        $login = $credentials['login'] ?? null;
        $password = $credentials['password'] ?? null;

        if (!$login || !$password) {
            throw ValidationException::withMessages([
                'login' => ['يجب إدخال بيانات الدخول بشكل صحيح.'],
            ]);
        }

        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile_number';

        if (!Auth::attempt([$field => $login, 'password' => $password])) {
            throw ValidationException::withMessages([
                'login' => ['بيانات الدخول غير صحيحة.'],
            ]);
        }

        return $this->generateTokenResponse(Auth::user());
    }

    public function logout()
    {
        Auth::logout();
        return $this->successResponse(null, 'تم تسجيل الخروج بنجاح.',200);
    }

    public function profile()
    {
        $user = Auth::user();
        return [
            'full_name'     => $user->full_name,
            'mobile_number' => $user->mobile_number,
            'email'         => $user->email,
        ];
    }

    protected function generateTokenResponse(User $user)
    {
        $token = Auth::login($user);

        return [
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => auth()->factory()->getTTL() * 60,
            'user'         => $user,
        ];
    }
}
