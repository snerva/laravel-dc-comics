<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => ['required', 'unique:comics', 'min:4', 'max:50'],
            'description' => ['required'],
            'thumb' => ['required', 'max:255'],
            'price' => ['required'],
            'series' => ['required', 'max:255'],
            'sale_date' => ['required', 'max:255'],
            'type' => ['required', 'max:255'],
        ];
    }
    public function messages()
    {
        return [
            'title.required' => "Il titolo é obbligatorio",
            'title.min' => "Il titolo deve essere almeno di :min caratteri",
            'title.max' => "Il titolo deve essere almeno di :max caratteri",
            'description.min' => "La descrizione deve essere almeno di :min caratteri",
            'thumb.max' => "L'immagine  deve essere almeno di :max caratteri",
            'series.max' => "La serie deve essere almeno di :max caratteri",
            'sale_date.max' => "La data deve essere almeno di :max caratteri",
            'type.max' => "La tipologia deve essere almeno di :max caratteri",
        ];
    }
}
