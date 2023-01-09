<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
}
