<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamAudioContentRequest extends FormRequest
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
            'photo' => 'required',
            'audio' => 'required',
        ];
    }

    public function messages()
    {

        return [
            'name.required' => 'Имя обязательное поле',
            'audio.required' => 'обезателно добавить аудиофайл',
            'photo.required' => 'обезателно добавить фото',

        ];
    }
}
