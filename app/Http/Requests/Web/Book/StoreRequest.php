<?php

namespace App\Http\Requests\Web\Book;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string|max:100',
            'price' => 'required|numeric',
            'publishYear' => 'required|integer|min:1990|max:2023',
            'publisherId' => 'required|integer|exists:App\Entities\Publisher,id',
        ];
    }
}
