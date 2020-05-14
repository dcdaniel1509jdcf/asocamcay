<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveUserRequest extends FormRequest
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
            'name' => 'required|regex:/^[\pL\s\-]+$/u',
            'last_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'ci' => 'required|integer|digits_between:10,13|unique:users',
            'contact' => 'required|integer|digits_between:9,10',
            'email' => 'required|email|unique:users',
            'password' => 'required|alpha_num|confirmed',
            'address' => 'required',
            'type' => 'required|in:user,admin',

        ];
    }
}
