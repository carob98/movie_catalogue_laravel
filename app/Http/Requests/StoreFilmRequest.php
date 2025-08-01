<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFilmRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'max:150', 'string'],
            'description' => ['required', 'string'],
            'release_year' => ['required', 'integer'],
            'duration' => ['required', 'string'],
            'genre' => ['required', 'string'],
            'cover' => ['nullable', 'mimes:jpg,jpeg,bmp,png,webp'],
        ];
    }

    public function messages()
    {
        return [
            // Da inserire successivamente
        ];
    }
}
