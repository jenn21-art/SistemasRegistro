<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class RepairRequest extends FormRequest
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
            'vehicle_brand'=> 'required|string|min:3|max:100',
            'tuition'=> 'required|string|min:1|max:100',
            'unit_price'=> 'required|string|min:1|max:50',
            'type_repair'=> 'required|string|min:3|max:100',
            'total'=> 'required|string|min:1|max:50',
            'staff_id' => 'required',
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

            'vehicle_brand.required' => 'La marca del vehículo es requerida.',
            'vehicle_brand.string' => 'La marca del vehículo solo debe contener caracteres.',
            'vehicle_brand.min' => 'La marca del vehículo debe tener al menos 3 caracteres.',
            'vehicle_brand.max' => 'La marca del vehículo no debe exceder los 100 caracteres.',

            'tuition.required' => 'La matrícula es requerida.',
            'tuition.string' => 'La matrícula solo debe contener caracteres.',
            'tuition.min' => 'La matrícula debe tener al menos 1 carácter.',
            'tuition.max' => 'La matrícula no debe exceder los 100 caracteres.',

            'unit_price.required' => 'El precio unitario es requerido.',
            'unit_price.string' => 'El precio unitario solo debe contener caracteres.',
            'unit_price.min' => 'El precio unitario debe tener al menos 1 carácter.',
            'unit_price.max' => 'El precio unitario no debe exceder los 50 caracteres.',

            'type_repair.required' => 'El tipo de reparación es requerido.',
            'type_repair.string' => 'El tipo de reparación solo debe contener caracteres.',
            'type_repair.min' => 'El tipo de reparación debe tener al menos 3 caracteres.',
            'type_repair.max' => 'El tipo de reparación no debe exceder los 100 caracteres.',

            'total.required' => 'El total es requerido.',
            'total.string' => 'El total solo debe contener caracteres.',
            'total.min' => 'El total debe tener al menos 1 carácter.',
            'total.max' => 'El total no debe exceder los 50 caracteres.',

            'staff_id.required' => 'El Nombre del personal es requerido.',
        ];

    }
}
