<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CareerFormRequest extends FormRequest
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
            //
            'name' => 'required',
            'email' => 'required',
            'description' => 'required',
            'birth_year' => 'required',
            'file_upload' => 'required|mimes:pdf,jpg|max:5048',
        ];
    }
}
