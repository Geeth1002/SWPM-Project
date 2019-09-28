<?php

namespace App\Http\Requests\Frontend\User;

use App\Rules\Auth\UnusedPassword;
use Illuminate\Foundation\Http\FormRequest;
use LangleyFoxall\LaravelNISTPasswordRules\PasswordRules;

class UpdatePasswordRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->canChangePassword();
    }

    public function rules()
    {
        return [
            'old_password' => ['required'],
            'password' => array_merge(
                [
                    new UnusedPassword($this->user()),
                ],
                PasswordRules::changePassword(
                    $this->email,
                    config('access.users.password_history') ? 'old_password' : null
                )
            ),
        ];
    }
}
