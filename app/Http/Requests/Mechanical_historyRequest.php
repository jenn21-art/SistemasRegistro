<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class Mechanical_historyRequest extends FormRequest
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
            'customer_name'=> 'required|string|min:3|max:100',
            'vehicle_brand'=> 'required|string|min:3|max:100',
            'maintenance_list'=> 'required|string|min:3|max:255',
            'last_check' => 'required|date',
            'repair_log' => 'required|string|min:3|max:255',
            'accident_damage' => 'nullable|string|min:3|max:255',
            'odometer_reading' => 'required|string|min:1|max:50',
            'record_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'customer_name.required' => 'El nombre del cliente es requerido.',
            'customer_name.string' => 'El nombre del cliente solo debe contener caracteres.',
            'customer_name.min' => 'El nombre del cliente debe tener al menos 3 caracteres.',
            'customer_name.max' => 'El nombre del cliente no debe exceder los 100 caracteres.',

            'vehicle_brand.required' => 'La marca del vehículo es requerida.',
            'vehicle_brand.string' => 'La marca del vehículo solo debe contener caracteres.',
            'vehicle_brand.min' => 'La marca del vehículo debe tener al menos 3 caracteres.',
            'vehicle_brand.max' => 'La marca del vehículo no debe exceder los 100 caracteres.',

            'maintenance_list.required' => 'La lista de mantenimiento es requerida.',
            'maintenance_list.string' => 'La lista de mantenimiento solo debe contener caracteres.',
            'maintenance_list.min' => 'La lista de mantenimiento debe tener al menos 3 caracteres.',
            'maintenance_list.max' => 'La lista de mantenimiento no debe exceder los 255 caracteres.',

            'last_check.required' => 'La última revisión es requerida.',
            'last_check.date' => 'La última revisión debe ser una fecha válida.',

            'repair_log.required' => 'El registro de reparación es requerido.',
            'repair_log.string' => 'El registro de reparación solo debe contener caracteres.',
            'repair_log.min' => 'El registro de reparación debe tener al menos 3 caracteres.',
            'repair_log.max' => 'El registro de reparación no debe exceder los 255 caracteres.',

            'accident_damage.nullable' => 'Los daños por accidente son opcionales.',
            'accident_damage.string' => 'Los daños por accidente solo deben contener caracteres.',
            'accident_damage.min' => 'Los daños por accidente deben tener al menos 3 caracteres.',
            'accident_damage.max' => 'Los daños por accidente no deben exceder los 255 caracteres.',

            'odometer_reading.required' => 'La lectura del odómetro es requerida.',
            'odometer_reading.string' => 'La lectura del odómetro solo debe contener caracteres.',
            'odometer_reading.min' => 'La lectura del odómetro debe tener al menos 1 carácter.',
            'odometer_reading.max' => 'La lectura del odómetro no debe exceder los 50 caracteres.',

            'record_id.required' => 'El ID del registro es requerido.',
        ];

    }

}
