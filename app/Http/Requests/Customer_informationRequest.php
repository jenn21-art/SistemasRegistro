<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Customer_informationRequest extends FormRequest
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
            'vehicle_brand' => 'required|string|min:3|max:100',
            'code' => ['required', 'string', 'min:5', 'max:20', Rule::unique('customer_informations')->ignore($this->customer_information)],
            'tuition' => 'required|string|min:1|max:100',
            'identification' => ['required', 'string', 'min:5', 'max:20', Rule::unique('customer_informations')->ignore($this->customer_information)],
            'address' => 'required|string|min:5|max:255',
            'telephone' => ['required', 'string', 'min:8', 'max:16', Rule::unique('customer_informations')->ignore($this->customer_information)]
        ];
    }

     public function messages(){

        return[
            'name.required' => 'El nombre es requerido.',
            'name.string' => 'El nombre solo debe contener caracteres.',
            'name.min' => 'El nombre debe tener al menos 3 caracteres.',
            'name.max' => 'El nombre no debe exceder los 100 caracteres.',

            'vehicle_brand.required' => 'La marca del vehículo es requerida.',
            'vehicle_brand.string' => 'La marca del vehículo solo debe contener caracteres.',
            'vehicle_brand.min' => 'La marca del vehículo debe tener al menos 3 caracteres.',
            'vehicle_brand.max' => 'La marca del vehículo no debe exceder los 100 caracteres.',

            'code.required' => 'El código es requerido.',
            'code.string' => 'El código solo debe contener caracteres.',
            'code.min' => 'El código debe tener al menos 5 caracteres.',
            'code.max' => 'El código no debe exceder los 20 caracteres.',
            'code.unique' => 'El código ya está en uso.',

            'tuition.required' => 'La matrícula es requerida.',
            'tuition.string' => 'La matrícula solo debe contener caracteres.',
            'tuition.min' => 'La matrícula debe tener al menos 1 carácter.',
            'tuition.max' => 'La matrícula no debe exceder los 100 caracteres.',

            'identification.required' => 'La identificación es requerida.',
            'identification.string' => 'La identificación solo debe contener caracteres.',
            'identification.min' => 'La identificación debe tener al menos 5 caracteres.',
            'identification.max' => 'La identificación no debe exceder los 20 caracteres.',
            'identification.unique' => 'La identificación ya está en uso.',

            'address.required' => 'La dirección es requerida.',
            'address.string' => 'La dirección solo debe contener caracteres.',
            'address.min' => 'La dirección debe tener al menos 5 caracteres.',
            'address.max' => 'La dirección no debe exceder los 255 caracteres.',

   
        ];
     }
}
