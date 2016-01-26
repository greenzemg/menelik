<?php

namespace Menelik\Http\Requests;

use Menelik\Http\Requests\Request;

class UserDeleteFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (($this->route('users') == auth()->user()->id) | (auth()->user()->role_id != 1)) {
            return false;    
        }
        return true;
    }

    public function forbiddenResponse()
    {
        return redirect()->back()->withError([
            'error' => 'You are not able to delete this user'
            ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
