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
            'document_number' => 'required|string|max:11',
            'province' => 'required|integer|exists:provinces,id',
            'city_id' => 'required|integer|exists:cities,id',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'habeas_data' => 'accepted',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe ser un texto válido.',
            'name.max' => 'El nombre no debe exceder los 255 caracteres.',

            'last_name.required' => 'El apellido es obligatorio.',
            'last_name.string' => 'El apellido debe ser un texto válido.',
            'last_name.max' => 'El apellido no debe exceder los 255 caracteres.',

            'type_identification_id.required' => 'El tipo de identificación es obligatorio.',
            'type_identification_id.integer' => 'El tipo de identificación debe ser un número entero.',
            'type_identification_id.exists' => 'El tipo de identificación seleccionado no es válido.',

            'document_number.required' => 'El número de documento es obligatorio.',
            'document_number.string' => 'El número de documento debe ser un texto válido.',
            'document_number.max' => 'El número de documento no debe exceder los 11 caracteres.',

            'province.required' => 'El departamento es obligatorio.',
            'province.integer' => 'El departamento debe ser un número entero.',
            'province.exists' => 'El departamento seleccionado no es válido.',

            'city_id.required' => 'La ciudad es obligatoria.',
            'city_id.integer' => 'La ciudad debe ser un número entero.',
            'city_id.exists' => 'La ciudad seleccionada no es válida.',

            'phone.required' => 'El teléfono es obligatorio.',
            'phone.string' => 'El teléfono debe ser un texto válido.',
            'phone.max' => 'El teléfono no debe exceder los 20 caracteres.',

            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Debe ingresar un correo electrónico válido.',

            'habeas_data.accepted' => 'Debe aceptar la política de tratamiento de datos.',
        ];
    }
}
