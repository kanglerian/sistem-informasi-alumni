<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'company_name' => 'required|max:255',
            'field' => 'required',
            'scale' => 'required|max:50',
            'email' => 'required|max:255',
            'contact' => 'required|max:255',
            'address' => 'required|max:255',
            'status' => 'required|max:255',
        ];
    }
}
