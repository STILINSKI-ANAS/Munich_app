<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtudiantRequest extends FormRequest
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
            'nom' => ['required', 'string'],
            'prenom' => ['required', 'string'],
            'cin' => ['nullable', 'string'],
            'tel' => ['nullable', 'string'],
            'addresse' => ['required', 'string'],
            'dateNaissance' => ['required', 'string'],
            'email' => ['nullable'],
            'Image' => ['nullable'],
            'status' => ['nullable', 'string'],
            'status_pro' => ['nullable', 'string'],
            'referral_options' => ['nullable', 'string'],
            'referral' => ['nullable', 'string'],
            'background' => ['nullable', 'string'],
            'time_learning' => ['nullable', 'string'],
            'where_learning' => ['nullable', 'string'],
            'period_learning' => ['nullable', 'string'],
            'commentaire' => ['nullable', 'string'],
            'langue' => ['nullable', 'string'],
            'Cours_options' => ['nullable', 'string'],
            'Cours' => ['nullable', 'string'],
            'langue_options' => ['nullable', 'string'],
        ];
    }
}
