<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerReviewsRequest extends FormRequest
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
            'text' => 'required',
            'video' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'обязательное поле',
            'text.required' => 'обязательное поле',
            'video.required' => 'обязательное поле',
        ];
    }
}
