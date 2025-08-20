<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class Vehicle_informationRequest extends FormRequest
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
            'name'=> 'required|string|min:3|max:100',
            'brand' => 'required|string|min:3|max:100',
            'chassis_number' => 'required|string|min:5|max:50',
            'tuition' => 'required|string|min:1|max:100',
            'type_suspension' => 'required|string|min:3|max:50',
            'weight' => 'required|string|min:1|max:50',
            'repairs' => 'required|string|min:3|max:255',
            'year' => 'required|date',
            'maintenance' => 'required|string|min:3|max:255',
            'mileage' => 'required|string|min:1|max:50',
            'type_paint' => 'required|string|min:3|max:50',
            'body_type' => 'required|string|min:3|max:50',
            'type_parts' => 'required|string|min:3|max:50',
            'engine' => 'required|string|min:3|max:50',
            'transmission' => 'required|string|min:3|max:50',
            'brakes' => 'required|string|min:3|max:50',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre del vehículo es requerido.',
            'name.string' => 'El nombre del vehículo solo debe contener caracteres.',
            'name.min' => 'El nombre del vehículo debe tener al menos 3 caracteres.',
            'name.max' => 'El nombre del vehículo no debe exceder los 100 caracteres.',

            'brand.required' => 'La marca del vehículo es requerida.',
            'brand.string' => 'La marca del vehículo solo debe contener caracteres.',
            'brand.min' => 'La marca del vehículo debe tener al menos 3 caracteres.',
            'brand.max' => 'La marca del vehículo no debe exceder los 100 caracteres.',

            'chassis_number.required' => 'El número de chasis es requerido.',
            'chassis_number.string' => 'El número de chasis solo debe contener caracteres.',
            'chassis_number.min' => 'El número de chasis debe tener al menos  5 caracteres.',
            'chassis_number.max' => 'El número de chasis no debe exceder los 50 caracteres.',   

            'tuition.required' => 'La matrícula es requerida.',
            'tuition.string' => 'La matrícula solo debe contener caracteres.',
            'tuition.min' => 'La matrícula debe tener al menos 1 carácter.',
            'tuition.max' => 'La matrícula no debe exceder los 100 caracteres.',

            'type_suspension.required' => 'El tipo de suspensión es requerido.',
            'type_suspension.string' => 'El tipo de suspensión solo debe contener caracteres.',
            'type_suspension.min' => 'El tipo de suspensión debe tener al menos 3 caracteres.',
            'type_suspension.max' => 'El tipo de suspensión no debe exceder los 50 caracteres.',

            'weight.required' => 'El peso del vehículo es requerido.',  
            'weight.string' => 'El peso del vehículo solo debe contener caracteres.',
            'weight.min' => 'El peso del vehículo debe tener al menos 1 carácter.',
            'weight.max' => 'El peso del vehículo no debe exceder los 50 caracteres.',

            'repairs.required' => 'Las reparaciones son requeridas.',
            'repairs.string' => 'Las reparaciones solo deben contener caracteres.',
            'repairs.min' => 'Las reparaciones deben tener al menos 3 caracteres.',
            'repairs.max' => 'Las reparaciones no deben exceder los 255 caracteres.',

            'year.required' => 'El año es requerido.',
            'year.date' => 'El año debe ser una fecha válida.',

            'maintenance.required' => 'El mantenimiento es requerido.', 
            'maintenance.string' => 'El mantenimiento solo debe contener caracteres.',
            'maintenance.min' => 'El mantenimiento debe tener al menos 3 caracteres.',
            'maintenance.max' => 'El mantenimiento no debe exceder los 255 caracteres.',

            'mileage.required' => 'El kilometraje es requerido.',
            'mileage.string' => 'El kilometraje solo debe contener caracteres.',
            'mileage.min' => 'El kilometraje debe tener al menos 1 carácter.',
            'mileage.max' => 'El kilometraje no debe exceder los 50 caracteres.',

            'type_paint.required' => 'El tipo de pintura es requerido.',
            'type_paint.string' => 'El tipo de pintura solo debe contener caracteres.',
            'type_paint.min' => 'El tipo de pintura debe tener al menos 3 caracteres.',
            'type_paint.max' => 'El tipo de pintura no debe exceder los 50 caracteres.',

            'body_type.required' => 'El tipo de carrocería es requerido.',
            'body_type.string' => 'El tipo de carrocería solo debe contener caracteres.',
            'body_type.min' => 'El tipo de carrocería debe tener al menos 3 caracteres.',
            'body_type.max' => 'El tipo de carrocería no debe exceder los 50 caracteres.',

            'type_parts.required' => 'El tipo de partes es requerido.',
            'type_parts.string' => 'El tipo de partes solo debe contener caracteres.',
            'type_parts.min' => 'El tipo de partes debe tener al menos 3 caracteres.',
            'type_parts.max' => 'El tipo de partes no debe exceder los 50 caracteres.', 

            'engine.required' => 'El motor es requerido.',
            'engine.string' => 'El motor solo debe contener caracteres.',
            'engine.min' => 'El motor debe tener al menos 3 caracteres.',   
            'engine.max' => 'El motor no debe exceder los 50 caracteres.',

            'transmission.required' => 'La transmisión es requerida.',
            'transmission.string' => 'La transmisión solo debe contener caracteres.',
            'transmission.min' => 'La transmisión debe tener al menos 3 caracteres.',
            'transmission.max' => 'La transmisión no debe exceder los 50 caracteres.',

            'brakes.required' => 'Los frenos son requeridos.',
            'brakes.string' => 'Los frenos solo deben contener caracteres.',    
            'brakes.min' => 'Los frenos deben tener al menos 3 caracteres.',
            'brakes.max' => 'Los frenos no deben exceder los 50 caracteres.',


        ];
    }
}
