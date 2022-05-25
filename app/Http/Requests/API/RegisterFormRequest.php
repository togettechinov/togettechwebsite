<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
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
                 'name_surname' => 'required|string',
                 'username' => 'required|string',
                 'email' => 'required|email|unique:users',
                 'phone_number1'=>'required',
                 'password' => 'required|string|min:6'
                ];
    }
}
