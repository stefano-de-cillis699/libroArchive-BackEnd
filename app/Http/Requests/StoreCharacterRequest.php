<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCharacterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:10',
            'surname' => 'string|max:20',
            'age' => 'numeric',
            'codename' => 'string|max:10|required_without_all:name,surname',
            'hairColor' => 'required|string|max:10',
            'eyeColor' => 'required|string|max:10',
            'job' => 'string|max:50',
            'origin' => 'string|max:50',
            'projectId' => 'numeric'
        ];
    }
}
