<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'login'    => ['required', 'string', function ($attribute, $value, $fail) {
                // إذا كان ليس بريدًا إلكترونيًا ولا رقم هاتف، اعرض رسالة خطأ
                if (!filter_var($value, FILTER_VALIDATE_EMAIL) && !preg_match('/^09\d{8}$/', $value)) {
                    $fail('يجب أن يكون البريد الإلكتروني صحيحًا أو رقم موبايل يبدأ بـ 09 ويتبعه 8 أرقام.');
                }
            }],
            'password' => ['required', 'string', 'min:6'],
        ];
    }

    public function messages(): array
    {
        return [
            'login.required'    => 'حقل البريد الإلكتروني أو رقم الهاتف مطلوب.',
            'password.required' => 'كلمة المرور مطلوبة.',
            'password.min'      => 'كلمة المرور يجب أن تحتوي على 6 أحرف على الأقل.',
        ];
    }

}
