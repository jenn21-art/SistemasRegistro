<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class InvoiceRequest extends FormRequest
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
            'invoice_number' => ['required', 'string', 'min:1', 'max:50', Rule::unique('invoices')->ignore($this->invoice)],
            'customer_name' => 'required|string|min:3|max:100',
            'telephone' => 'required|string|min:8|max:16',
            'date' => 'required|date',
            'type_service' => 'required|string|min:3|max:100',
            'ruc_number' => 'required|string|min:5|max:20',
            'workshop_name' => 'required|string|min:3|max:100',
            'employee_name' => 'required|string|min:3|max:100',
            'unit_price' => 'required|string|min:1|max:50',
            'total' => 'required|string|min:1|max:50',
            'corrective_maintenance_id' => 'required',
            'repair_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'invoice_number.required' => 'El número de factura es requerido.',
            'invoice_number.string' => 'El número de factura solo debe contener caracteres.',
            'invoice_number.min' => 'El número de factura debe tener al menos 1 carácter.',
            'invoice_number.max' => 'El número de factura no debe exceder los 50 caracteres.',

            'customer_name.required' => 'El nombre del cliente es requerido.',
            'customer_name.string' => 'El nombre del cliente solo debe contener caracteres.',
            'customer_name.min' => 'El nombre del cliente debe tener al menos 3 caracteres.',
            'customer_name.max' => 'El nombre del cliente no debe exceder los 100 caracteres.',

            'telephone.required' => 'El numero de teléfono es requerido.',
            'telephone.string' => 'El numero de teléfono solo debe contener caracteres.',
            'telephone.min' => 'El numero de teléfono debe tener al menos 8 caracteres.',
            'telephone.max' => 'El numero de teléfono no debe exceder los 16 caracteres.',

            'date.required' => 'La fecha es requerida.',
            'date.date' => 'La fecha no es válida.',

            'type_service.required' => 'El tipo de servicio es requerido.',
            'type_service.string' => 'El tipo de servicio solo debe contener caracteres.',
            'type_service.min' => 'El tipo de servicio debe tener al menos 3 caracteres.',
            'type_service.max' => 'El tipo de servicio no debe exceder los 100 caracteres.',

            'ruc_number.required' => 'El número RUC es requerido.',
            'ruc_number.string' => 'El número RUC solo debe contener caracteres.',
            'ruc_number.min' => 'El número RUC debe tener al menos 5 caracteres.',
            'ruc_number.max' => 'El número RUC no debe exceder los 20 caracteres.',

            'workshop_name.required' => 'El nombre del taller es requerido.',
            'workshop_name.string' => 'El nombre del taller solo debe contener caracteres.',
            'workshop_name.min' => 'El nombre del taller debe tener al menos 3 caracteres.',
            'workshop_name.max' => 'El nombre del taller no debe exceder los 100 caracteres.',

            'employee_name.required' => 'El nombre del empleado es requerido.', 
            'employee_name.string' => 'El nombre del empleado solo debe contener caracteres.',
            'employee_name.min' => 'El nombre del empleado debe tener al menos 3 caracteres.',
            'employee_name.max' => 'El nombre del empleado no debe exceder los 100 caracteres.',    

            'unit_price.required' => 'El precio unitario es requerido.',
            'unit_price.string' => 'El precio unitario solo debe contener caracteres.',
            'unit_price.min' => 'El precio unitario debe tener al menos 1 carácter.',
            'unit_price.max' => 'El precio unitario no debe exceder los 50 caracteres.',    

            'total.required' => 'El total es requerido.',
            'total.string' => 'El total solo debe contener caracteres.',
            'total.min' => 'El total debe tener al menos 1 carácter.',
            'total.max' => 'El total no debe exceder los 50 caracteres.',

            'corrective_maintenance_id.required' => 'El ID de mantenimiento correctivo es requerido.',
            'repair_id.required' => 'El ID de reparación es requerido.',
        ];

    }
}
