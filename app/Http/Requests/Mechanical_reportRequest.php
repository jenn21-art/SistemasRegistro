<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class Mechanical_reportRequest extends FormRequest
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
            'date'=> 'required|date',
            'code'=> ['required', 'string', 'min:5', 'max:20', Rule::unique('mechanical_reports')->ignore($this->mechanical_report)],
            'engine'=> 'required|string|min:3|max:100',
            'transmission_system'=> 'required|string|min:3|max:100',
            'brake_system'=> 'required|string|min:3|max:100',
            'suspension'=> 'required|string|min:3|max:100',
            'electrical_system'=> 'required|string|min:3|max:100',
            'bodywork'=> 'required|string|min:3|max:100',
            'chassis'=> 'required|string|min:3|max:100',
            'repairs'=> 'required|string|min:3|max:255',
            'equipment_used'=> 'required|string|min:3|max:255',
            'recommendations'=> 'required|string|min:3|max:255',
            'in_charge'=> 'required|string|min:3|max:100',
            'record_id'=> 'required',
          ];
    }

    public function messages()
    {
        return [
            'date.required' => 'La fecha es requerida.',
            'date.date' => 'La fecha debe ser una fecha válida.',

            'code.required' => 'El código es requerido.',
            'code.string' => 'El código solo debe contener caracteres.',
            'code.min' => 'El código debe tener al menos 5 caracteres.',
            'code.max' => 'El código no debe exceder los 20 caracteres.',
            'code.unique' => 'El código ya está en uso.',

            'engine.required' => 'El motor es requerido.',
            'engine.string' => 'El motor solo debe contener caracteres.',
            'engine.min' => 'El motor debe tener al menos 3 caracteres.',
            'engine.max' => 'El motor no debe exceder los 100 caracteres.', 

            'transmission_system.required' => 'El sistema de transmisión es requerido.',
            'transmission_system.string' => 'El sistema de transmisión solo debe contener caracteres.',
            'transmission_system.min' => 'El sistema de transmisión debe tener al menos 3 caracteres.',
            'transmission_system.max' => 'El sistema de transmisión no debe exceder los 100 caracteres.',   

            'brake_system.required' => 'El sistema de frenos es requerido.',
            'brake_system.string' => 'El sistema de frenos solo debe contener caracteres.',
            'brake_system.min' => 'El sistema de frenos debe tener al menos 3 caracteres.',
            'brake_system.max' => 'El sistema de frenos no debe exceder los 100 caracteres.',

            'suspension.required' => 'La suspensión es requerida.',
            'suspension.string' => 'La suspensión solo debe contener caracteres.',
            'suspension.min' => 'La suspensión debe tener al menos 3 caracteres.',  
            'suspension.max' => 'La suspensión no debe exceder los 100 caracteres.',

            'electrical_system.required' => 'El sistema eléctrico es requerido.',
            'electrical_system.string' => 'El sistema eléctrico solo debe contener caracteres.',
            'electrical_system.min' => 'El sistema eléctrico debe tener al menos 3 caracteres.',
            'electrical_system.max' => 'El sistema eléctrico no debe exceder los 100 caracteres.',  

            'bodywork.required' => 'La carrocería es requerida.',
            'bodywork.string' => 'La carrocería solo debe contener caracteres.',    
            'bodywork.min' => 'La carrocería debe tener al menos 3 caracteres.',
            'bodywork.max' => 'La carrocería no debe exceder los 100 caracteres.',

            'chassis.required' => 'El chasis es requerido.',
            'chassis.string' => 'El chasis solo debe contener caracteres.',
            'chassis.min' => 'El chasis debe tener al menos 3 caracteres.',
            'chassis.max' => 'El chasis no debe exceder los 100 caracteres.',

            'repairs.required' => 'Las reparaciones son requeridas.',
            'repairs.string' => 'Las reparaciones solo deben contener caracteres.',
            'repairs.min' => 'Las reparaciones deben tener al menos 3 caracteres.',
            'repairs.max' => 'Las reparaciones no deben exceder los 255 caracteres.',

            'equipment_used.required' => 'El equipo utilizado es requerido.',
            'equipment_used.string' => 'El equipo utilizado solo debe contener caracteres.',
            'equipment_used.min' => 'El equipo utilizado debe tener al menos 3 caracteres.',
            'equipment_used.max' => 'El equipo utilizado no debe exceder los 255 caracteres.',

            'recommendations.required' => 'Las recomendaciones son requeridas.',
            'recommendations.string' => 'Las recomendaciones solo deben contener caracteres.',
            'recommendations.min' => 'Las recomendaciones deben tener al menos 3 caracteres.',
            'recommendations.max' => 'Las recomendaciones no deben exceder los 255 caracteres.',    

            'in_charge.required' => 'El encargado es requerido.',
            'in_charge.string' => 'El encargado solo debe contener caracteres.',
            'in_charge.min' => 'El encargado debe tener al menos 3 caracteres.',    
            'in_charge.max' => 'El encargado no debe exceder los 100 caracteres.',

            'record_id.required' => 'El ID del registro es requerido.',
        ];
    }
}
