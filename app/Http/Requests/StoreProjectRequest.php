<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:60',
            'type' => 'required|numeric|max_digits:2',
            'language' => 'string|max:2',
            'is_completed' => 'boolean'
        ];
    }
}
