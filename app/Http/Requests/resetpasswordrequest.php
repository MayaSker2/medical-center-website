<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class resetpasswordrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'token' => 'required',
            'email' => 'required|email',
            'password' => [
                'required',
                'string',
                'confirmed',
                'min:10',
                'max:20',
                'regex:/[A-Z]/', // حرف كبير
                'regex:/[a-z]/', // حرف صغير
                'regex:/[0-9]/', // رقم
                'regex:/[@$!%*?&]/', // رمز خاص
                function ($attribute, $value, $fail) {
                    // قائمة كلمات المرور الشائعة
                    $commonPasswords = ['123456', 'password', 'qwerty', '123456789', '12345678', '111111'];

                    if (in_array(strtolower($value), $commonPasswords)) {
                        $fail('The password is too common. Please choose a different password.');
                    }

                    // هنا نقوم فقط بالتحقق ضد الـ email وليس الـ username
                    if (str_contains(strtolower($value), strtolower($this->input('email') ?? ''))) {
                        $fail('The password contains the email.');
                    }
                },
            ]

                    ];
                }

                public function messages()
                {
                    return [
                        'password.required' => 'The password field is required.',
                        'password.string' => 'The password must be a string.',
                        'password.min' => 'The password must be at least 10 characters long.',
                        'password.max' => 'The password must not exceed 20 characters.',
                        'password.regex' => 'The password must include at least one uppercase letter, one lowercase letter, one number, and one special character.',
                    ];
                }
    }

