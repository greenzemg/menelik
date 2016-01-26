<?php

namespace Menelik\Http\Requests;

use Menelik\Http\Requests\Request;

class UserStoreFormRequest extends Request
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
            'username' => ['required', 'min:3', 'max:30'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed']
        ];
    }
}
