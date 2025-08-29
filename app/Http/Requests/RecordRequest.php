<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class RecordRequest extends FormRequest
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
            'telephone'=> 'required|string|min:8|max:16',
            'identification'=> ['required', 'string', 'min:5', 'max:20', Rule::unique('records')->ignore($this->record)],
            'vehicle_brand' => 'required|string|min:3|max:100',
            'date'=> 'required|date',
            'tution'=> 'required|string|min:1|max:100',
            'type_service'=> 'required|string|min:3|max:100',
            'who_register'=> 'required|string|min:3|max:100',
            'inventory_id'=> 'required',
            'customer_information_id'=> 'required',

        ];
    }

    public function messages()
    {
        return [
            'customer_name.required' => 'El nombre del cliente es requerido.',
            'customer_name.string' => 'El nombre del cliente solo debe contener caracteres.',
            'customer_name.min' => 'El nombre del cliente debe tener al menos 3 caracteres.',
            'customer_name.max' => 'El nombre del cliente no debe exceder los 100 caracteres.',

            'telephone.required' => 'El numero de teléfono es requerido.',
            'telephone.string' => 'El numero de teléfono solo debe contener caracteres.',
            'telephone.min' => 'El numero de teléfono debe tener al menos 8 caracteres.',
            'telephone.max' => 'El numero de teléfono no debe exceder los 16 caracteres.',

            'identification.required' => 'La identificación es requerida.',
            'identification.string' => 'La identificación solo debe contener caracteres.',
            'identification.min' => 'La identificación debe tener al menos 5 caracteres.',
            'identification.max' => 'La identificación no debe exceder los 20 caracteres.',

            'vehicle_brand.required' => 'La marca del vehículo es requerida.',
            'vehicle_brand.string' => 'La marca del vehículo solo debe contener caracteres.',
            'vehicle_brand.min' => 'La marca del vehículo debe tener al menos 3 caracteres.',
            'vehicle_brand.max' => 'La marca del vehículo no debe exceder los 100 caracteres.',

            'date.required' => 'La fecha es requerida.',
            'date.date' => 'La fecha debe ser una fecha válida.',

            'tution.required' => 'La matrícula es requerida.',
            'tution.string' => 'La matrícula solo debe contener caracteres.',
            'tution.min' => 'La matrícula debe tener al menos 1 carácter.',
            'tution.max' => 'La matrícula no debe exceder los 100 caracteres.',

            'type_service.required' => 'El tipo de servicio es requerido.',
            'type_service.string' => 'El tipo de servicio solo debe contener caracteres.',
            'type_service.min' => 'El tipo de servicio debe tener al menos 3 caracteres.',
            'type_service.max' => 'El tipo de servicio no debe exceder los 100 caracteres.',

            'who_register.required' => 'Quien registra es requerido.',
            'who_register.string' => 'Quien registra solo debe contener caracteres.',
            'who_register.min' => 'Quien registra debe tener al menos 3 caracteres.',
            'who_register.max' => 'Quien registra no debe exceder los 100 caracteres.',

            'inventory_id.required' => 'El nombre de inventario es requerido.',
       
            'customer_information_id.required' => 'El ID de la información del cliente es requerido.',
        
        ];
    }
}
