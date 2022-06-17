<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdatePasswordRequest extends FormRequest
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
            'updatepassword' => 'min:6|confirmed',
            'forgotnewpassword_confirmation' => 'min:6'
        ];
    }

    public function messages()
    {
        return [
          'updatepassword.min' => 'Пароль должен иметь 6 или более символов',
          'updatepassword.confirmed' => 'Пароль не совпадает',

        ];
    }
}
