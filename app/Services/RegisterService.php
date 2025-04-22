<?php
namespace App\Services;

use App\Models\User;

class RegisterService
{
    public function register($request)
    {
        // استخدم validated() للحصول على البيانات بعد التحقق
        $data = User::create([
            'full_name' => $request['full_name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'mobile_number' => $request['mobile_number']
        ]);

        // dd($data);  // يمكنك إلغاء هذه السطر بعد التحقق
        return $data;
    }
}

