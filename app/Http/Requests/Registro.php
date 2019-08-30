<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Registro extends FormRequest
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
            'full_name' => 'required',
            'campus_id' => 'required',
            'staff_id' => 'required',
            'job_email' => 'required',
            'is_loading' => 'required',
            'is_food' => 'required',
            'check_in' => 'required',
            'check_out' => 'required'
        ];
    }
}
