<?php

namespace App\Http\Requests\Web\Book;

use Illuminate\Foundation\Http\FormRequest;

class AuthorsArrayRequest extends FormRequest
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
            'authors' => 'nullable|array',
            'authors.*' => 'required|integer|exists:App\Entities\Author,id',
        ];
    }
}
