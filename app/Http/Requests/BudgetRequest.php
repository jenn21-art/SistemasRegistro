<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class BudgetRequest extends FormRequest
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
            'workshop_name' => 'required|string|min:3|max:100',
            'address' => 'required|string|min:5|max:255',
            'telephone'=>'required|string|min:8|max:16',
            'registration_code'=> ['required', 'string', 'min:5', 'max:20', Rule::unique('budgets')->ignore($this->budget)],
            'customer_name' => 'required|string|min:3|max:100',
            'vehicle_brand' => 'required|string|min:3|max:100',
            'year' => 'required|date',
            'mileage' => 'required|string|min:1|max:50',
            'model' => 'required|string|min:3|max:100',
            'tuition' => 'required|string|min:1|max:100',
            'description_repairs' => 'required|string|min:3|max:255',
            'parts_list' => 'required|string|min:3|max:255',
            'labour' => 'required|string|min:3|max:255',
            'budget_validity' => 'required|date',
            'delivery_time' => 'required|string|min:3|max:100',
            'total_price' => 'required|string|min:1|max:50',
            'vehicle_information_id' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'workshop_name.required' => 'El nombre del taller es requerido.',
            'workshop_name.string' => 'El nombre del taller solo debe contener caracteres.',
            'workshop_name.min' => 'El nombre del taller debe tener al menos 3 caracteres.',
            'workshop_name.max' => 'El nombre del taller no debe exceder los 100 caracteres.',

            'address.required' => 'La dirección es requerida.',
            'address.string' => 'La dirección solo debe contener caracteres.',
            'address.min' => 'La dirección debe tener al menos 5 caracteres.',
            'address.max' => 'La dirección no debe exceder los 255 caracteres.',

            'telephone.required' => 'El teléfono es requerido.',
            'telephone.string' => 'El teléfono solo debe contener caracteres.',
            'telephone.min' => 'El teléfono debe tener al menos 8 caracteres.',
            'telephone.max' => 'El teléfono no debe exceder los 16 caracteres.',

            'registration_code.required' => 'El código de registro es requerido.',
            'registration_code.string' => 'El código de registro solo debe contener caracteres.',
            'registration_code.min' => 'El código de registro debe tener al menos 5 caracteres.',
            'registration_code.max' => 'El código de registro no debe exceder los 20 caracteres.',
            'registration_code.unique' => 'El código de registro ya está en uso.',

            'customer_name.required' => 'El nombre del cliente es requerido.',
            'customer_name.string' => 'El nombre del cliente solo debe contener caracteres.',
            'customer_name.min' => 'El nombre del cliente debe tener al menos 3 caracteres.',
            'customer_name.max' => 'El nombre del cliente no debe exceder los 100 caracteres.',

            'vehicle_brand.required' => 'La marca del vehículo es requerida.',
            'vehicle_brand.string' => 'La marca del vehículo solo debe contener caracteres.',
            'vehicle_brand.min' => 'La marca del vehículo debe tener al menos 3 caracteres.',
            'vehicle_brand.max' => 'La marca del vehículo no debe exceder los 100 caracteres.',

            'year.required' => 'El año es requerido.',
            'year.date' => 'El año debe ser una fecha válida.',

            'mileage.required' => 'El kilometraje es requerido.',
            'mileage.string' => 'El kilometraje solo debe contener caracteres.',
            'mileage.min' => 'El kilometraje debe tener al menos 1 carácter.',
            'mileage.max' => 'El kilometraje no debe exceder los 50 caracteres.',

            'model.required' => 'El modelo es requerido.',
            'model.string' => 'El modelo solo debe contener caracteres.',
            'model.min' => 'El modelo debe tener al menos 3 caracteres.',
            'model.max' => 'El modelo no debe exceder los 100 caracteres.', 

            'tuition.required' => 'La matrícula es requerida.',
            'tuition.string' => 'La matrícula solo debe contener caracteres.',
            'tuition.min' => 'La matrícula debe tener al menos 1 carácter.',
            'tuition.max' => 'La matrícula no debe exceder los 100 caracteres.',

            'description_repairs.required' => 'La descripción de las reparaciones es requerida.',
            'description_repairs.string' => 'La descripción de las reparaciones solo debe contener caracteres.',
            'description_repairs.min' => 'La descripción de las reparaciones debe tener al menos 3 caracteres.',
            'description_repairs.max' => 'La descripción de las reparaciones no debe exceder los 255 caracteres.', 

            'parts_list.required' => 'La lista de piezas es requerida.',
            'parts_list.string' => 'La lista de piezas solo debe contener caracteres.',
            'parts_list.min' => 'La lista de piezas debe tener al menos 3 caracteres.',
            'parts_list.max' => 'La lista de piezas no debe exceder los 255 caracteres.',   

            'labour.required' => 'La mano de obra es requerida.',
            'labour.string' => 'La mano de obra solo debe contener caracteres.',
            'labour.min' => 'La mano de obra debe tener al menos 3 caracteres.',
            'labour.max' => 'La mano de obra no debe exceder los 255 caracteres.',

            'budget_validity.required' => 'La validez del presupuesto es requerida.',
            'budget_validity.date' => 'La validez del presupuesto debe ser una fecha válida .',

            'delivery_time.required' => 'El tiempo de entrega es requerido.',
            'delivery_time.string' => 'El tiempo de entrega solo debe contener caracteres.',
            'delivery_time.min' => 'El tiempo de entrega debe tener al menos 3 caracteres.',
            'delivery_time.max' => 'El tiempo de entrega no debe exceder los 100 caracteres.',  

            'total_price.required' => 'El precio total es requerido.',
            'total_price.string' => 'El precio total solo debe contener caracteres.',
            'total_price.min' => 'El precio total debe tener al menos 1 carácter.',
            'total_price.max' => 'El precio total no debe exceder los 50 caracteres.',

            'vehicle_information_id.required' => 'La información del vehículo es requerida.',
        ];
}

}