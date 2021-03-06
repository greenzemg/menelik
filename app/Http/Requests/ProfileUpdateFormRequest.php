<?php

namespace Menelik\Http\Requests;

use Menelik\Http\Requests\Request;

class ProfileUpdateFormRequest extends Request
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
            'bio' => ['min:7', 'max:255']
        ];

    }
}
