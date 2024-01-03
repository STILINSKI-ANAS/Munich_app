<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'level' => ['required'],
            'overview' => ['required'],
            'content' => ['required'],
            'features' => ['required'],
            'time' => ['required'],
            'price' => ['required'],
            'max_placements' => ['nullable'],
            'name' => ['required'],
            'start_date'=>['nullable'],
            'end_date'=>['nullable'],
            'language_id' => ['required'],
            'course_id' => ['nullable'],
            'Image' => ['nullable', 'mimes:jpg,jpeg,png']
        ];
    }
}
