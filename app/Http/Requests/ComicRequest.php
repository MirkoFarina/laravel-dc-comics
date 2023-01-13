<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required| max:100 | min:2',
            'image' => 'max:255',
            'price' => 'required| numeric',
            'series' => 'required| max:80 | min:2',
            'sale_date' => 'required| date',
            'type' => 'required| max:40| min:2'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Inserire il titolo',
            'title.max' => 'Inserire massimo 100 caratteri',
            'title.min' => 'Inserire almeno 2 caratteri',
            'image.max' => 'Inserire massimo 255 caratteri',
            'price.required' => 'Inserire  il prezzo',
            'price.numeric' => 'Inserire il formato corretto del prezzo (solo numerico)',
            'series.required' => 'Inserire la serie',
            'series.max' => 'Inserire massimo 80 caratteri',
            'series.min' => 'Inserire almeno 2 caratteri',
            'sale_date.required' => 'Inserire la data di vendita',
            'sale_date.date' => 'Inserire il formato corretto della data (yyyy/mm/dd)',
            'type.required' => 'Inserire il tipo',
            'type.max' => 'Inserire massimo 40 caratteri',
            'type.min' => 'Inserire almeno 2 caratteri'
        ];
    }
}
