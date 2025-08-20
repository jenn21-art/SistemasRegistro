<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class InventoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; ;
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
            'date' => 'required|date',
            'code' => ['required','string','min;5','max:20',Rule::unique('inventories')->ignore($this->inventory)],
            'description' => 'required|string|min:5|max:255',
            'tools' => 'required|string|min:3|max:255',
            'spare_parts' => 'required|string|min:3|max:255',
            'materials' => 'required|string|min:3|max:255',
            'equipment' => 'required|string|min:3|max:255',
            'amount' => 'required|string|min:1|max:255',
        ];
    }

     public function messages()
     {
         return [
            'name.required' => 'El nombre es requerido.',
            'name.string' => 'El nombre solo debe contener caracteres.',
            'name.min' => 'El nombre debe tener al menos 3 caracteres.',
            'name.max' => 'El nombre no debe exceder los 100 caracteres.',

            'date.required' => 'La fecha es requerida.',
            'date.date' => 'La fecha debe ser una fecha válida.',

            'code.required' => 'El código es requerido.',
            'code.string' => 'El código solo debe contener caracteres.',
            'code.min' => 'El código debe tener al menos 5 caracteres.',
            'code.max' => 'El código no debe exceder los 20 caracteres.',
            'code.unique' => 'El código ya está en uso.',

            'description.required' => 'La descripción es requerida.',
            'description.string' => 'La descripción solo debe contener caracteres.',
            'description.min' => 'La descripción debe tener al menos 5 caracteres.',
            'description.max' => 'La descripción no debe exceder los 255 caracteres.',

            'tools.required' => 'El nombre de las herramientas son requeridos.',
            'tools.string' => 'El nombre de las herramientas solo deben contener caracteres.',
            'tools.min' => 'El nombre de las herramientas deben tener al menos 3 caracteres.',
            'tools.max' => 'El nombre de las herramientas no deben exceder los 255 caracteres.',

            'spare_parts.required' => 'Las piezas de repuesto son requeridas.',
            'spare_parts.string' => 'Las piezas de repuesto solo deben contener caracteres.',
            'spare_parts.min' => 'Las piezas de repuesto deben tener al menos 3 caracteres.',
            'spare_parts.max' => 'Las piezas de repuesto no deben exceder los 255 caracteres.',

            'materials.required' => 'Los materiales son requeridos.',
            'materials.string' => 'Los materiales solo deben contener caracteres.',
            'materials.min' => 'Los materiales deben tener al menos 3 caracteres.',
            'materials.max' => 'Los materiales no deben exceder los 255 caracteres.',   

            'equipment.required' => 'El equipo es requerido.',
            'equipment.string' => 'El equipo solo debe contener caracteres.',
            'equipment.min' => 'El equipo debe tener al menos 3 caracteres.',
            'equipment.max' => 'El equipo no debe exceder los 255 caracteres.',

            'amount.required' => 'La cantidad es requerida.',
            'amount.string' => 'La cantidad solo debe contener caracteres.',
            'amount.min' => 'La cantidad debe tener al menos 1 carácter.',
            'amount.max' => 'La cantidad no debe exceder los 255 caracteres.',


         ];
     }
}
