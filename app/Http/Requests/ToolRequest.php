<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class ToolRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:100',
            'brand' => 'required|string|min:3|max:100',
            'company' => 'required|string|min:3|max:100',
            'supplier' => 'required|string|min:3|max:100',
            'entry_date' => 'required|date',
            'code' => ['required', 'string', 'min:5', 'max:20', Rule::unique('tools')->ignore($this->tool)],
            'who_receives' => 'required|string|min:3|max:100',
            'inventary_id'=> 'required',



          
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre de la herramienta es requerido.',
            'name.string' => 'El nombre de la herramienta solo debe contener caracteres.',
            'name.min' => 'El nombre de la herramienta debe tener al menos 3 caracteres.',
            'name.max' => 'El nombre de la herramienta no debe exceder los 100 caracteres.',

            'brand.required' => 'La marca de la herramienta es requerida.',
            'brand.string' => 'La marca de la herramienta solo debe contener caracteres.',
            'brand.min' => 'La marca de la herramienta debe tener al menos 3 caracteres.',
            'brand.max' => 'La marca de la herramienta no debe exceder los 100 caracteres.',

            'company.required' => 'La empresa proveedora es requerida.',
            'company.string' => 'La empresa proveedora solo debe contener caracteres.',
            'company.min' => 'La empresa proveedora debe tener al menos 3 caracteres.',
            'company.max' => 'La empresa proveedora no debe exceder los 100 caracteres.',

            'supplier.required' => 'El proveedor es requerido.',
            'supplier.string' => 'El proveedor solo debe contener caracteres.',
            'supplier.min' => 'El proveedor debe tener al menos 3 caracteres.',
            'supplier.max' => 'El proveedor no debe exceder los 100 caracteres.',

            'entry_date.required' => 'La fecha de ingreso es requerida.',
            'entry_date.date' => 'La fecha de ingreso debe ser una fecha válida.',

            'code.required' => 'El código es requerido.',
            'code.string' => 'El código solo debe contener caracteres.',
            'code.min' => 'El código debe tener al menos 5 caracteres.',
            'code.max' => 'El código no debe exceder los 20 caracteres.',
            'code.unique' => 'El código ya está en uso.',

            'who_receives.required' => 'Quien recibe es requerido.',
            'who_receives.string' => 'Quien recibe solo debe contener caracteres.',
            'who_receives.min' => 'Quien recibe debe tener al menos 3 caracteres.',
            'who_receives.max' => 'Quien recibe no debe exceder los 100 caracteres.',

            'inventary_id.required' => 'El nombre de inventario es requerido.',

        ];
    }
}
