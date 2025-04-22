<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class AuthService
{
    public function login(array $credentials)
    {
        // تحديد إذا المستخدم دخل إيميل أو رقم هاتف
        $field = isset($credentials['email']) ? 'email' : 'mobile_number';
        $identifier = $credentials[$field];
        $password = $credentials['password'];

        $user = $this->find_user($field, $identifier);

        // التحقق من وجود المستخدم وصحة الباسوورد
        $this->authorize($user, $password);

        $user->last_login_at = now();
        $user->save();

        return  $this->generateNewToken($user);
    }


    public function find_user($field, $identifier)
    {
        return User::where($field, $identifier)->first();
    }

    public function authorize($user, $password)
    {
        if (!$user || !Hash::check($password, $user->password)) {
            throw ValidationException::withMessages([
                'credentials' => ['Incorrect login credentials.'],
            ]);
        }
    }

    

    public function generateNewToken($user)
    {
        $customClaims = [
            'last_login_at' => now()->timestamp,
        ];

        return JWTAuth::claims($customClaims)->fromUser($user);
    }

    public function resetPassword($request)
    {
      $user=User::where('reset_token',$request['token'] )->first();
if ($user !=null){
      DB::table('users')->update([
            'password' => bcrypt($request['password']),
            'reset_token' => null,
            'last_login_at' => now()

        ]);

    $token= $this->generateNewToken($user);
    return $token;
    }

        return null;
    }
}
