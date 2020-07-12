<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Contacts extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            'attach' => 'required|max:500|mimes:pdf,doc,docx,odt,txt',
        ];
    }
}
