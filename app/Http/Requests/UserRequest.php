<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
                 'name' => 'required|string|max:255',
                 'surname' => 'required|string|max:255',
                 'username' => 'required|string|max:255|unique:users',
                 'phone_number1' => 'required|unique:users',
                 'phone_number2' => 'unique:users',
                 'email' => 'required|string|email|max:255|unique:users',
                 'password' => 'required|string|min:4|confirmed',
                ];
    }
}
