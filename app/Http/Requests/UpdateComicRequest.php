<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:100',
            'thumb' => 'nullable|string|url|max:255',
            'price' => 'required|numeric|between:0,9999.99',
            'series' => 'required|string|max:50',
            'sale_date' => 'required|date|after_or_equal:01/01/1930',
            'type' => 'required|string|max:40',
            'description' => 'nullable|string'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'ATTENZIONE: il titolo è obbligatorio',
            'price.required' => 'ATTENZIONE: il prezzo è obbligatorio'
        ];
    }
}
