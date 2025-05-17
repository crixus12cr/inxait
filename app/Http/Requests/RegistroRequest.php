<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'habeas_data' => $this->has('habeas_data') ? 1 : 0,
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'type_identification_id' => 'required|integer|exists:type_identifications,id',
            'document_number' => 'required|string|max:11|unique:users,document_number',
            'province' => 'required|integer|exists:provinces,id',
            'city_id' => 'required|integer|exists:cities,id',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'habeas_data' => 'accepted',
        ];
    }
}
