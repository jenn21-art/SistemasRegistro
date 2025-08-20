<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class StaffRequest extends FormRequest
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
            'full_name' => 'required|string|min:5|max:100',
            'code_staff'=> ['required','string','min;5','max:20',Rule::unique('staffs')->ignore($this->staff)],
            'position_company'=> 'required|string|min:3|max:100',
            'gender' => 'required|string|min:3|max:10',
            'telephone' => 'required|string|min:8|max:16',
            'identification' => ['required', 'string', 'min:5', 'max:20', Rule::unique('staffs')->ignore($this->staff)],
            'birthday_date' => 'required|date',
            'age' => 'required|string|max:3',
            'academic_level' => 'required|string|min:5|max:100',
            'address' => 'required|string|min:5|max:255',
            'marital_status' => 'required|string|min:3|max:20',
            'blood_type' => 'required|string|min:2|max:5',
            'ethnicity' => 'required|string|min:3|max:50',
            'nationality' => 'required|string|min:3|max:50',

           
        ];
    }

     public function messages(){
        
         return [
            'full_name.required' => 'El nombre completo es requerido.',
            'full_name.string'=> 'El nombre completo solo debe contener caracteres.',
            'full_name.min'=> 'El nombre completo debe tener al menos 5 caracteres.',
            'full_name.max'=> 'El nombre completo no debe exceder los 100 caracteres.',

            'code_staff.required' => 'El código del personal es requerido.',
            'code_staff.string' => 'El código del personal solo debe contener caracteres.',
            'code_staff.min' => 'El código del personal debe tener al menos 5 caracteres.',
            'code_staff.max' => 'El código del personal no debe exceder los 20 caracteres.',
            'code_staff.unique' => 'El código del personal ya está en uso.',

            'position_company.required' => 'El Cargo de ocupacion en la empresa es requerido.',
            'position_company.string' => 'El Cargo de ocupacion en la empresa solo debe contener caracteres.',
            'position_company.min' => 'El Cargo de ocupacion en la empresa debe tener al menos 3 caracteres.',
            'position_company.max' => 'El Cargo de ocupacion en la empresa no debe exceder los 100 caracteres.',

            'gender.required' => 'El género es requerido.',
            'gender.string' => 'El género solo debe contener caracteres.',
            'gender.min' => 'El género debe tener al menos 3 caracteres.',
            'gender.max' => 'El género no debe exceder los 10 caracteres.', 

            'telephone.required' => 'El teléfono es requerido.',
            'telephone.string' => 'El teléfono solo debe contener caracteres.',
            'telephone.min' => 'El teléfono debe tener al menos 8 caracteres.', 
            'telephone.max' => 'El teléfono no debe exceder los 16 caracteres.',

            'identification.required' => 'La identificación es requerida.',
            'identification.string' => 'La identificación solo debe contener caracteres.',
            'identification.min' => 'La identificación debe tener al menos 5 caracteres.',
            'identification.max' => 'La identificación no debe exceder los 20 caracteres.',
            'identification.unique' => 'La identificación ya está en uso.',

            'birthday_date.required' => 'La fecha de nacimiento es requerida.',
            'birthday_date.date' => 'La fecha de nacimiento debe ser una fecha válida.',

            'age.required' => 'La edad es requerida.',
            'age.string' => 'La edad solo debe contener caracteres.',
            'age.max' => 'La edad no debe exceder los 3 caracteres.',

            'academic_level.required' => 'El nivel académico es requerido.',
            'academic_level.string' => 'El nivel académico solo debe contener caracteres.',
            'academic_level.min' => 'El nivel académico debe tener al menos 5 caracteres.',
            'academic_level.max' => 'El nivel académico no debe exceder los 100 caracteres.',

            'address.required' => 'La dirección es requerida.',
            'address.string' => 'La dirección solo debe contener caracteres.',
            'address.min' => 'La dirección debe tener al menos 5 caracteres.',
            'address.max' => 'La dirección no debe exceder los 255 caracteres.',

            'marital_status.required' => 'El estado civil es requerido.',
            'marital_status.string' => 'El estado civil solo debe contener caracteres.',
            'marital_status.min' => 'El estado civil debe tener al menos 3 caracteres.',
            'marital_status.max' => 'El estado civil no debe exceder los 20 caracteres.',

            'blood_type.required' => 'El tipo de sangre es requerido.',
            'blood_type.string' => 'El tipo de sangre solo debe contener caracteres.',
            'blood_type.min' => 'El tipo de sangre debe tener al menos 2 caracteres.',
            'blood_type.max' => 'El tipo de sangre no debe exceder los 5 caracteres.',

            'ethnicity.required' => 'La etnia es requerida.',
            'ethnicity.string' => 'La etnia solo debe contener caracteres.',
            'ethnicity.min' => 'La etnia debe tener al menos 3 caracteres.',
            'ethnicity.max' => 'La etnia no debe exceder los 50 caracteres.',

            'nationality.required' => 'La nacionalidad es requerida.',
            'nationality.string' => 'La nacionalidad solo debe contener caracteres.',
            'nationality.min' => 'La nacionalidad debe tener al menos 3 caracteres.',
            'nationality.max' => 'La nacionalidad no debe exceder los 50 caracteres.',



         ];
     }
}
