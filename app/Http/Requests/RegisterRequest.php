<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
//            'jobtitle' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:users',
            'password' => 'min:6|confirmed',
            'checkbox' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Обязательное поле',
            'phone.required' => 'Обязательное поле',
            'email.required' => 'Обязательное поле',
            'email.unique' => 'Такой пользователь уже существует',
            'password.min' => 'Пароль должен иметь 6 или более символов',
            'password.confirmed' => 'Пароль не совпадает',
            'checkbox.required' => 'Обезательно принять правила'
        ];
    }
}
