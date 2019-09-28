<?php

namespace App\Http\Requests\Frontend\Auth;

use App\Rules\Auth\UnusedPassword;
use Illuminate\Foundation\Http\FormRequest;
use LangleyFoxall\LaravelNISTPasswordRules\PasswordRules;

class ResetPasswordRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => array_merge(
                [
                    new UnusedPassword($this->get('token')),
                ],
                PasswordRules::changePassword($this->email)
            ),
        ];
    }
}
