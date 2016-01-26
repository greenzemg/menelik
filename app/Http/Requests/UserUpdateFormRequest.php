<?php

namespace Menelik\Http\Requests;

use Menelik\Http\Requests\Request;

class UserUpdateFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => ['required', 'max:60'],
            'lastname' => ['required', 'max:60'],
            'username' => ['required', 'max:30', 'unique:users,username,'.$this->route('users')],
            'email' => ['required', 'email', 'unique:users,email,'.$this->route('users')],
            'password' => ['required_with:password_confirmation', 'confirmed']
        ];
    }
}
