<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LaptopRequest extends FormRequest
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

            // form validation for add a new laptop
            'name'  =>  'required|unique:posts|min:2',
            'cpu' => 'required|numeric',
            'gpu'  =>  'required|min:3',
            'ram' => 'required|numeric',
            'hard' => 'required||min:2',
            'color' => 'required||min:3',
            'price' => 'required|numeric',
            'image1' => 'required|mimes:jpeg,bmp,png',
            'image2' => 'required|mimes:jpeg,bmp,png',
            'image3' => 'required|mimes:jpeg,bmp,png'
            
        ];
    }
}
