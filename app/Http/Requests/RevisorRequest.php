<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RevisorRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'description' => 'required|min:3|max:100',
            'curriculum' => 'required|file|mimes:pdf,docx|max:10000'
        ];
        
    }
    public function messages(): array
    {
        return [
            'description.required' => "Il campo descrizione è obbligatorio",
            'curriculum.required' => "Il campo curriculum è obbligatorio",
            'curriculum.file' => "è richiesto un file di tipo pdf,docx",
        ];
    }
}
