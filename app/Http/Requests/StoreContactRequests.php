<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
    public function attributes() :array
    {
        return [
            'Fnom'=>'First name',
            'Lnom'=>'Last name',
            'email'=>'required',
            'phone'=>'phone number',
            'adress'=>'adress',
            'selectOption'=>'select Company',
        ];
    
    }
    public function messages() :array
    {
        return [
            'Fnom.required'=>':attribute is required',
            'Lnom.required'=>':attribute is required',
            'email.required'=>':attribute is required',
            'phone.required'=>':attribute is required',
            'adress.required'=>':attribute is required',
            'selectOption.required'=>':attribute is required',
        ];
    
    }
}
