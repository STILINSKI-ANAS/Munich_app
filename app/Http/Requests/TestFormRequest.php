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
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'level' => ['required'],
            'max_placements' => ['required', 'integer', 'min:1'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date', 'after:start_date'],
            'language_id' => ['required'],
            'price' => ['required', 'numeric', 'min:0'],
            'time' => ['nullable'],
            'name' => ['required'],
            'Image' => ['nullable', 'image', 'mimes:jpg,jpeg,png'],
            'is_hidden' => ['nullable', 'boolean'],
            'course_id' => ['nullable', 'exists:courses,id'],
        ];
    }

    /**
     * Get custom error messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'max_placements.min' => 'Le nombre maximum de places doit être au moins :min.',
            'start_date.required' => 'La date de début est requise.',
            'start_date.date' => 'La date de début doit être une date valide.',
            'end_date.required' => 'La date de fin est requise.',
            'end_date.date' => 'La date de fin doit être une date valide.',
            'end_date.after' => 'La date de fin doit être postérieure à la date de début.',
            'language_id.required' => 'La langue est requise.',
            'price.required' => 'Le prix est requis.',
            'price.numeric' => 'Le prix doit être un nombre.',
            'price.min' => 'Le prix ne peut pas être inférieur à :min.',
            'Image.image' => 'Le fichier doit être une image.',
            'Image.mimes' => 'Le fichier doit être de type :jpg, :jpeg ou :png.',
            'is_hidden.boolean' => 'La valeur du champ de masquage doit être vrai ou faux.',
            'course_id.exists' => 'Le cours sélectionné est invalide.',
        ];
    }
}
