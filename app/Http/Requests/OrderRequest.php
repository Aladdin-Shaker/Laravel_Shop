<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            // form validation for add a new order
            'name'  =>  'required|min:3',
            'email' => 'required|email|max:255|unique:users',
            'address'  =>  'required|min:3',
            'message' => 'required|min:3',
            'phone' => 'required|numeric'
            
        ];
    }
}
