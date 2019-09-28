<?php

namespace App\Http\Requests\Backend\Auth\Role;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRoleRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->isAdmin();
    }

    public function rules()
    {
        return [
            'name' => ['required', Rule::unique('roles')],
        ];
    }
}
