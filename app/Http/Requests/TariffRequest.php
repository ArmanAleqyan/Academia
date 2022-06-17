<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TariffRequest extends FormRequest
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
            'price' => 'required',
            'oneprice' => 'required',
            'estimates' => 'required',
            'term' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'обязательное поле',
            'price.required' => 'обязательное поле',
            'oneprice.required' => 'обязательное поле',
            'estimates.required'  => 'обязательное поле',
            'term.required' => 'обязательное поле'
        ];
    }
}
